<style>
    ol#breadcrumb{
        margin: 0;
        margin-bottom: 15px;
    }
</style>

<section class="product-detail__sc" id="detail-product">

    <div class="container">

        <form method="post" data-role="add-to-cart" enctype="multipart/form-data" onsubmit="return false" name="product-detail-<?=$row_detail['id']?>" id="product-detail-<?=$row_detail['id']?>">
            <input type="hidden" name="src" value="addCart">

            <input type="hidden" name="pid" value="<?=$row_detail['id']?>">

            <div class="row10 d-flex flex-wrap">

                <div class="item10 col-12 mt20 d-none-m">
                    <div class="breadcumb breadcumb--detail breadcumb--detail--product">
                        <?=$str_breadcrumbs?>
                    </div>
                </div>
              
                <div class="item10 col-9 w-100-m w-100-t mb-t-20 mt-m-20">

                    <div class="wrapper-aside__productdetail-left">
                    
                        <div class="row10 d-flex flex-wrap">

                            <div class="item10 col-6 w-100-t w-100-m">

                                <div class="img-top">

                                    <a href="thumbs/500x500x1/<?=_upload_baiviet_l.$row_detail['photo']?>" class="MagicZoom" id="Zoom-1" data-options="variableZoom: true;expand: on; hint: always; " >

                                        <img class="col-12" src="thumbs/500x500x1/<?=_upload_baiviet_l.$row_detail['photo']?>" alt="<?=$row_detail['ten_'.$lang]?>"/>

                                    </a>

                                </div>

                                <?php if(count($photos)>0){ ?>

                                <div class="img-bottom">

                                    <div class="product-detail-slider owl-carousel owl-theme owl-carousel-loop in-home" data-height="575" data-dot="1" data-nav='0'

                                    data-loop='0' data-play='1' data-lg-items='4' data-md-items='3' data-sm-items='3' data-xs-items="4"

                                    data-margin='10'>

                                        <div class="items mb20"><div class="img"><a data-zoom-id="Zoom-1" href="<?=_upload_baiviet_l.$row_detail['photo']?>" data-image="thumbs/500x500x1/<?=_upload_baiviet_l.$row_detail['photo']?>"><img <?= $func->errorImg() ?> src="<?=_upload_baiviet_l.$row_detail['photo']?>" alt="<?=$row_detail['ten_'.$lang]?>"></a></div></div>

                                        <?php 
                                            foreach($photos as $k=>$v){  
                                        ?>

                                        <div class="items mb20"><div class="img"><a data-zoom-id="Zoom-1" href="<?=_upload_baiviet_l.$v['photo']?>" data-image="thumbs/500x500x1/<?=_upload_baiviet_l.$v['photo']?>"><img src="thumbs/500x500x1/<?=_upload_baiviet_l.$v['photo']?>" alt="<?=$row_detail['ten_'.$lang]?>"></a></div></div>

                                        <?php } ?>

                                    </div>

                                </div>

                                <?php } ?>

                            </div>

                            <div class="item10 col-6 w-100-t w-100-m">

                                <div class="row10">

                                    <div class="item10 col-12">

                                        <div class="box-detail mt20i">

                                            <h1 class="mg0">
                                                <span><?=$row_detail['ten_'.$lang]?></span>
                                            </h1>

                                            <ul>

                                                <li>

                                                    <div class="row10 d-flex">

                                                        <div class="item10 col-12">

                                                            <span class="product-detail-status <?=($row_detail['id_loai']==1) ? 'detail-status--success' : 'detail-status--outofstock'?> "><?=($row_detail['id_loai']==1) ? '<i class="fa-regular fa-check"></i>' : '<i class="fa-light fa-ban"></i>'?> <?=($row_detail['id_loai']==1) ? 'Đang Mở Bán' : 'Đã Bán'?></span>

                                                            <span class="product-detail-view"><i class="fa-regular fa-eye mr5"></i> <?=$row_detail['luotxem']?> Lượt Xem</span>
                                                        
                                                        </div>

                                                    </div>

                                                </li>

                                                <li class="wrapper-productitem__price">

                                                    <div class="row10 d-flex flex-wrap">

                                                        <div class="item10 col-12 w-100-m mb-m-10">

                                                            <span class="product-detail-label-left">Giá:</span><span
                                                                    class="price-new-product" id="view-price-detail"><?=($row_detail['giaban']!=0) ? $func->changeMoneyVND($row_detail['giaban']) : 'Liên hệ'?></span>

                                                        </div>

                                                        <?php /* if($row_detail['giacu']!=0){?>

                                                        <div class="item10 col-5 w-100-m">
                                                            
                                                            <span
                                                                    class="price-old-product "> <?=$func->changeMoney($row_detail['giacu'],$lang)?></span>

                                                        </div>

                                                        <?php } */?>

                                                    </div>

                                                </li>

                                                <li class="wrapper-realestate__item-aside">

                                                    <div class="row10 d-flex">

                                                        <div class="item10 col-12">

                                                            <span class="wrapper-realestate__attribute">

                                                                <i class="fa-thin fa-clock mr5"></i>

                                                                <span class="wrapper-realestate__attribute-info">Ngày đăng:</span>

                                                                <span class="wrapper-realestate__attribute-detail"><?=($row_detail["ngaysua"]!=0) ? date('H:i A d/m/Y',$row_detail["ngaysua"]) : date('H:i A d/m/Y',$row_detail["ngaytao"])?></span>

                                                            </span>

                                                        </div>

                                                    </div>

                                                </li>

                                                <li class="wrapper-realestate__item-aside">

                                                    <div class="row10 d-flex flex-wrap">

                                                        <div class="item10 col-6 w-100-m mb-m-20">

                                                            <span class="wrapper-realestate__attribute">

                                                                <img src="./assets/images/icon/dientich.svg" alt="Diện tích">

                                                                <span class="wrapper-realestate__attribute-info">Diện tích:</span>

                                                                <span class="wrapper-realestate__attribute-detail"><?=$row_detail["dientich"]?> m²</span>

                                                            </span>

                                                        </div>

                                                        <div class="item10 col-6 w-100-m">

                                                            <span class="wrapper-realestate__attribute">

                                                                <img src="./assets/images/icon/vitri.svg" alt="Vị trí">

                                                                <span class="wrapper-realestate__attribute-info">Vị trí:</span>

                                                                <span class="wrapper-realestate__attribute-detail"><?=(!empty($row_detail["job_$lang"])) ? $row_detail["job_$lang"] : 'Đang cập nhật'?></span>

                                                            </span>

                                                        </div>

                                                    </div>

                                                </li>

                                                <?php if(!empty($row_detail["mota_$lang"])){ ?>

                                                <li style="border:0;">

                                                    <div class="row10 d-flex">

                                                        <div class="item10 col-12">

                                                            <div><?=htmlspecialchars_decode($row_detail["mota_$lang"])?></div>

                                                        </div>

                                                    </div>

                                                </li>

                                                <?php }?>
                                                
                                            </ul>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="box-desc-detail mt20">

                        <div class="row10">

                            <div class="item10 col-12">

                                <div class="page-product__content d-flex justify-content-between d-block-m mt15">

                                    <div class="page-product__content-left bg-white col-12">

                                        <div class="page-product__detail">

                                            <div class="product-detail pd0i">

                                                <div class="title-content font-weight-bold">
                                                    THÔNG TIN CHI TIẾT
                                                </div>

                                                <div class="box-detail-content p-relative">

                                                    <div class="wrapper-toc">

                                                        <div class="content ul-list-detail view-desc-detail">

                                                            <?=($row_detail["noidung_$lang"]!='') ? htmlspecialchars_decode($row_detail["noidung_$lang"]) : '<p class="t-center">Nội dung đang được cập nhật....</p>'?>
                                                            
                                                            <?php if($row_detail["noidung_$lang"]!=''){ ?>

                                                            <div class="mt10">
                                                                <?php include_once _source.'shareLinks.php'?>
                                                            </div>

                                                            <?php }?>

                                                        </div>

                                                    </div>
                                                 
                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <?php include _layouts.'left.php'; ?>
               
            </div>

        </form>

    </div>
    
</section>

<?php if(count($tintuc)>0){ ?>

<section class="wrapper-related-detail">

    <div class="container">

        <div class="row">

            <div class="col l-12 m-12 c-12">

                <div class="wrapper-related-detail__bg">

                    <div class="title-other mb20">

                        <div class="title title--titleproduct p-relative"><span>BẤT ĐỘNG SẢN KHÁC</span> <a href="bat-dong-san" title="Xem thêm" aria-label="Xem thêm" role="link" rel="dofollow">Xem Thêm <i class="fa-light fa-chevron-right"></i></a></div>

                    </div>

                    <div class="owl-carousel owl-theme owl-carousel-loop quick-slide slider-product__detail slider-flexbox" data-height="640" data-nav="0"

                        data-loop="1" data-play="1" data-lg-items="3" data-md-items="2" data-sm-items="1" data-xs-items="1" data-dot="1"

                        <?php if($deviceType=='computer'){ ?> data-margin='20' <?php }else{ ?>  data-margin='8' <?php }?> data-deplay="4000">


                        <?=$func->gridTemplateBDS($tintuc,'build','pt20 pb20 mb20 fadeInDown wow d-flex flex-column','div','222','222','build-servicewp__box--detail');?>          

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<?php }?>