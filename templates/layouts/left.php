<?php

    $des_detail = $func->OneDataDes('des-detail','array');

?>

<div class="item col-3 w-100-t w-100-m">

    <div class="aside_sidebar-detail">

        <div class="header-sidebar">

            <span>HỖ TRỢ KHÁCH HÀNG</span>

        </div>

        <div class="header-sidebar--titlesmall t-center mt10">Yêu Cầu Gọi Lại</div>

        <div class="body-sidebar p-relative">
           
            <div class="box-under">

                <div class="des">

                    <?=htmlspecialchars_decode($des_detail["mota"])?>
                
                </div>
               
                <div class="letter-form mb15">

                    <input type="number" autocomplete="off" name="txt-phone-detail" class="input-txt txt-input-number"
                        placeholder="Nhập số điện thoại" />

                    <button type="button" class="btn-newsletter call-back__detail mt15">Liên Hệ Với Chúng Tôi</button>
                
                </div>

                <div class="contact-phone">
                    <ul>
                        <li class="w-100-m">
                            <a target="_blank" href="https://zalo.me/<?=str_replace(' ','',str_replace('.','',str_replace(',','',$row_setting["hotline"])))?>">
                                <p class="mb5"> <i class="fa fa-comment" style="color:#fff"></i> Zalo</p> 
                            </a>
                        </li>
                        <li class="mt10i w-100-m">
                            <a target="_blank" href="https://m.me/<?=$row_setting["linkmessage"]?>">
                                <p class="mb5"> <i class="fa-brands fa-facebook" style="color:#fff;"></i> Facebook</p> 
                            </a>
                        </li>
                    </ul>
                </div>

            </div>


        </div>

    </div>

</div>