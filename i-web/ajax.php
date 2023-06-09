<?php
	session_start();
    
    defined( '_root' ) ?:  define( '_root', __DIR__);

	defined( '_ds' ) ?:  define( '_ds', DIRECTORY_SEPARATOR );

    defined( '_lib' ) ?:  define( '_lib', '..'._ds.'libraries'._ds );

    defined( '_source' ) ?:  define( '_source', _root._ds.'sources'._ds );

	$login_name = 'IWEBCO';	

	include_once _lib."config.php";
	
    require_once _lib.'autoload.php';

    new autoload();

    $db = new PDODb($config['database']);

    $func = new functions($db);
	
	function login(){

		global $db,$func,$config,$login_name;

		if(!empty($_POST)){

			$data = $_POST;

			$username = htmlspecialchars($data['username']);

			$password = htmlspecialchars($data['password']);

			$remember = (int) $data['remember'];

			$ip = $func->getClientIpServer();

			$login_failed=false;

			$password = $func->encryptPassword($config['secret'],$password,$config['salt']);

			$row  =  $db->rawQueryOne("select * from #_user where username=? and password=?",array($username,$password));

			if(!empty($row)){
				
				$_SESSION[$login_name] = true;

				$_SESSION['login']['role'] = $row['role'];

				$_SESSION['login']['quyen'] = $row['quyen'];

				$_SESSION['login']['nhom'] = $row['nhom'];

				$_SESSION['login']['com'] = $row['com'];

				$_SESSION['login']['username'] = $username;

				$_SESSION['login']['id'] = $row['id'];

				$_SESSION['login']['permission'] = $row['permission'];

				$_SESSION['isLoggedIn'] = true;
				
				if($remember==1){

					$randomNumber = rand(99,999999999);

					$token = dechex(($randomNumber*$randomNumber));

					$salt = sha1($token . $username);

					$time = time()+60*60*24*365; 

					$row_remember = $db->rawQueryOne("select * from #_user_remember where username=?",array($username));

					if($row_remember){

						$query = "update #_user_remember set username = '$username', token = $token, salt = salt, time = $time";

					}else{

						$query = "insert into #_user_remember (username, token, salt, time) VALUES ($username,$token,$salt,$time)";

					}

					$db->rawQuery($query);

					setcookie('remember', $username.'.'.$salt, $time);

				}


				$timenow = time();

				$id_user = $row['id'];

				$user_agent = $_SERVER['HTTP_USER_AGENT'];
				
				//Ghi log truy cập thành công
				$sql="insert into #_user_log (id_user,ip,timelog,user_agent) values ('$id_user','$ip','$timenow','$user_agent')";

				$db->rawQuery($sql);

				//Tạo token và login session			
				$cookiehash = md5(sha1($row['password'].$row['username']));

				$token = md5(time());

				$sql = "update #_user SET login_session= '$cookiehash', lastlogin = '$timenow', user_token = '$token' WHERE id ='$id_user'";

				$db->rawQuery($sql);	

				$_SESSION['login_session'] = $cookiehash;

				$_SESSION['login_token'] = $token;

				//Login thành công thì reset số lần login sai và thời gian khóa
				$sql = "select id,login_ip,login_attempts,attempt_time,locked_time from #_user_limit where login_ip =  '$ip'  order by  id desc limit 1";

				$row_limitlogin = $db->rawQuery($sql);

				if(!empty($row_limitlogin)){
					
			        $id_login = $row_limitlogin[0]['id'];

			        $sql="update #_user_limit set login_attempts = 0,locked_time = 0 where id = '$id_login'";

					$db->rawQuery($sql);
			   	}

			   	$login_failed=true;

				$result['status'] = 200;

				$result['message'] = 'Đăng nhập thành công';

				$result['error'] = 'success';

				$result['url'] = 'index.html';

			}else{

				$sql = "select id,login_ip,login_attempts,attempt_time,locked_time from #_user_limit where login_ip =  '$ip'  order by  id desc limit 1";

				$row_check = $db->rawQuery($sql);	

				if(!empty($row_check)){//Trường hơp đã tồn tại trong database	

					$id_login = $row_check[0]['id'];

					$attempt =$row_check[0]['login_attempts'];//Số lần thực hiện

	         		$noofattmpt = $config['login-lock']['attempt'];//Số lần giới hạn

	         		 if($attempt<$noofattmpt){//Trường hợp còn trong giới hạn

						$attempt = $attempt + 1;

						$sql="update #_user_limit set login_attempts = '$attempt' where id = '$id_login'";

						$db->rawQuery($sql);

						$no_ofattmpt =  $noofattmpt+1;

						$remain_attempt = $no_ofattmpt - $attempt;

						$msg = 'Sai thông tin. Còn '.$remain_attempt.' lần thử!';

						$result['status'] = 202;

						$result['error'] = 'error';

	         		 }else{//Trường hợp vượt quá giới hạn

	         		 	if($row_check[0]['locked_time']==0){

			                  $attempt = $attempt +1;

			                  $timenow = time();

			                  $sql="update #_user_limit set login_attempts = '$attempt' ,locked_time = '$timenow' where id = '$id_login'";

							  $db->rawQuery($sql);

		                 }else{

			                  $attempt = $attempt +1;	

			                  $sql="update #_user_limit set login_attempts = '$attempt' where id = '$id_login'";

							  $db->rawQuery($sql);

		                 }

		                $delay_time = $config['login-lock']['delay'];

		                $result['status'] = 204;

		                $result['error'] = 'error';

	                 	$msg = "Bạn đã hết lần thử. Vui lòng thử lại sau ".$delay_time." phút!";

	         		 }
				}else{//Trường hợp IP lần đầu tiên đăng nhập sai

					$timenow = time();

					$sql="insert into #_user_limit (login_ip,login_attempts,attempt_time,locked_time) values('$ip',1,'$timenow',0)";

					$db->rawQuery($sql);

			       	$remain_attempt = $config['login-lock']['attempt'];

			        $msg = 'Sai thông tin. Còn '.$remain_attempt.' lần thử!';

			        $result['status'] = 203;

			        $result['error'] = 'error';

				}

				$result['message'] = $msg;
			}

			if($login_failed==false){
				
				$sql = "select id,login_ip,login_attempts,attempt_time,locked_time from #_user_limit where login_ip='$ip' order by id desc limit 1 ";

				$row_check = $db->rawQuery($sql);

				if(!empty($row_check)){

					$id_login = $row_check[0]['id'];

				    $time_now = time();
				    //Kiểm tra thời gian bị khóa đăng nhập

				    if($row_check[0]['locked_time']>0){

					    $locked_time = $row_check[0]['locked_time'];

					    $delay_time = $config['login-lock']['delay'];

					    $interval = $time_now  - $locked_time;

					    if($interval <= $delay_time*60){

					    	$time_remain = $delay_time*60 - $interval;

					        $msg = "Xin lỗi..! Vui lòng thử lại sau ". round($time_remain/60)." phút..!";
					        $result['status'] = 201;

					        $result['error'] = 'error';

							$result['message'] = $msg;

				        }else{

				        	$sql="update #_user_limit set login_attempts = 0, attempt_time = '$time_now', locked_time = 0 where id = '$id_login'";

				        	$db->rawQuery($sql);

				        }
			        }
				}
			}
			
			echo json_encode($result);
		}
	}

	login();

?>