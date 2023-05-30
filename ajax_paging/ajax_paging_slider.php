<?php

  require_once 'ajaxConfig.php';

  include_once "class_paging_ajax.php";

  if(isset($_REQUEST["page"]))

    {
      $idcat = "";
      
      $cond = [];

      $idlist = "";

      if($_REQUEST["id_list"]>0){

        $idlist = " and id_list= {$_REQUEST["id_list"]}";

      }

      if($_REQUEST["id_cat"]>0){

        $idcat = " and id_cat = {$_REQUEST["id_cat"]} ";

      }

	  if(isset($_REQUEST["search"]) && $_REQUEST["search"]!=''){

		$strSoryBy = explode('-',$_REQUEST["search"]);

		$soryBy = " and {$strSoryBy[0]} = {$strSoryBy[1]}";

	  }

      $type = $_REQUEST['type'];

      array_push($cond,$type);

      $str_van = "select *,tenkhongdau_$lang as tenkhongdau from #_baiviet where hienthi=1 ".$idlist." ".$idcat." ".$soryBy." and noibat=1 and type=? order by stt asc,id desc";

      $result_pag_data = $db->rawQuery($str_van,array($type));

    }

?>

<?php

    if(count($result_pag_data)>0){

?>

	<div class="owl-carousel owl-theme owl-carousel-loop quick-slide slider-flexbox <?=$_REQUEST["slider"]?>" data-height="640" data-nav="0"

		data-loop="1" data-play="1" data-lg-items="4" data-md-items="2" data-sm-items="2" data-xs-items="2" data-dot="1"

		<?php if($deviceType !='phone'){ ?> data-margin='20' <?php }else{ ?> data-margin='8'  <?php }?> data-deplay="<?=$row_setting["time_slider"]?>">

		<?=$func->gridTemplateProduct($result_pag_data,'tea','pt10 pb10 d-flex flex-column flex-cl-1 mb20','h4',227,227)?>

	</div>
 
<?php }else{?>

	<div class="t-center">

		<p>Nội dung đang được cập nhật...</p>

	</div>
	
<?php }?>
