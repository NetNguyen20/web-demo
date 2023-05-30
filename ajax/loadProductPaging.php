<?php
  
  require_once 'ajaxConfig.php';

  $perPage = isset($_POST["perPage"]) ? $_POST["perPage"] : 0;

  $page = isset($_POST["page"]) ? $_POST["page"] : 0;

  $idl = $_POST["idl"];

  $where = "";

  if($idl!=0){

      $where .= " and id_list={$idl}";

  }

  if($idc!=0){

      $where .= " and id_cat={$idc}";

  }
  
  $type= isset($_POST["type"]) ? $_POST["type"] : '';

  $totalItem  = $db->rawQueryOne("select count(id) as total from #_baiviet where hienthi=1 and type=? {$where}",array($type));

  $numbButton = ceil($totalItem["total"] - ($perPage * $page));

  $html = "";

  if(!empty($sort)){

      $where .= " order by giaban {$sort}";

  }

  $pageDetail = $page - 1;

  $startPoint = $pageDetail * $perPage;

  $query = "select *,tenkhongdau_$lang as tenkhongdau from #_baiviet where hienthi=1 and type=? {$where} limit $startPoint,$perPage";

  $sanpham = $db->rawQuery($query,array($type));

  if(count($sanpham)>0){

      $html = $func->gridTemplateProduct($sanpham,'paper','col l-3 m-4 c-6 mb20 mb-t-16 mb-m-8 d-flex flex-column fadeInDown wow','h5','291','291');

      $res["html"] = $html;

      $res["status"] = 200;

      $res["numb"] = $numbButton;

      $res["title"] = "Hiển thị thêm {$numbButton} sản phẩm";
      
      $res["button"] = "Hiển thị thêm {$numbButton} sản phẩm <i class='fa-light fa-chevrons-down ml5'></i>";

  }else{

      $res["html"] = $query;

      $res["status"] = 201;

  }

  echo json_encode($res);

?>