<?php

    require_once 'ajaxConfig.php';

    $id = $_POST["id"];

    $value = $_POST["value"];

    $variable = $_POST["variable"];

    $db->where('id',$id);

    $send["id_loai"] = $value;

    $update = $db->update('baiviet',$send);

    $rowColor="";

    if($value==1){

        $rowColor = "#4FEA41";

    }else if($value==2){

        $rowColor = "#FEAC2B";

    }else{

        $rowColor = "transparent";
        
    }

    if($update){

        $result["message"] = "Cập nhật trạng thái cho id {$id} thành công!!!";
        $result["status"] = 200;
        $result["color"] = $rowColor;

    }else{
        $result["message"] = "Cập nhật trạng thái cho id {$id} không thành công!!!";
        $result["status"] = 201;
    }

    echo json_encode($result);


?>