<?php

    require_once 'ajaxConfig.php';

    $imgDefault = './assets/images/loading-image.png';

    $id = $_POST["id"];

    $albumDetail = $db->rawQuery("select id,photo from #_baiviet_photo where type=? and id_baiviet=? order by stt asc, id desc",array('tham-khao',$_POST["id"]));

?>

<?php if(count($albumDetail)>0){ ?>

<span class="build-reference__album-btn build-reference__album-btn--prev d-none-m">

    <img width="46" height="46" src="./assets/images/icon/next.svg" alt="Prev Menu">

</span>

<span class="build-reference__album-btn build-reference__album-btn--next d-none-m">

    <img width="46" height="46" src="./assets/images/icon/next.svg" alt="Next Menu">

</span>

<div class="owl-carousel owl-theme owl-carousel-loop quick-slide slider-service slider-flexbox album-slider" data-height="640" data-nav="0"

data-loop="1" data-play="1" data-lg-items="5" data-md-items="4" data-sm-items="4" data-xs-items="2" data-dot="1"

<?php if($deviceType=='computer'){ ?> data-margin='20' <?php }else{ ?>  data-margin='8' <?php }?> data-deplay="<?=$time_slider?>">

    <?php foreach($albumDetail as $key => $value){ ?>

    <div class="pt10 pb10 mb20">

        <div class="build-reference__album-box">

            <a 
                href="<?=_upload_baiviet_l.$value["photo"]?>"
                title="Hình ảnh tham khảo"
                aria-label="Hình ảnh tham khảo"
                role="link"
                rel="nofollow"
                class="d-block ratio-cover hover-left ratio-img"
                img-width="433"
                img-height="331"
                data-fancybox="imagealbum">

                <img class="ratio-img__content img-scale" src="<?=$imgDefault?>" data-src="<?=_upload_baiviet_l.$value["photo"]?>" alt="Hình ảnh tham khảo">

            </a>

        </div>

    </div>

    <?php }?>

</div>

<?php }?>

<script>

    $(function(){

        $('[data-fancybox]').fancybox({

            backFocus : false,

        });

    });
    
</script>