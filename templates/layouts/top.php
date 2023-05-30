
<section class="wrap-top d-none-m d-none-tablet">

    <div class="grid wide">

        <div class="row align-items-center">

            <div class="col l-2 m-2 c-12"></div>

            <div class="col l-10 m-6 c-12">

                <div class="d-flex align-items-center">

                    <div class="wrap-top__address wrap-top__address--right">

                        <a href="javascript:void(0)" title="Hoạt động"><i class="fa-solid fa-clock mr5"></i> Hoạt động: <?=$row_setting["timework_$lang"]?></a>

                    </div>

                    <div class="wrap-top__address wrap-top__address--right">

                        <a href="javascript:void(0)" title="Địa chỉ"><i class="fa-sharp fa-solid fa-location-dot mr5"></i> Địa chỉ: <?=$row_setting["address_$lang"]?></a>

                    </div>

                    <div class="wrap-top__address pl15">

                        <a href="mailto:<?=$row_setting["email"]?>"><i class="fa-solid fa-envelope mr5"></i> Email: <?=$row_setting["email"]?></a>

                    </div>    

                    <div class="wrap-top__address--right">
                        <?=$func->getSocial($socical_footer,'justify-content-start')?>
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>