
<?php
    $bg_dangky = $func->OneDataPhoto("mota_$lang as mota,ten_$lang as ten,",'bg-dangky','limit 0,1',"array");

    $partners=$db->rawQuery("select ten_$lang as ten,photo_$lang photo,link from #_photo where hienthi=1 and type=? order by stt asc,id desc",array('doi-tac'));
?>




<section class="tea-news <?php if ($deviceType == "computer") { ?> wow fadeInRight <?php } ?>" data-wow-offset="50" data-wow-duration="3" data-wow-delay="0.2s" <?php if ($bg_dangky) { ?> style="background:url('<?= _upload_hinhanh_l . $bg_dangky["photo"] ?>') no-repeat center center/cover;" <?php } ?>>

    <div class="grid wide">

        <div class="row">

            <div class="col l-12 m-12 c-12">

                <div class="tea-title__all">
                    <span><img  src="./assets/images/clinic/may_clinic.png" alt=""></span>
                    <hr style="font:10px; color:#AFAFAF; width:227px">

                    <a href="tin-tuc" title="<?= $bg_dangky["ten"] ?>" aria-label="<?= $bg_dangky["ten"] ?>" role="link" rel="dofollow">

                        <span style="color:#fff" class="wow zoomIn" data-wow-offset="50" data-wow-duration="3" data-wow-delay="0.2s"><?= $bg_dangky["ten"] ?></span>

                    </a>

                </div>

                <?php if (!empty($bg_dangky["mota"])) { ?>

                    <div class="tea-des__all">

                        <div class="content"><?= htmlspecialchars_decode($bg_dangky["mota"]) ?></div>

                    </div>

                <?php } ?>

            </div>

        </div>

        <div class="row mt50 mt-m-30">

            <div class="col l-12 m-12 c-12">

                <div class="owl-carousel owl-theme owl-carousel-loop quick-slide" data-height="640" data-nav="0" data-loop="1" data-play="1" data-lg-items="3" data-md-items="2" data-sm-items="2" data-xs-items="1" data-dot="1" data-margin='30' data-deplay="<?= $row_setting["time_slider"] ?>">

                    <?= $func->gridTemplateDanhgia($news_index, 'section', 'pt10 pb10 mb20', 'h4', '125', '150') ?>

                </div>

            </div>

        </div>

    </div>

</section>





<section class="res--partner--page pt30 pb30 bg-white">

    <div class="grid wide">

        <div class="row">

            <div class="col l-12 m-12 c-12">

                <div class="owl-carousel owl-theme owl-carousel-loop quick-slide" data-height="640" data-nav="0"
                    data-loop="1" data-play="1" data-lg-items="6" data-md-items="6" data-sm-items="4" data-xs-items="2"
                    data-dot="1" data-margin='30' data-deplay="<?=$row_setting["time_slider"]?>">

                    <?php foreach($partners as $k => $v){?>
                        <div class="res--item--partner">
                            <a href="<?=$v["link"]?>" target="_blank" title="<?=$v["ten"]?>">
                                <img width="185" height="90" src="<?=_upload_hinhanh_l.$v["photo"]?>" alt="<?=$v["ten"]?>" />
                            </a>
                        </div>
                    <?php } ?>

                </div>

            </div>

        </div>

    </div>

</section>

<section class="tea-news <?php if($deviceType=="computer"){ ?> wow fadeInLeft <?php }?>" data-wow-offset="50"
    data-wow-duration="3" data-wow-delay="0.2s" <?php if($bg_dangky && !empty($bg_dangky["photo"])){ ?>
    style="background:url('<?=_upload_hinhanh_l.$bg_dangky["photo"]?>') no-repeat center center/cover;" <?php }?>>

    <div class="grid wide">

        <div class="row align-items-center">

            <div class="col l-6 m-6 c-12">

                <div class="tea-regis__aside-left">

                    <?php if(!empty($bg_dangky["ten"])){ ?>

                    <div class="tea-regis__title">

                        <span class="wow zoomIn" data-wow-offset="50" data-wow-duration="3"
                            data-wow-delay="0.2s"><?=$bg_dangky["ten"]?></span>

                    </div>

                    <?php }?>

                    <?php if(!empty($bg_dangky["mota"])){ ?>

                    <div class="tea-regis__des"><?= htmlspecialchars_decode($bg_dangky["mota"])?></div>

                    <?php }?>

                </div>

            </div>

            <div class="col l-6 m-6 c-12">

                <div class="tea-regis__aside-right">

                    <div class="tea-regis__form">

                        <input type="text" name="email-promotion" placeholder="Nhập email của bạn...">

                        <button id="submit-promotion">ĐĂNG KÝ</button>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<script>
$(function() {

    $('[data-fancybox]').fancybox({

        backFocus: false,

    });

});
</script>