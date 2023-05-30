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

<section class="mt40 mt-m-20">

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

                <div class="col l-12 m-12 c-12">

                    <?php if(count($tintuc)>0){?>

                    <div class="row">  

                        <?php foreach($tintuc as $key=>$value){ ?>

                        <div class="col l-6 m-6 c-12 mb30">

                            <div class="realestate-project__box">

                                <div class="realestate-project__box-img">

                                    <a 
                                        href="<?=$func->getAllCom($result_pag_data[0]["id_list"],$result_pag_data[0]["type"],$result_pag_data[0]["tenkhongdau"])?>"
                                        title="<?=$result_pag_data[0]["ten_$lang"]?>"
                                        img-width="409"
                                        img-height="308"
                                        aria-label="<?=$result_pag_data[0]["ten_$lang"]?>"
                                        class="d-block ratio-cover ratio-img hover-left p-relative">
                                        
                                        <img 
                                            width="409"
                                            height="308"
                                            class="ratio-img__content img-scale"
                                            src="resize1/409x308/1/<?=_upload_baiviet_l.$result_pag_data[0]["photo"]?>" 
                                            alt="<?=$result_pag_data[0]["ten_$lang"]?>">

                                        <div class="realestate-project__overplay">

                                            <h4 class="realestate-project__overplay-title line-2 mg0">

                                                <span><?=$result_pag_data[0]["ten_$lang"]?></span>

                                            </h4>

                                            <div class="realestate-project__overplay-address line-2 mt10">

                                                <span>
                                                    
                                                    <img src="./assets/images/icon/icon-address-project.svg" class="mr10" alt="">

                                                    <?=$result_pag_data[0]["diachicuthe_$lang"]?>

                                                </span>

                                            </div>

                                        </div>

                                    </a>

                                </div>

                            </div>

                        </div>

                        <?php }?>

                    </div>

                    <div class="row">

                        <div class="col l-12 m-12 c-12 justify-content-center mb20 mt20">

                            <div id="pagingPage"><?=$paging?></div>

                        </div>

                    </div>

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