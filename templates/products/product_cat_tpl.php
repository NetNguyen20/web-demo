<?php if($banner_tpl){ ?>

<section class="tea-banner__allpage p-relative" style="background:url('<?=_upload_hinhanh_l.$banner_tpl["photo"]?>') no-repeat center center/cover;background-attachment: fixed;">

    <div class="tea-title__tpl">

         <h1 class="mg0">

            <span>

                <?php if($seo->getSeo('h1') != ""){?>
                <?=$seo->getSeo('h1')?>
                <?php }else{ echo $title_seo;}?>

            </span>

        </h1>

    </div>

    <div class="tea-banner__breadcumb">

        <div class="grid wide">

            <div class="row">

                <div class="col l-12 m-12 c-12">

                    <div class="breadcumb">

                        <?=$str_breadcrumbs?>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<?php }?>

<section class="mt40 mb40 mb-m-20 mt-m-20">

    <div class="grid wide">
        
        <div class="row">

            <?php /* <div class="col l-12 m-12 c-12 mb-m-40 mt-m-30">

                <div class="title-default t-center mb40 p-relative">

                    <h1>

                        <span>

                            <?php if($seo->getSeo('h1') != ""){?>
                            <?=$seo->getSeo('h1')?>
                            <?php }else{ echo $title_seo;}?>

                        </span>

                    </h1>

                </div>

            </div> */ ?>

            <?php if($seo->getSeo('subject')!=''){ ?>

            <div class="col l-12 m-12 c-12">

                <div class="box-description mt20">

                    <span><?=htmlspecialchars_decode($seo->getSeo('subject'))?></span>

                </div>

            </div>

            <?php }?>

        </div>

        <div class="mt30 mt-m-20">

            <div class="row">

                <?php if(count($row_cat)>0){ ?>

                <div class="col l-12 m-12 c-12">

                    <div class="row justify-content-center">

                        <?php foreach($row_cat as $key => $value): ?>

                        <div class="col l-2-4 m-4 c-6 mb20 mb-t-16 mb-m-8 d-flex flex-column">
                            
                            <div class="tea-product__box tea-product__box--category d-flex flex-column flex-cl-1">

                                <div class="tea-product__box-img">

                                    <a href="<?=$value["type"]?>/<?=$value["tenkhongdau"]?>" title="<?=$value["ten"]?>" aria-label="<?=$value["ten"]?>" role="link" rel="dofollow" class="d-block hover-left ratio-cover ratio-img cubic-img" img-width="4" img-height="3" style="--data-ratio:calc((3 / 4) * 100%);">

                                        <img class="ratio-img__content" src="<?=$imgDefault?>" data-src="<?=_upload_baiviet_l.$value["photo"]?>" alt="<?=$value["ten"]?>">

                                    </a>

                                </div>

                                <div class="tea-product__box-detail d-flex flex-column flex-cl-1">

                                    <h2 class="tea-product__box-detail-title line-2 mg0 flex-cl-1 t-center">

                                        <a href="<?=$value["type"]?>/<?=$value["tenkhongdau"]?>" title="<?=$value["ten"]?>" aria-label="<?=$value["ten"]?>" role="link" rel="dofollow"><?=$value["ten"]?></a>

                                    </h2>

                                </div>

                            </div>

                        </div>

                        <?php endforeach ?>

                    </div>

                </div>

                <?php }?>

                <div class="col l-12 m-12 c-12 mt20">

                    <?php if(count($tintuc)>0){?>

                    <div class="wrapper-form-right__title wrapper-form-right__title--product">

                        <span>DANH SÁCH SẢN PHẨM</span>

                    </div>

                    <div class="row" id="wrap__product">  

                        <?php
                            
                        /**
                         * 
                         * Function gridTemplateProduct(data, classBem, Column(Chia cột), thẻ H, ratio Width, ratio H, class để chỉnh sửa tách css(mặc định null))
                         * 
                        */    
                            
                        ?>

                        <?=$func->gridTemplateProduct($tintuc,'tea','col l-2-4 m-4 c-6 mb20 mb-t-16 mb-m-8','h3',227,227)?>

                    </div>

                    <?php if($total_paging>0){ ?>

                    <div class="row">

                        <div class="col l-12 m-12 c-12 justify-content-center">

                            <div id="paging" class="t-center"><?=$func->getLoadMore($total_paging,$per_page,$page,'sản phẩm')?></div>

                        </div>

                    </div>

                    <?php }?>

                    <?php }?>

                </div>

            </div>

            <?php if($seo->getSeo('content')!=''){ ?>

            <div class="row">

                <div class="col l-12 m-12 c-12">

                   <div class="wrapper-toc mt10">

                        <div class="content ul-list-detail">

                            <?=htmlspecialchars_decode($seo->getSeo('content'))?>

                        </div>

                    </div>

                </div>
            </div>

            <?php }?>

        </div>

    </div>

</section>