<?php
        
    $colors = $db->rawQuery("select id,ten_$lang as ten,giaban,photo from #_attribute where hienthi=1 and id_product=? and type=? order by stt asc,id desc",array($row_detail['id'],'color'));

    $_folderResizeDetail = "";

    if($row_setting["watermark_status"]==1){

        $_folderResizeDetail = "resize1/500x500/2/";

    }else{

        $_folderResizeDetail = "thumbs/500x500x2/";

    }

?>

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

                                <div class="img-top p-relative">

                                    <a href="<?=$_folderResizeDetail?><?=_upload_baiviet_l.$row_detail['photo']?>" class="MagicZoom" id="Zoom-1" data-options="variableZoom: true;expand: on; hint: always; " >

                                        <img class="col-12" src="<?=$_folderResizeDetail?><?=_upload_baiviet_l.$row_detail['photo']?>" alt="<?=$row_detail['ten_'.$lang]?>"/>

                                    </a>

                                    <span class='tea-product-box__sale'><?=$func->percentPrice($row_detail['giacu'],$row_detail['giaban'])?></span>

                                </div>

                                <?php if(count($photos)>0){ ?>

                                <div class="img-bottom">

                                    <div class="product-detail-slider owl-carousel owl-theme owl-carousel-loop in-home" data-height="575" data-dot="1" data-nav='0'

                                    data-loop='0' data-play='1' data-lg-items='4' data-md-items='5' data-sm-items='5' data-xs-items="4"

                                    data-margin='10'>

                                        <div class="items mb20"><div class="img"><a data-zoom-id="Zoom-1" href="<?=_upload_baiviet_l.$row_detail['photo']?>" data-image="<?=$_folderResizeDetail?><?=_upload_baiviet_l.$row_detail['photo']?>"><img <?= $func->errorImg() ?> src="<?=_upload_baiviet_l.$row_detail['photo']?>" alt="<?=$row_detail['ten_'.$lang]?>"></a></div></div>

                                        <?php 
                                            foreach($photos as $k=>$v){  
                                        ?>

                                        <div class="items mb20"><div class="img"><a data-zoom-id="Zoom-1" href="<?=_upload_baiviet_l.$v['photo']?>" data-image="<?=$_folderResizeDetail?><?=_upload_baiviet_l.$v['photo']?>"><img src="<?=$_folderResizeDetail?><?=_upload_baiviet_l.$v['photo']?>" alt="<?=$row_detail['ten_'.$lang]?>"></a></div></div>

                                        <?php } ?>

                                    </div>

                                </div>

                                <?php } ?>

                                <?php if(!empty($row_detail["mota_km_$lang"])){ ?>

                                <div class="wrapper-product-detail__promotion">

                                    <div class="wrapper-product-detail__promotion-box"><?=htmlspecialchars_decode($row_detail["mota_km_$lang"])?></div>
                                    
                                </div>

                                <?php }?>

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

                                                            <span class="product-detail-status <?=($row_detail['id_loai']==1) ? 'detail-status--success' : 'detail-status--outofstock'?> "><?=($row_detail['id_loai']==1) ? '<i class="fa-regular fa-check"></i>' : '<i class="fa-light fa-ban"></i>'?> <?=($row_detail['id_loai']==1) ? 'Còn Hàng' : 'Hết Hàng'?></span>

                                                            <span class="product-detail-view"><i class="fa-regular fa-eye mr5"></i> <?=$row_detail['luotxem']?> Lượt Xem</span>
                                                        
                                                        </div>

                                                    </div>

                                                </li>

                                                <?php if(!empty($row_detail["mota_$lang"])){ ?>

                                                <li>

                                                    <div class="row10 d-flex">

                                                        <div class="item10 col-12">

                                                            <div><?=htmlspecialchars_decode($row_detail["mota_$lang"])?></div>

                                                        </div>

                                                    </div>

                                                </li>

                                                <?php }?>

                                                <li class="wrapper-productitem__price">

                                                    <div class="row10 d-flex flex-wrap">

                                                        <div class="item10 col-12 w-100-m">

                                                            <span class="product-detail-label-left">Giá bán:</span>
                                                            
                                                            <span
                                                                    class="price-new-product" id="view-price-detail"><?=($row_detail['giaban']!=0) ? $func->changeMoney($row_detail['giaban'],$lang) : 'Liên hệ'?>  
                                                            <?php if($row_detail['giacu']!=0){ ?>   <span class="price-old-product ml5"> <?=$func->changeMoney($row_detail['giacu'],$lang)?></span> <?php }?>
                                                        
                                                            </span>

                                                        </div>

                                                    </div>

                                                </li>

                                                <?php if(count($colors)>0): ?>

											    <li class="attribute d-flex" style="padding:0;border:0;">

                                                <div class="attribute-left">

                                                    <span class="label__productdetails">Chọn màu sắc:</span>

                                                </div>

												<ul class="color">
													<?php foreach($colors as $key => $value){?>
													<li>
														<a data-zoom-id="Zoom-1" href="<?=_upload_baiviet_l.$value['photo']?>" data-image="thumbs/420x420x1/<?=_upload_baiviet_l.$value['photo']?>" class="js-color p-relative"
															data-target="#color" data-value="<?= $value['id']?>">
															<span><?=$value["ten"]?></span>

                                                            <div class="product-attribute__tick">
                                                                <svg enable-background="new 0 0 12 12" viewBox="0 0 12 12" x="0" y="0" class="paint-tick-svg icon-attribute-tick-bold"><g><path d="m5.2 10.9c-.2 0-.5-.1-.7-.2l-4.2-3.7c-.4-.4-.5-1-.1-1.4s1-.5 1.4-.1l3.4 3 5.1-7c .3-.4 1-.5 1.4-.2s.5 1 .2 1.4l-5.7 7.9c-.2.2-.4.4-.7.4 0-.1 0-.1-.1-.1z"></path></g>
                                                                </svg>
                                                            </div>

														</a>
													</li>
													<?php }?>
												</ul>
												<?php /* if($colors){?>
													<input type="hidden" name="color" value="0" id="color" />
												<?php } */ ?>
											</li>
											<?php endif ?>

                                                <?php if($config['cart-advance']){?>
                                                <li style="border:0">
                                                    <div class="bg-cart-fix d-flex justify-content-center align-items-center mt10 mb10 center">
                                                        <div class="d-flex justify-content-center align-items-center wrapper-qtycart">
                                                            <div class="mr5 label-qty-productdetail">Số lượng: </div>
                                                            <div class="mr10">
                                                                <span>
                                                                    <div class="wrap_qty">
                                                                        <span class="down" onclick="var result=document.getElementById('qty'); var qty=result.value; if(!isNaN(qty) && qty>1){result.value--}else{return false;}">-</span>
                                                                        <input type="text" class="input-text qty" name="quality" id="qty" value="1"
                                                                            title="Số lượng" maxlength="6" min="1">
                                                                        <span class="up" onclick="var result=document.getElementById('qty'); var qty=result.value; if(!isNaN(qty)){result.value++}else{return false;}">+</span>
                                                                    </div>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <button type="button" data-el="#product-detail-<?=$row_detail['id']?>" class="btn-cart-css btn-addcart cs-pointer w-100i mt10i" data-qty="1" data-id="<?=$row_detail["id"]?>">Thêm vào giỏ</button>
                                                        <button type="button" data-el="#product-detail-<?=$row_detail['id']?>" class="btn-cart-css btn-buynow cs-pointer w-100i mt10i">Mua ngay</button>
                                                    
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

                        <div class="title title--titleproduct p-relative"><span>SẢN PHẨM LIÊN QUAN</span> <a href="san-pham" title="Xem thêm" aria-label="Xem thêm" role="link" rel="dofollow">Xem Thêm <i class="fa-light fa-chevron-right"></i></a></div>

                    </div>

                    <div class="owl-carousel owl-theme owl-carousel-loop quick-slide slider-product__detail slider-flexbox" data-height="640" data-nav="0"

                        data-loop="1" data-play="1" data-lg-items="4" data-md-items="3" data-sm-items="3" data-xs-items="2" data-dot="0"

                        <?php if($deviceType=='computer'){ ?> data-margin='20' <?php }else{ ?>  data-margin='8' <?php }?> data-deplay="4000">

                        <?=$func->gridTemplateProduct($tintuc,'tea','pt10 pb10 mb20 d-flex flex-column flex-cl-1','div',227,227)?>          

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<?php }?>