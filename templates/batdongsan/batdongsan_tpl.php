<?php if($banner_tpl){ ?>

<section class="build-banner__allpage p-relative" style="background:url('<?=_upload_hinhanh_l.$banner_tpl["photo"]?>') no-repeat center center/cover;background-attachment: fixed;">

    <div class="build-title__tpl">

         <h1 class="mg0">

            <span>

                <?php if($seo->getSeo('h1') != ""){?>
                <?=$seo->getSeo('h1')?>
                <?php }else{ echo $title_seo;}?>

            </span>

        </h1>

    </div>

    <div class="build-banner__breadcumb">

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

<section class="mt40 mb40 mt-m-20">

    <div class="grid wide">
        
        <div class="row">

          <?php  /* <div class="col l-12 m-12 c-12">

                <div class="title-default t-center mb30 p-relative">

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

                <div class="box-description mt20 mb-m-20">

                    <span><?=htmlspecialchars_decode($seo->getSeo('subject'))?></span>

                </div>

            </div>

            <?php }?>

        </div>

        <div class="mt30 mt-m-20">

            <div class="row">

                <div class="col l-12 m-12 c-12">

                    <?php if(count($tintuc)>0){?>

                    <div class="row" id="wrap__product">  

                        <?php
                            
                        /**
                         * 
                         * Function gridTemplateProduct(data, classBem, Column(Chia cột), thẻ H, ratio Width, ratio H, class để chỉnh sửa tách css(mặc định null))
                         * 
                        */    
                            
                        ?>

                        <?=$func->gridTemplateBDS($tintuc,'build','col l-4 ml-6 m-12 c-12 mb30 mb-t-16 d-flex flex-column','h3','222','222');?>

                    </div>

                    <?php if($total_paging>0){ ?>

                    <div class="row">

                        <div class="col l-12 m-12 c-12 justify-content-center">

                            <div id="paging" class="t-center"><?=$func->getLoadMore($total_paging,$per_page,$page,'tin đăng')?></div>

                        </div>

                    </div>

                    <?php }?>

                    <?php }?>

                </div>

            </div>

            <?php if($seo->getSeo('content')!=''){ ?>

            <div class="row">

                <div class="wrapper-toc mt10">

                    <div class="content ul-list-detail">

                        <?=htmlspecialchars_decode($seo->getSeo('content'))?>

                    </div>

                </div>

            </div>

            <?php }?>

        </div>

    </div>

</section>