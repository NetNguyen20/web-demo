<?php 

    $title_regis = $func->OneDataDes('title-regis','array');

    $bg_regis = $func->OneDataPhoto(null,'bg-dangky','limit 0,1',"array");

    $giaychungnhan = $func->AllData('id,','giay-chung-nhan',' and noibat=1','','array');

    $partNers = $func->AllDataPhoto("ten_$lang as ten,link,",'doi-tac','','array');

    $productRegis = $func->AllDataList('id,','san-pham','','','array');

?>

<?php if(count($tintuc)>0 && $com!='tin-tuc' && $com!='tac-gia'){ 
    
        $authoFirst = $func->getNameAuthor($tintuc[0]["id_tacgia"]);

        $descriptionFirst = $seo->getSeoDB($tintuc[0]['id'],'baiviet','man',$tintuc[0]["type"]);
    
    ?>

<section class="wrapper-news">

    <div class="grid wide">

        <div class="row">

            <div class="col l-12 m-12 c-12">

                <div class="facemask-title__all">

                    <a 
                        href="tin-tuc"
                        title="TIN TỨC & SỰ KIỆN"
                        aria-label="TIN TỨC & SỰ KIỆN"
                        role="link"
                        rel="dofollow">

                        <span>TIN TỨC & SỰ KIỆN</span>

                    </a>

                </div>

            </div>
            
        </div>

        <div class="row mt50">

            <div class="col l-6 m-6 c-12 mb-m-16 mb-m-20">

                <div class="wrapper-news__box">

                    <div class="wrapper-news__box-img">

                        <a 
                            href="<?=$func->slugUrl($tintuc[0])?>"
                            title="<?=$tintuc[0]["ten"]?>"
                            role="link"
                            aria-label="<?=$tintuc[0]["ten"]?>"
                            rel="dofollow"
                            img-width="321"
                            img-height="233"
                            class="d-block hover-left ratio-cover ratio-img">

                            <img 
                                width="321"
                                height="233"
                                class="ratio-img__content img-scale"
                                data-src="<?=_upload_baiviet_l.$tintuc[0]["photo"]?>"
                                src="<?=$imgDefault?>" alt="<?=$tintuc[0]["ten"]?>">

                            <div class="wrapper-news__box-overlay">

                            <?php if(in_array($template,$config["config-template"])){ ?>

                                <div class="wrapper-news__bo-overlay-title line-2 mg0">

                                <?php }else{ ?>

                                <h3 class="wrapper-news__bo-overlay-title line-2 mg0">

                                <?php }?>

                                    <span><?=$tintuc[0]["ten"]?></span>

                                <?php if(in_array($template,$config["config-template"])){ ?>

                                </div>

                                <?php }else{ ?>

                                </h3>

                                <?php }?>

                                

                                <div class="wrapper-news__bo-overlay-info">

                                    <span class="mr10"><i class="fa-solid fa-user mr5"></i> <?=$authoFirst?></span>

                                    <span><i class="fa-light fa-clock mr5"></i><?=($tintuc[0]["ngaysua"]!=0) ? date('H:i A d/m/Y',$tintuc[0]["ngaysua"]) : date('H:i A d/m/Y',$tintuc[0]["ngaytao"])?> </span>

                                </div>

                                <div class="wrapper-news__bo-overlay-description line-3">

                                    <p><?=$descriptionFirst["description_$lang"]?></p>

                                </div>

                            </div>

                        </a>

                    </div>

                </div>

            </div>

            <div class="col l-6 m-6 c-12">

                <div class="wrapper-news-scroll scroll-format__allpage">

                    <div class="row">

                        <?php foreach($tintuc as $key => $value){
                            
                            if($key!=0){

                                $nameAuthor = $func->getNameAuthor($value["id_tacgia"]);

                            ?>

                        <div class="col l-6 m-6 c-6 mb20 mb-m-8 wrapper-news-nth">

                            <div class="wrapper-news__box">

                                <div class="wrapper-news__box-img">

                                    <a 
                                        href="<?=$func->slugUrl($value)?>"
                                        title="<?=$value["ten"]?>"
                                        role="link"
                                        aria-label="<?=$value["ten"]?>"
                                        rel="dofollow"
                                        img-width="321"
                                        img-height="233"
                                        class="d-block hover-left ratio-cover ratio-img">

                                        <img 
                                            width="321"
                                            height="233"
                                            class="ratio-img__content img-scale"
                                            data-src="<?=_upload_baiviet_l.$value["photo"]?>"
                                            src="<?=$imgDefault?>" 
                                            alt="<?=$value["ten"]?>">

                                        <div class="wrapper-news__box-overlay wrapper-news__box-overlay--small">

                                        <?php if(in_array($template,$config["config-template"])){ ?>

                                            <div class="wrapper-news__bo-overlay-title line-2 mg0">

                                            <?php }else{ ?>

                                            <h3 class="wrapper-news__bo-overlay-title line-2 mg0">

                                            <?php }?>

                                            

                                                <span><?=$value["ten"]?></span>

                                            <?php if(in_array($template,$config["config-template"])){ ?>

                                            </div>

                                            <?php }else{ ?>

                                            </h3>

                                            <?php }?>

                                            <div class="wrapper-news__bo-overlay-info">

                                                <span class="mr10"><i class="fa-solid fa-user mr5"></i> <?=$nameAuthor?></span>

                                                <span><i class="fa-light fa-clock mr5"></i><?=($value["ngaysua"]!=0) ? date('H:i A d/m/Y',$value["ngaysua"]) : date('H:i A d/m/Y',$value["ngaytao"])?> </span>

                                            </div>

                                        </div>

                                    </a>

                                </div>

                            </div>

                        </div>

                        <?php }}?>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<?php }?>

<?php if(count($partNers)>0){ ?>

<section class="packaging-partner <?php if($deviceType=="computer"){ ?> wow fadeInLeft <?php }?>" data-wow-offset="50" data-wow-duration="3" data-wow-delay="0.2s" <?php if($bg_doitac){ ?> style="background:url('<?=_upload_hinhanh_l.$bg_doitac["photo"]?>') no-repeat center center/cover;" <?php }?>>

    <div class="grid wide">

        <div class="row">

            <div class="col l-12 m-12 c-12">

                <div class="owl-carousel owl-theme owl-carousel-loop quick-slide" data-height="640" data-nav="0"

                data-loop="1" data-play="1" data-lg-items="6" data-md-items="3" data-sm-items="3" data-xs-items="2" data-dot="1"

                <?php if($deviceType=='computer'){ ?> data-margin='30' <?php }else{ ?>  data-margin='8' <?php }?> data-deplay="<?=$row_setting["time_slider"]?>">
                    
                    <?php foreach($partNers as $key => $value){ ?>

                    <div class="pt10 pb10">
                        
                        <div class="packaging-partner__box mb20">

                            <a href="<?=($value["link"]!='') ? $value["link"]:''?>"

                            title="<?=$value["ten"]?>"

                            aria-label="<?=$value["ten"]?>"

                            role="link"

                            rel="nofollow"

                            <?=($value["link"]!='') ? 'target="_blank"':''?>
                            
                            class="d-block hover-left">

                                <img src="<?=_upload_hinhanh_l.$value["photo"]?>" alt="<?=$value["ten"]?>">

                            </a>

                        </div>

                    </div>

                    <?php }?>

                </div>

            </div>

        </div>

    </div>

</section>

<?php }?>

<script>

    $(function(){

        $('[data-fancybox]').fancybox({

            backFocus : false,

        });

    });

</script>