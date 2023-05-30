<?php

    require_once 'ajaxConfig.php';

    $id = $_POST["id"];

    $status = $_POST["status"];

    $send["order_status"] = $status;

    $db->where('id',$id);

    $update = $db->update('order',$send);

    if($update){

        $res["message"] = "Cập nhật trạng thái thành công!!!";

        $res["status"] = 200;

    }else{

        $res["message"] = "Hệ thống gặp vấn đề cập nhật trạng thái không thành công!!!";

        $res["status"] = 201;

    }

    echo json_encode($res);

?>