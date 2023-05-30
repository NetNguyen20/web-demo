<?php if($banner_tpl){ ?>

<section class="facemask-banner__allpage p-relative" style="background:url('<?=_upload_hinhanh_l.$banner_tpl["photo"]?>') no-repeat center center/cover;background-attachment: fixed;">

    <div class="facemask-title__tpl">

         <h1 class="mg0">

            <span>

                <?php if($seo->getSeo('h1') != ""){?>
                <?=$seo->getSeo('h1')?>
                <?php }else{ echo $title_seo;}?>

            </span>

        </h1>

    </div>

    <div class="facemask-banner__breadcumb">

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

<section class="section-news mt80 mb20 mt-m-20 mb-m-10 mb-m-10 mb-t-10">

    <div class="grid wide">

        <?php /* <div class="row">

            <div class="col l-12 m-12 c-12 mb30 mb-m-30">

                <div class="title-default t-center mb20 mb-m-10 mb-t-10 p-relative">

                    <h1>

                        <span>  
                            <?php if($seo->getSeo('h1') != ""){?>
                            <?=$seo->getSeo('h1')?>
                            <?php }else{ echo $title_seo;}?>
                        </span>

                    </h1>

                </div>

            </div>
            
        </div>  */ ?>

        <?php if($seo->getSeo('subject')!=''){ ?>

        <div class="row">

            <div class="col l-12 m-12 c-12">

                <?php if($seo->getSeo('subject')!=''){ ?>

                <div class="box-description mt10">

                    <span><?=htmlspecialchars_decode($seo->getSeo('subject'))?></span>

                </div>
                
                <?php }?>

            </div>

        </div>

        <?php }?>

        <div class="row mt30 mt-m-20">

            <div class="col l-12 m-12 c-12 w-100-m w-100-t">

                <div class="row">

                <?php if(count($tintuc)>0){?>

                    <?php foreach($tintuc as $key => $value){

                        $photos = $db->rawQuery("select id,photo from #_baiviet_photo where type=? and id_baiviet=? order by stt asc, id desc",array($value["type"],$value["id"]));
   
                        ?>

                        <div class="col l-3 m-4 c-6 mb20 mb-t-16 mb-m-8 d-flex flex-column">

                            <div class="facemask-line__box d-flex flex-column flex-cl-1">

                                <div class="facemask-line__box-img">

                                    <a 
                                        href="<?=_upload_baiviet_l.$value["photo"]?>"
                                        data-fancybox="facemask-line-img<?=$key?>"
                                        title="<?=$value["ten"]?>"
                                        role="button"
                                        class="d-block ratio-cover hover-left ratio-img cubic-img"
                                        aria-label="<?=$value["ten"]?>"
                                        img-width="270"
                                        img-height="270">

                                        <img
                                            class="ratio-img__content img-scale"
                                            width="270" 
                                            height="270"
                                            data-src="<?=_upload_baiviet_l.$value["photo"]?>" 
                                            src="<?=$imgDefault?>" 
                                            alt="<?=$value["ten"]?>">

                                    </a>

                                    <?php if(count($photos)>0){ ?>

                                    <div class="hidden">

                                    <?php foreach($photos as $keypt => $vpt){ ?>

                                        <a href="<?=_upload_baiviet_l.$vpt["photo"]?>" data-fancybox="facemask-line-img<?=$key?>">

                                            <img src="<?=_upload_baiviet_l.$vpt["photo"]?>" alt="<?=$value["ten"]?>">

                                        </a>

                                    <?php }?>

                                    </div>

                                    <?php }?>

                                </div>

                                <div class="facemask-line__box-detail d-flex flex-column flex-cl-1">

                                    <h3 class="facemask-line__box-detail-title line-2 mg0 flex-cl-1">

                                        <a href="javascript:void(0)"
                                        title="<?=$value["ten_$lang"]?>"
                                        aria-label="<?=$value["ten_$lang"]?>"
                                        role="button"><?=$value["ten_$lang"]?></a>

                                    </h3>

                                </div>

                            </div>    

                        </div>

                    <?php }?>

                <?php }?>

                </div>

            </div>

            <?php if(!$func->isAjax()){?>

            <div class="col l-12 m-12 c-12 mb20">

                <div id="pagingPage"><?=$paging?></div>

            </div>

            <?php }?>
            
        </div>

        <?php if($seo->getSeo('content')!=''){ ?>

            <div class="row">

                <div class="col l-12 m-12 c-12">

                    <div class="wrapper-toc mt10 mb20">

                        <div class="content ul-list-detail">

                            <?=htmlspecialchars_decode($seo->getSeo('content'))?>

                        </div>

                    </div>

                </div>
                
            </div>

        <?php }?>
      
    </div>

</section>