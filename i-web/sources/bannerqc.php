
<?php	if(!defined('_source')) die("Error");
$folder=_upload_hinhanh;
switch($act){
	case "capnhat":
		$apiPhoto->getPhoto();
		$template = "bannerqc/banner_add";
		break;
	case "save":
		$apiPhoto->savePhoto();
		break;
	default:
		$template = "index";
}
?>