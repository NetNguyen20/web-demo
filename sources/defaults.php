<?php

	$page_index=$deviceType=='phone' ? 20 : 20;

	$viewed = [];

	if(isset($_SESSION['view'])){
		$viewed = $_SESSION['view'];
	}else{
		$_SESSION['view'] = array();
	}
	
	$row_setting= $db->rawQueryOne("select * from #_setting limit 0,1");

	$logo = $db->rawQueryOne("select photo_$lang as photo from #_bannerqc where hienthi=1 and type=? limit 0,1",array('logo'));

	$bocongthuong = $db->rawQueryOne("select photo_$lang as photo,link from #_bannerqc where hienthi=1 and type=? limit 0,1",array('bocongthuong'));

	$logo_footer =$db->rawQueryOne("select photo_$lang as photo from #_bannerqc where hienthi=1 and type=? limit 0,1",array('logo-footer'));

	$logo_mobile=$db->rawQueryOne("select photo_$lang as photo from #_bannerqc where hienthi=1 and type=? limit 0,1",array('logo_mobile'));

	$seoPage =$db->rawQueryOne("select photo_$lang,options from #_bannerqc where hienthi=1 and type=? limit 0,1",array('hinhdaidien'));

	$socical = $db->rawQuery("select id,photo_$lang as photo,ten_$lang as ten,link from #_photo where hienthi=1 and type=?",array('mangxahoi'));

	$socical_footer = $db->rawQuery("select id,photo_$lang as photo,ten_$lang as ten,link from #_photo where hienthi=1 and type=?",array('mangxahoi-footer'));

	$bg_footer =$db->rawQueryOne("select photo_$lang from #_bannerqc where hienthi=1 and type=? limit 0,1",array('bg_footer'));

	$chinhsach = $db->rawQuery("select type,ten_$lang as ten,tenkhongdau_$lang as tenkhongdau from #_baiviet where type=? and hienthi=1 order by stt asc,id desc",array('chinh-sach'));


	// index
	$hotline= $db->rawQuery("select ten_$lang as ten,phone from #_map where hienthi=1 and type=? order by stt asc limit 0,5",array('hotline'));

	$footer=$db->rawQueryOne("select mota_$lang as mota from #_company where type=? limit 1",array('footer'));

	$name_company=$db->rawQueryOne("select mota_$lang as mota from #_company where type=? limit 1",array('name-company'));

	$maps = $db->rawQuery("select id,ten_$lang, diachi_$lang, phone, email,website,iframe_map from #_map where hienthi=1 order by stt asc,id desc limit 0,2");

	$list_c1_dichvu = $db->rawQuery("select id, ten_$lang as ten, tenkhongdau_$lang as tenkhongdau,type,photo from #_baiviet_list where hienthi=1 and menupc=1 and type=? order by stt desc",array('dich-vu'));

	$list_c1_sanpham = $db->rawQuery("select id, ten_$lang as ten, tenkhongdau_$lang as tenkhongdau,type,photo from #_baiviet_list where hienthi=1 and menupc=1 and type=? order by stt desc",array('san-pham'));

	$list_c1_footer = $db->rawQuery("select id, ten_$lang as ten, tenkhongdau_$lang as tenkhongdau,type,photo from #_baiviet_list where hienthi=1 and noibat<>0 and type=? order by stt desc",array('san-pham'));
	
	$banner_tpl = $func->OneDataPhoto(null,'banner-all',null,'array');

	$_icontimkiem = $func->OneDataPhoto("",'icon-timkiem','limit 0,1',"array");

	$_icongiohang = $func->OneDataPhoto("",'icon-giohang','limit 0,1',"array");


	$time_slider = $row_setting["time_slider"];
?>