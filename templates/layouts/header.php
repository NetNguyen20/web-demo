<header
    class="wrapper-header d-none-m d-none-tablet d-none-tl <?=($source!='index') ? 'box-shadown__tpl':''?>">

    <div class="grid wide">

        <div class="row align-items-center justify-content-between">

            <div class="col l-2-8 m-4 c-12">

                <div class="wrapper-header__logo res--flex--head p-relative">
                    <div class="res--logo--header">
                        <a href="" class="d-block">

                            <img width="160" height="150" src="<?=_upload_hinhanh_l.$logo["photo"]?>"
                                alt="Logo trang chủ">

                        </a>

                    </div>
                    <div class="res--slogan--header t-center">
                        <div class="res--slogan--up">
                            <?=$row_setting["scrolltext1_$lang"]?>
                        </div>
                        <div class="res--slogan--down">
                            <?=$row_setting["scrolltext2_$lang"]?>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col l-7-1 m-6 c-12">

                <div class="res--box--right--head">
                   <div class="row d-flex align-items-center">
                        <div class="col l-9 m-9 c-12">
                            <div class="res--box--gray">
                            <div class="res--box--search">
                                <button class="nav-menu__formsearchheader-button" data-btn-search-pc type="submit">
                                    <img src="assets/images/search.svg" alt="Tìm kiếm" />
                                </button>
                                <input role="text" data-role="search-input" type="text" name="keywords" id="keywordspc"
                                    placeholder="Tìm kiếm sản phẩm...">
                            </div>
                            </div>
                        </div>
                        <div class="col l-3 m-3 c-12">
                            <div class="res--box--phone">
                                <span><img src="assets/images/phone.svg" alt="Điện thoại" /></span>
                                <span class="phone"><?=$row_setting["hotline"]?></span>
                            </div>
                        </div>
                   </div>
                </div>

            </div>

            <!-- <div class="col l-1 m-3 c-12">

                <div class="wrapper-header__rightmenu p-relative">

                    <div class="wrapper-header__rightmenu-layoutone">

                        <span class="search-Click">

                            <img class="icon-header__menu" src="<?=_upload_hinhanh_l.$_icontimkiem["photo"]?>" alt="Icon tìm kiếm">

                        </span>

                        <div class="nav-menu__formsearchheader d-flex align-items-center">

                            <input role="text" data-role="search-input" type="text" name="keywords" id="keywordspc" placeholder="Tìm kiếm...">

                            <button class="nav-menu__formsearchheader-button" data-btn-search-pc type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>

                        </div>

                    </div>

                    <div class="wrapper-header__rightmenu-layouttwo">

                        <a href="carts?src=gio-hang" class="cart-top__header p-relative" title="Giỏ hàng" aria-label="Giỏ hàng" rel="nofollow" role="link">

                            <img class="icon-header__menu" width="28" height="24" src="<?=_upload_hinhanh_l.$_icongiohang["photo"]?>" alt="Giỏ hàng">

                            <span class="wrapper-top__right-cart-aside-qty wrapper-top__right-cart-aside-qty--modifiers wrapper-top__right-cart-aside-qty--header view-cart"><?=$cart->getTotalQuality()?></span>

                        </a>

                    </div>

                </div>

            </div> -->

        </div>

    </div>

</header>