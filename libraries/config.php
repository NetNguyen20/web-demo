<?php

	if(!defined('_lib')) die("Errors");

	date_default_timezone_set('Asia/Ho_Chi_Minh');

	$config=array(


		'arrayDomainSSL' => array(),


		'website'=>array(


			'server-name'=>$_SERVER['SERVER_NAME'],



			'url'=>'/web-hodicare/',



			'debug-css' => false,



			'debug-js'=>true,



			'debug-responsive'=>true,



			'error-reporting'=>false,



			'robots'=>'index,follow',



			'upload' => array(

				

				'max-width' => 1600,



				'max-height' => 1600

			),

		),

		'database'=>array(



			'type' => 'mysql',



			'host' => 'localhost',



			'username' => 'root',



			'password' => '',



			'url'=>'/web-hodicare/upload/',



			'dbname'=> 'db_hodicare',



			'port' => 3306,



			'prefix' => 'table_',



			'charset' => 'utf8'

			

		),
		'login-lock'=>array(

		

			'attempt'=>5,



			'delay'=>15

		),

		'color-loai'=>array(
			1=>"status-on",
			2=>"status-off"
		),

		'loai-bds'=>array(
			1=>"Còn hàng",
			2=>"Hết hàng"
		),

		'mail'=>array(



			'ip'=>'103.7.43.154',



			'email'=>'no-reply@thien-phuoc.com',



			'password'=>'QWekwRI0',



			'smtp' => true,



			'secure' => 'ssl',



			'port' => 465,

			

			'gmail' => false



		),

		'author'=>array(



			'name'=>'Nguyễn Hoàng Nam',



			'email'=>'kythuat.iweb@gmail.com',



			'create'=>date('d/m/Y H:i:s')



		),

		'seo-debug'=>array(

			'index'=>'Trang chủ',

			'products/product'=>'Sản phẩm',

			'products/product_list'=>'Sản phẩm cấp 1',

			'products/product_cat'=>'Sản phẩm cấp 2',

			'news/news'=>'Tin tức',

			'news/news_chinhsach'=>"Chính sách",

			'news/news_static'=>'Chi tiết chính sách',

			'news/news_detail'=>'Trang chi tiết bài viết',

			'pages/baiviet'=>'Giới thiệu',

			'news/tacgia'=>'Tác giả',
		),

		'seo-lang'=>array(

			'vi'=>'Vi',
		),

		'cart-advance'=>true,



		'lang'=>array('vi'=>'Vi'),



		"faceid"=>"582534979152027",



		'salt'=>'^29#_%z/@$',



		'secret'=>'@287Rzx_^!*95&'

	);


	/* Error reporting */

	error_reporting(($config['website']['error-reporting']) ? E_ALL : 0);



	/* Cấu hình base */

	require_once _lib.'checkSSL.php';



	$check_ssl = new checkSSL();



	$http = $check_ssl->getProtocol();



	$config_url = $config['website']['server-name'].$config['website']['url'];



	$https_config = $http.$config_url;



	// cấu hình upload

	require_once _lib."constant.php";

?>