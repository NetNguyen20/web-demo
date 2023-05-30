<?php

$desProduct = $func->OneDataDes('des-product', 'array');

$about = $db->rawQueryOne("select mota_$lang as mota,photo from #_info where type=? limit 0,1", array('gioi-thieu'));

$news_index = $func->AllData('id,id_list,ngaytao,ngaysua,luotxem,id_tacgia,', 'tin-tuc', ' and noibat=1', '', 'array');

$whys = $func->AllData("id,ten_$lang as ten,mota_$lang as mota,rank,", 'vi-sao', '', 'limit 0,4', 'array');

$bg_why = $func->OneDataPhoto("mota_$lang as mota,ten_$lang as ten,", 'bg-why', 'limit 0,1', "array");

$bg_tintuc = $func->OneDataPhoto("mota_$lang as mota,ten_$lang as ten,", 'bg-news', 'limit 0,1', "array");
$bg_sanpham = $func->OneDataPhoto("mota_$lang as mota,ten_$lang as ten,", 'bg-pros', 'limit 0,1', "array");

$bg_image = $func->OneDataPhoto("mota_$lang as mota,ten_$lang as ten,", 'bg-image', 'limit 0,1', "array");

$hinh_anh = $func->AllData('id,id_list,ngaytao,ngaysua,luotxem,id_tacgia,', 'hinh-anh', ' and noibat=1', '','limit 0,3', 'array');

$_product_nb = $func->AllData("id,ten_$lang,photo,rating,", 'san-pham', ' and noibat=1', '', 'array');

$adv_banner = $db->rawQuery("select ten_$lang as ten,photo_$lang photo,link from #_photo where hienthi=1 and type=? order by stt asc,id desc", array('quang-cao'));

?>

<section class="res--about--us">
    <div class="grid wide">
        <div class="row d-flex justify-content-between flex-wrap">
            <div class="col l-5 m-5 c-12">
                <div class="res---desc--about">
                    <?= htmlspecialchars_decode($about["mota"]) ?>
                </div>
                <div class="res--link--about mt10">
                    <div class="res--link--target">
                        <a href="gioi-thieu" title="Giới thiệu">
                            XEM CHI TIẾT &nbsp;
                            <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19.0176 6.99411C18.8145 6.9902 18.6289 7.1113 18.5469 7.29684C18.4668 7.48434 18.5078 7.70114 18.6504 7.84567L22.6387 12L4.84766 12.1562C4.66797 12.1543 4.5 12.248 4.41016 12.4043C4.31836 12.5605 4.31836 12.7519 4.41016 12.9082C4.5 13.0644 4.66797 13.1582 4.84766 13.1562L22.6387 13L18.6504 17.1543C18.459 17.3535 18.4668 17.6699 18.666 17.8613C18.8652 18.0527 19.1816 18.0468 19.373 17.8457L24.5059 12.5L19.373 7.15427C19.2812 7.05466 19.1523 6.99802 19.0176 6.99411Z" fill="white" />
                            </svg>

                        </a>

                    </div>
                    <div class="res-tea-demo">
                        <img style="height:100px; " src="./assets/images/clinic/Mayclinic.png" alt="">

                        <img style="margin-top: -150px; margin-left: 280px" src="./assets/images/clinic/tea.png" alt="">

                    </div>



                </div>
            </div>
            <div class="col l-6 m-6 c-12 d-none-m d-none-tablet d-none-tl">
                <div class="res--thumb--about">
                    <a href="gioi-thieu" title="Giới thiệu">
                        <img style="width: 380px ; height: 460px; " src="<?= _upload_hinhanh_l . $about["photo"] ?>" alt="Giới thiệu" />
                        <img style="width: 330px; height: 400px; margin-left: 400px; margin-top: -535px" src="./assets/images/clinic/v1_430.png" alt="">

                    </a>

                </div>


            </div>

        </div>
    </div>
</section>





<section class="tea-news <?php if ($deviceType == "computer") { ?> wow fadeInRight <?php } ?>" data-wow-offset="50" data-wow-duration="3" data-wow-delay="0.2s" <?php if ($bg_tintuc) { ?> style="background:url('<?= _upload_hinhanh_l . $bg_tintuc["photo"] ?>') no-repeat center center/cover;" <?php } ?>>

    <div class="grid wide">

        <div class="row">

            <div class="col l-12 m-12 c-12">

                <div class="tea-title__all">

                    <a href="tin-tuc" title="<?= $bg_tintuc["ten"] ?>" aria-label="<?= $bg_tintuc["ten"] ?>" role="link" rel="dofollow">

                        <span style="color:#fff" class="wow zoomIn" data-wow-offset="50" data-wow-duration="3" data-wow-delay="0.2s"><?= $bg_tintuc["ten"] ?></span>

                    </a>

                </div>

                <?php if (!empty($bg_tintuc["mota"])) { ?>

                    <div class="tea-des__all">

                        <div class="content"><?= htmlspecialchars_decode($bg_tintuc["mota"]) ?></div>

                    </div>

                <?php } ?>

            </div>

        </div>

        <div class="row mt50 mt-m-30">

            <div class="col l-12 m-12 c-12">

                <div class="owl-carousel owl-theme owl-carousel-loop quick-slide" data-height="640" data-nav="0" data-loop="1" data-play="1" data-lg-items="3" data-md-items="2" data-sm-items="2" data-xs-items="1" data-dot="1" data-margin='30' data-deplay="<?= $row_setting["time_slider"] ?>">

                    <?= $func->gridTemplateNews($news_index, 'section', 'pt10 pb10 mb20', 'h4', '125', '150') ?>

                </div>

            </div>

        </div>

    </div>

</section>






<section class="service-of-may">
    <div>
        <a href="dich-vu"><img style="padding-bottom: 10px;margin-top: 50px; margin-left:70px" src="./assets/images/clinic/Service of May Clinic.png" alt=""></a>
        <hr>
        <h2>DỊCH VỤ CỦA CHÚNG TÔI</h2>
    </div>
    <div>
        <p>Trong thời gian gần đây, các bạn trẻ và cả những cô chú trung niên ngày càng quan tâm nhiều hơn đến vấn đề chăm sóc mái tóc.</p>

    </div>
    <div class="service-btn">
        <div class="service-btn_content">
            <a href="dich-vu" title="DỊCH VỤ">
                XEM THÊM DỊCH VỤ 
                <svg width="55" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M19.0176 6.99411C18.8145 6.9902 18.6289 7.1113 18.5469 7.29684C18.4668 7.48434 18.5078 7.70114 18.6504 7.84567L22.6387 12L4.84766 12.1562C4.66797 12.1543 4.5 12.248 4.41016 12.4043C4.31836 12.5605 4.31836 12.7519 4.41016 12.9082C4.5 13.0644 4.66797 13.1582 4.84766 13.1562L22.6387 13L18.6504 17.1543C18.459 17.3535 18.4668 17.6699 18.666 17.8613C18.8652 18.0527 19.1816 18.0468 19.373 17.8457L24.5059 12.5L19.373 7.15427C19.2812 7.05466 19.1523 6.99802 19.0176 6.99411Z" fill="white" />
                </svg>

            </a>

        </div>
    </div>
</section>




<section class="owl-carousel owl-theme owl-carousel-loop quick-slide" data-height="640" data-nav="0" data-loop="1" data-play="2" data-lg-items="1" data-md-items="1" data-sm-items="1" data-xs-items="1" data-dot="1" data-margin='30' data-deplay="<?= $row_setting["time_slider"] ?>">
    <div class="service-of-may-clinic">
        <div class="goi-dau">
            <img id="image-goi-dau" src="./assets/images/clinic/v47_2.png" alt="">
            <div class="goi-dau-content">
                <img src="./assets/images/clinic/goidau.png" alt="">
                <h3 id="goi-dau">Gội Đầu Dưỡng Sinh</h3>
                <p>Trong thời gian gần đây, các bạn trẻ và cả những cô chú trung niên ngày càng quan tâm nhiều hơn đến vấn đề chăm sóc mái tóc.</p>
                <div class="service-btn-clinic">
                    <div class="service-btn_content-clinic">
                        <a href="dich-vu" title="DỊCH VỤ">
                            TÌM HIỂU THÊM
                            <svg width="55" height="25" viewBox="0 0 25 25" fill="none" color="black" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19.0176 6.99411C18.8145 6.9902 18.6289 7.1113 18.5469 7.29684C18.4668 7.48434 18.5078 7.70114 18.6504 7.84567L22.6387 12L4.84766 12.1562C4.66797 12.1543 4.5 12.248 4.41016 12.4043C4.31836 12.5605 4.31836 12.7519 4.41016 12.9082C4.5 13.0644 4.66797 13.1582 4.84766 13.1562L22.6387 13L18.6504 17.1543C18.459 17.3535 18.4668 17.6699 18.666 17.8613C18.8652 18.0527 19.1816 18.0468 19.373 17.8457L24.5059 12.5L19.373 7.15427C19.2812 7.05466 19.1523 6.99802 19.0176 6.99411Z" fill="white" />
                            </svg>

                        </a>

                    </div>
                </div>
            </div>

        </div>

        <div class="cham-soc">
            <img id="image-cham-soc" src="./assets/images/clinic/v47_4.png" alt="">
            <div class="cham-soc-content">
                <img src="./assets/images/clinic/chamsoc.png" alt="">
                <h3 id="cham-soc">Chăm Sóc Da Mặt</h3>
                <p>Trong thời gian gần đây, các bạn trẻ và cả những cô chú trung niên ngày càng quan tâm nhiều hơn đến vấn đề chăm sóc mái tóc.</p>
                <div class="service-btn-clinic">
                    <div class="service-btn_content-clinic">
                        <a href="dich-vu" title="DỊCH VỤ">
                            TÌM HIỂU THÊM
                            <svg width="55" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19.0176 6.99411C18.8145 6.9902 18.6289 7.1113 18.5469 7.29684C18.4668 7.48434 18.5078 7.70114 18.6504 7.84567L22.6387 12L4.84766 12.1562C4.66797 12.1543 4.5 12.248 4.41016 12.4043C4.31836 12.5605 4.31836 12.7519 4.41016 12.9082C4.5 13.0644 4.66797 13.1582 4.84766 13.1562L22.6387 13L18.6504 17.1543C18.459 17.3535 18.4668 17.6699 18.666 17.8613C18.8652 18.0527 19.1816 18.0468 19.373 17.8457L24.5059 12.5L19.373 7.15427C19.2812 7.05466 19.1523 6.99802 19.0176 6.99411Z" fill="white" />
                            </svg>

                        </a>

                    </div>
                </div>
            </div>


        </div>
        <div class="thu-gian">
            <img id="image-thu-gian" src="./assets/images/clinic/v47_6.png" alt="">
            <div class="thu-gian-content">
                <img src="./assets/images/clinic/massage.png" alt="">
                <h3 id="massage">Massage Thư Giãn</h3>
                <p>Trong thời gian gần đây, các bạn trẻ và cả những cô chú trung niên ngày càng quan tâm nhiều hơn đến vấn đề chăm sóc mái tóc.</p>
                <div class="service-btn-clinic">
                    <div class="service-btn_content-clinic">
                        <a href="dich-vu" title="DỊCH VỤ">
                            TÌM HIỂU THÊM
                            <svg width="55" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19.0176 6.99411C18.8145 6.9902 18.6289 7.1113 18.5469 7.29684C18.4668 7.48434 18.5078 7.70114 18.6504 7.84567L22.6387 12L4.84766 12.1562C4.66797 12.1543 4.5 12.248 4.41016 12.4043C4.31836 12.5605 4.31836 12.7519 4.41016 12.9082C4.5 13.0644 4.66797 13.1582 4.84766 13.1562L22.6387 13L18.6504 17.1543C18.459 17.3535 18.4668 17.6699 18.666 17.8613C18.8652 18.0527 19.1816 18.0468 19.373 17.8457L24.5059 12.5L19.373 7.15427C19.2812 7.05466 19.1523 6.99802 19.0176 6.99411Z" fill="white" />
                            </svg>

                        </a>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>







<section class="tea-news <?php if ($deviceType == "computer") { ?> wow fadeInRight <?php } ?>" data-wow-offset="50" data-wow-duration="3" data-wow-delay="0.2s" <?php if ($bg_sanpham) { ?> style="background:url('<?= _upload_hinhanh_l . $bg_sanpham["photo"] ?>') no-repeat center center/cover;" <?php } ?>>

    <div style="background:  rgba(255, 255, 255, 0.5); backdrop-filter: blur(7.5px); border-radius: 13px;" class="grid wide">

        <div class="row">

            <div class="col l-12 m-12 c-12">

                <div class="tea-title__all">

                    <a href="san-pham" title="<?= $bg_sanpham["ten"] ?>" aria-label="<?= $bg_sanpham["ten"] ?>" role="link" rel="dofollow">

                        <span style="color:#4B4B4B; font-family: 'Nunito': serif; font-weight: 700; height: 33px; padding-top: 30px" class="wow zoomIn" data-wow-offset="50" data-wow-duration="3" data-wow-delay="0.2s"><?= $bg_sanpham["ten"] ?></span>

                    </a>

                </div>

                <?php if (!empty($bg_sanpham["mota"])) { ?>

                    <div class="tea-des__all">

                        <div class="content"><?= htmlspecialchars_decode($bg_sanpham["mota"]) ?></div>

                    </div>

                <?php } ?>

            </div>

        </div>

        <div class="row mt20 mt-m-10">

            <div class="col l-12 m-12 c-12">

                <div class="owl-carousel owl-theme owl-carousel-loop quick-slide" data-height="320" data-nav="0" data-loop="1" data-play="1" data-lg-items="4" data-md-items="2" data-sm-items="2" data-xs-items="1" data-dot="1" data-margin='30' data-deplay="<?= $row_setting["time_slider"] ?>">

                    <?= $func->gridTemplateProductOld($_product_nb, 'section', 'pt10 pb10 mb20', 'h4', '160', '200') ?>

                </div>

            </div>

        </div>

    </div>

</section>



<section class="tea-news <?php if ($deviceType == "computer") { ?> wow fadeInRight <?php } ?>" data-wow-offset="50" data-wow-duration="6" data-wow-delay="0.2s">

    <div  class="grid wide">

        <div class="row">

            <div class="col l-12 m-12 c-12">

                <div class="tea-title__all">

                    <a href="san-pham" title="<?= $bg_image["ten"] ?>" aria-label="<?= $bg_image["ten"] ?>" role="link" rel="dofollow">

                        <span style="color:#4B4B4B; font-family: 'Nunito': serif; font-weight: 700; height: 33px; padding-top: 30px " class="wow zoomIn" data-wow-offset="50" data-wow-duration="3" data-wow-delay="0.2s"><?= $bg_image["ten"] ?></span>

                    </a>

                </div>

                <?php if (!empty($bg_image["mota"])) { ?>

                    <div class="tea-des__all">

                        <div class="content"><?= htmlspecialchars_decode($bg_image["mota"]) ?></div>

                    </div>

                <?php } ?>

            </div>

        </div>

        <div class="mt20 mt-m-10">

            <div class="row l-12 m-12 c-12">

                <div style="display:grid; grid-template-columns: auto auto auto; gap:50px" >
                    <?= $func->gridTemplateAlbum_demo($hinh_anh, 'section', 'pt10 pb10 mb20', 'h4', '160', '200') ?>

                </div>

            </div>

        </div>

    </div>

</section>












