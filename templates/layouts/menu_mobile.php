<?php

    $sanpham_mobile = $db->rawQuery("select id, ten_$lang as ten, tenkhongdau_$lang as tenkhongdau,type,photo from #_baiviet_list where hienthi=1 and menu=1 and type=? order by stt desc",array('san-pham'));

	$tintuc_mobile = $db->rawQuery("select id, ten_$lang as ten, tenkhongdau_$lang as tenkhongdau,type,photo from #_baiviet_list where hienthi=1 and menu=1 and type=? order by stt desc",array('tin-tuc'));

	$gioithieu_mobile = $db->rawQuery("select id, ten_$lang as ten, tenkhongdau_$lang as tenkhongdau,type,photo from #_baiviet where hienthi=1 and type=? order by stt desc",array('ve-chung-toi'));

?>

<div class="box-modal-menu d-none d-block-m d-block-tablet" id="menuSide">

    <div class="box-modal-menu__header">

        <div class="box-modal-menu__header-box">

            <div class="box-modal-menu__header-box-close" id="close-menumobile">

                <span><i class="fa-solid fa-square-xmark"></i></span>

                <span>Đóng</span>

            </div>

            <a href="" title="Trang chủ" class="box-modal-menu__header-box-home">

                <span><i class="fa-sharp fa-solid fa-house-user"></i></span>

                <span>Trang chủ</span>

            </a>

            <div class="box-modal-menu__header-box-search">

                <input role="text" data-role="search-input" type="text" name="keywords" id="keywords-mmenu"
                    placeholder="Tìm kiếm sản phẩm...">

                <button class="button-search-mmenu" data-btn-search="" data-target="#keywords-mmenu" data-view="">

                    <i class="fa-light fa-magnifying-glass"></i>

                </button>

            </div>

        </div>

    </div>

    <div class="p-relative">

        <ul class="list menu_list">

            <li>

                <div class="d-flex p-relative">

                    <a itemprop="url" title="Giới thiệu" href="gioi-thieu" role="link" aria-label="Giới thiệu"
                        rel="dofollow">Giới thiệu</a>
                    <a href="lien-he" title="Giới thiệu" aria-label="Giới thiệu" role="link" rel="dofollow"
                        class="ic-arrowp-product no-menu-css">

                        <span></span>

                    </a>
                </div>

            </li>


            <li>

                <div class="d-flex p-relative">

                    <a itemprop="url" title="Sản phẩm" href="san-pham" role="link" aria-label="Sản phẩm"
                        rel="dofollow">Sản phẩm</a>

                    <a href="javascript:" class="toggle-btn ic-arrow">

                        <span></span>

                    </a>

                </div>

                <?php if(count($sanpham_mobile)>0){ ?>

                <ul class="inner ul-list-none pr20" style="display: none;">

                    <li class="mt10 mb10">

                        <div class="wrapper-cat__product">

                            <div class="row">

                                <?php foreach($sanpham_mobile as $key => $vc2){ ?>

                                <div class="col m-3 c-4 d-flex flex-column mb-t-16 mb-m-8">

                                    <div class="wrapper-cat__product-box d-flex flex-column flex-cl-1">

                                        <div class="wrapper-cat__product-box-img">

                                            <a href="<?=$vc2["type"]?>/<?=$vc2["tenkhongdau"]?>"
                                                class="d-block hover-left ratio-cover no-menu-css ratio-img"
                                                title="<?=$vc2["ten"]?>" aria-label="<?=$vc2["ten"]?>" role="link"
                                                rel="dofollow" img-width="4" img-height="3">

                                                <img class="ratio-img__content img-scale" width="187" height="140"
                                                    src="<?=$imgDefault?>"
                                                    data-src="<?=_upload_baiviet_l.$vc2["photo"]?>"
                                                    alt="<?=$vc2["ten"]?>">

                                            </a>

                                        </div>

                                        <div class="wrapper-cat__product-box-detail d-flex flex-column flex-cl-1">

                                            <div class="wrapper-cat__product-box-title line-2 flex-cl-1">

                                                <a href="<?=$vc2["type"]?>/<?=$vc2["tenkhongdau"]?>"
                                                    title="<?=$vc2["ten"]?>" aria-label="<?=$vc2["ten"]?>" role="link"
                                                    rel="dofollow" class="no-menu-css"><?=$vc2["ten"]?></a>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <?php }?>

                            </div>

                        </div>

                    </li>

                </ul>

                <?php }?>

            </li>

            <li>

                <div class="d-flex p-relative">

                    <a itemprop="url" title="Dịch vụ" href="dich-vu" role="link" aria-label="Dịch vụ"
                        rel="dofollow">Dịch vụ</a>
                    <a href="dich-vu" title="Dịch vụ" aria-label="Dịch vụ" role="link" rel="dofollow"
                        class="ic-arrowp-product no-menu-css">

                        <span></span>

                    </a>
                </div>

            </li>
            <li>

                <div class="d-flex p-relative">

                    <a itemprop="url" title="Cẩm nang chăm sóc cá" href="cam-nang" role="link"
                        aria-label="Cẩm nang chăm sóc cá" rel="dofollow">Cẩm nang chăm sóc cá</a>
                    <a href="cam-nang" title="Cẩm nang chăm sóc cá" aria-label="Cẩm nang chăm sóc cá" role="link"
                        rel="dofollow" class="ic-arrowp-product no-menu-css">

                        <span></span>

                    </a>
                </div>

            </li>


            <li>

                <div class="d-flex p-relative">

                    <a itemprop="url" title="TIN TỨC" href="tin-tuc" role="link" aria-label="TIN TỨC" rel="dofollow">TIN
                        TỨC</a>

                    <a href="lien-he" title="LIÊN HỆ" aria-label="LIÊN HỆ" role="link" rel="dofollow"
                        class="ic-arrowp-product no-menu-css">

                        <span></span>

                    </a>

                </div>

            </li>

            <li>

                <div class="d-flex p-relative">

                    <a href="lien-he" title="LIÊN HỆ" aria-label="LIÊN HỆ" role="link" rel="dofollow">

                        <span>LIÊN HỆ</span>

                    </a>

                    <a href="lien-he" title="LIÊN HỆ" aria-label="LIÊN HỆ" role="link" rel="dofollow"
                        class="ic-arrowp-product no-menu-css">

                        <span></span>

                    </a>

                </div>

            </li>

        </ul>

    </div>

</div>