<section class="section-top pb10 d-none d-block-m clearfix d-block-tablet scroll-fixed" mobile
    style="box-shadow:2px 2px 7px #ccc;<?=($template=='products/product_detail') ? 'margin-bottom:10px;':''?>">

    <div class="grid wide">

        <div class="row align-items-center">

            <div class="col l-12 m-12 c-12">

                <div class="box__menu__mobile mb5 mt5">

                    <div class="box__menu__mobile-left">

                        <div class="logo__left">

                            <a href="" class="p-relative ratio-img-mobile d-block" img-width="114" img-height="103">

                                <img class="ratio-img__content-mobile"
                                    src="<?=_upload_hinhanh_l.$logo_mobile["photo"]?>" alt="Logo trang chủ">

                                <div class="star-box">

                                    <img src="./assets/images/saolaplanh.png" class="saolaplanh star-animate"
                                        alt="Sao lấp lánh">

                                </div>

                            </a>

                        </div>

                    </div>

                    <div class="wrapper-header__left p-relative">

                        <div class="wrapper-header__rightmenu p-relative">

                            <div class="wrapper-header__rightmenu-layouttwo">

                                <a href="carts?src=gio-hang" class="cart-top__header p-relative" title="Giỏ hàng"
                                    aria-label="Giỏ hàng" rel="nofollow" role="link">

                                    <img class="icon-header__menu icon-header__menu--cart" width="28" height="24"
                                        src="<?=_upload_hinhanh_l.$_icongiohang["photo"]?>" alt="Giỏ hàng">

                                    <span
                                        class="wrapper-top__right-cart-aside-qty wrapper-top__right-cart-aside-qty--modifiers wrapper-top__right-cart-aside-qty--header view-cart"><?=$cart->getTotalQuality()?></span>

                                </a>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="col l-2 m-1 c-2 mt5">

                <div class="logo__center">

                    <div class="menu-bar-res d-none d-block-tablet d-block-m">

                        <a id="hamburger" href="javascript:void(0)" class="js-mobi-tool" data-target="#menuSide"
                            title="Menu"><span></span></a>

                    </div>

                </div>

            </div>

            <div class="col l-10 m-11 c-10 mt5">

                <div class="wrapper-menu__header-mobile p-relative">

                    <ul class="wrapper-menu__header-mobile-list">

                        <li
                            class="wrapper-menu__header-mobile-items <?php if($com=='' || $source=='index') echo 'activeMenuMobile'; ?>">

                            <a href="" aria-label="Trang chủ" title="Trang chủ" role="link" rel="dofollow"
                                class="wrapper-menu__header-mobile-links"><i class="fas fa-home"></i></a>

                        </li>   

                        <li
                            class="wrapper-menu__header-mobile-items <?php if($com=='gioi-thieu') echo 'activeMenuMobile'; ?>">

                            <a href="gioi-thieu" aria-label="VỀ CHÚNG TÔI" title="VỀ CHÚNG TÔI" role="link" rel="dofollow"
                                class="wrapper-menu__header-mobile-links">VỀ CHÚNG TÔI</a>

                        </li>
                        <li class="wrapper-menu__header-mobile-items <?php if($com=='san-pham') echo 'activeMenuMobile'; ?>">

                            <a 
                                href="san-pham"
                                aria-label="Sản phẩm"
                                title="Sản phẩm"
                                role="link"
                                rel="dofollow"
                                class="wrapper-menu__header-mobile-links">Sản phẩm</a>

                        </li>
                        <li class="wrapper-menu__header-mobile-items <?php if($com=='dich-vu') echo 'activeMenuMobile'; ?>">

                            <a 
                                href="dich-vu"
                                aria-label="Dịch vụ"
                                title="Dịch vụ"
                                role="link"
                                rel="dofollow"
                                class="wrapper-menu__header-mobile-links">Dịch vụ</a>

                        </li>
                        <li class="wrapper-menu__header-mobile-items <?php if($com=='cam-nang') echo 'activeMenuMobile'; ?>">

                            <a 
                                href="cam-nang"
                                aria-label="Cẩm nang chăm sóc cá"
                                title="Cẩm nang chăm sóc cá"
                                role="link"
                                rel="dofollow"
                                class="wrapper-menu__header-mobile-links">Cẩm nang chăm sóc cá</a>

                        </li>
                        <li
                            class="wrapper-menu__header-mobile-items <?php if($com=='tin-tuc') echo 'activeMenuMobile'; ?>">

                            <a href="tin-tuc" aria-label="Tin tức" title="Tin tức" role="link" rel="dofollow"
                                class="wrapper-menu__header-mobile-links">Tin tức</a>

                        </li>

                        <li
                            class="wrapper-menu__header-mobile-items <?php if($com=='lien-he') echo 'activeMenuMobile'; ?>">

                            <a href="lien-he" aria-label="LIÊN HỆ" title="LIÊN HỆ" role="link" rel="dofollow"
                                class="wrapper-menu__header-mobile-links">LIÊN HỆ</a>

                        </li>

                    </ul>

                    <div class="wrapper-menu__header-mobile-next-menu">

                        <span><i class="fa-regular fa-chevron-right"></i></span>

                    </div>

                </div>

            </div>
        </div>

    </div>

</section>