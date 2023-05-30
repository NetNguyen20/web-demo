<?php

    require_once 'ajaxConfig.php';

    $html = '';

    $id_tacgia = isset($_REQUEST["id"]) ? $_REQUEST["id"] : '';

    $limit = isset($_REQUEST["limit"]) ? $_REQUEST["limit"] : '';

    $offset = isset($_REQUEST["offset"]) ? $_REQUEST["offset"] : '';

    $author_post = $db->rawQuery("select ten_$lang as ten,id,id_list,tenkhongdau_$lang as tenkhongdau,type,luotxem,ngaytao,ngaysua from #_baiviet where hienthi=1 and type in ('tin-tuc','cong-trinh','bao-gia','chinh-sach','thiet-ke-thi-cong') and id_tacgia=? order by stt asc,id asc limit {$offset},{$limit}",array($id_tacgia));
    
    if(count($author_post)>0){

        foreach($author_post as $key => $value){

            $seoDB = $seo->getSeoDB($value['id'],'baiviet','man',$value["type"]);
    
            $strTime = ($value['ngaysua']!=0) ? date('d/m/Y',$value['ngaysua']):date('d/m/Y',$value['ngaytao']);
    
            $html .="<div class='col l-6 m-6 c-12 mb20 mb-t-16 mb-m-8'><div class='wrapper-author__post mt20'>
    
            <div class='wrapper-author__post-title'>
    
                <a href='{$func->slugUrl($value)}'
                title='{$value['ten']}'
                aria-label='{$value['ten']}'
                role='link'
                rel='dofollow'>{$value['ten']}</a>
    
            </div>
    
            <div class='wrapper-author__post-des mt20'>{$seoDB["description_$lang"]}</div>
    
            <div class='wrapper-author__post-view mt20'>
    
                <span class='mr30'><i class='fa-light fa-calendar'></i> {$strTime}</span>
    
                <span><i class='fa-thin fa-eye'></i> {$value['luotxem']}</span>
    
            </div>
    
        </div>
        
        </div>";
    
        }
    }
   
    if(!empty($html)){

        $res["status"] = 200;
        $res["html"] = $html;

    }else{
        $res["status"] = 201;
        $res["html"] = $html;
    }

    echo json_encode($res);

?>