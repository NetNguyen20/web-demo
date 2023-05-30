<nav class="res--navbar d-none-m d-none-tablet d-none-tl">
    <div class="grid wide">
        <div class="row">
            <div class="col l-12 c-12 m-12">
                <ul class="nav-menu d-flex justify-content-center align-items-center">

                    <li class="<?php if ($com == '') echo ' active'; ?> p-relative">

                        <?php if (in_array($template, explode(',', $row_setting['seo']))) { ?>
                            <h2>
                            <?php } ?>
                            <a href="" title="Trang chủ" rel="dofollow" aria-label="Trang chủ" role="link">Trang chủ</a>
                            <?php if (in_array($template, explode(',', $row_setting['seo']))) { ?>
                            </h2>
                        <?php } ?>

                    </li>

                    <li class="<?php if ($com == 'gioi-thieu') echo ' active'; ?> p-relative">

                        <?php if (in_array($template, explode(',', $row_setting['seo']))) { ?>
                            <h2>
                            <?php } ?>
                            <a href="gioi-thieu" title="Giới thiệu" rel="dofollow" aria-label="Giới thiệu" role="link">VỀ CHÚNG TÔI</a>
                            <?php if (in_array($template, explode(',', $row_setting['seo']))) { ?>
                            </h2>
                        <?php } ?>

                    </li>

                    <li class="<?php if ($com == 'dich-vu') echo ' active'; ?> p-relative">

                        <?php if (in_array($template, explode(',', $row_setting['seo']))) { ?>
                            <h2>
                            <?php } ?>
                            <a href="dich-vu" title="Dịch vụ" rel="dofollow" aria-label="Dịch vụ" role="link">
                                DỊCH VỤ</a>
                            <?php if (in_array($template, explode(',', $row_setting['seo']))) { ?>
                            </h2>
                        <?php } ?>

                    </li>

                    <li class="<?php if ($com == 'san-pham') echo ' active'; ?> p-relative">

                        <?php if (in_array($template, explode(',', $row_setting['seo']))) { ?>
                            <h2>
                            <?php } ?>
                            <a href="san-pham" title="Sản phẩm" rel="dofollow" aria-label="Sản phẩm" role="link">Sản phẩm</a>
                            <?php if (in_array($template, explode(',', $row_setting['seo']))) { ?>
                            </h2>
                        <?php } ?>

                        <?php if (count($list_c1_sanpham) > 0) { ?>

                            <ul class="">

                                <?php foreach ($list_c1_sanpham as $k => $v) {

                                    $c2 = $db->rawQuery("select id,ten_$lang as ten,tenkhongdau_$lang as tenkhongdau from #_baiviet_cat where hienthi=1 and id_list=? order by stt asc,id desc", array($v['id']));

                                ?>

                                    <li class="p-relative">

                                        <?php if (in_array($template, explode(',', $row_setting['seo']))) { ?>

                                            <h3 class="mg0">

                                            <?php } ?>

                                            <a href="<?= $v['type'] ?>/<?= $v['tenkhongdau'] ?>" role="link" rel="dofollow" aria-label="<?= $v["ten"] ?>" title="<?= $v['ten'] ?>"><?= $v['ten'] ?></a>

                                            <?php if (in_array($template, explode(',', $row_setting['seo']))) { ?>

                                            </h3>

                                        <?php } ?>

                                        <?php if (count($c2) > 0) { ?>

                                            <ul>

                                                <?php

                                                foreach ($c2 as $key => $vc2) {

                                                    $c3 = $db->rawQuery("select id,ten_$lang as ten,tenkhongdau_$lang as tenkhongdau from #_baiviet_item where hienthi=1 and id_cat=? order by stt asc,id desc", array($vc2['id']));

                                                ?>
                                                    <li class="p-relative">

                                                        <?php if (in_array($template, explode(',', $row_setting['seo']))) { ?>

                                                            <h4 class="mg0">

                                                            <?php } ?>

                                                            <a href="<?= $v['type'] ?>/<?= $vc2['tenkhongdau'] ?>" rel="dofollow" title="<?= $vc2['ten'] ?>"><?= $vc2['ten'] ?></a>

                                                            <?php if (in_array($template, explode(',', $row_setting['seo']))) { ?>

                                                            </h4>

                                                        <?php } ?>

                                                        <?php if (count($c3) > 0) { ?>

                                                            <ul>

                                                                <?php
                                                                foreach ($c3 as $key => $vc3) {
                                                                ?>
                                                                    <li>

                                                                        <?php if (in_array($template, explode(',', $row_setting['seo']))) { ?>

                                                                            <h5>

                                                                            <?php } ?>

                                                                            <a href="<?= $v['type'] ?>/<?= $vc3['tenkhongdau'] ?>" role="link" rel="dofollow" title="<?= $vc3['ten'] ?>"><?= $vc3['ten'] ?></a>

                                                                            <?php if (in_array($template, explode(',', $row_setting['seo']))) { ?>

                                                                            </h5>

                                                                        <?php } ?>

                                                                    </li>

                                                                <?php } ?>

                                                            </ul>

                                                        <?php } ?>

                                                    </li>

                                                <?php } ?>

                                            </ul>

                                        <?php } ?>

                                    </li>

                                <?php } ?>

                            </ul>

                        <?php } ?>

                    </li>




                    <li class="<?php if ($com == 'bang-gia') echo ' active'; ?> p-relative">

                        <?php if (in_array($template, explode(',', $row_setting['seo']))) { ?>
                            <h2>
                            <?php } ?>
                            <a href="bang-gia" title="Cẩm nang chăm sóc cá" rel="dofollow" aria-label="Cẩm nang chăm sóc cá" role="link">
                                BẢNG GIÁ</a>
                            <?php if (in_array($template, explode(',', $row_setting['seo']))) { ?>
                            </h2>
                        <?php } ?>

                    </li>


                    <li class="<?php if ($com == 'tin-tuc') echo ' active'; ?> p-relative">

                        <?php if (in_array($template, explode(',', $row_setting['seo']))) { ?>
                            <h2>
                            <?php } ?>
                            <a href="tin-tuc" title="Tin tức" rel="dofollow" aria-label="Tin tức" role="link">
                                Tin tức</a>
                            <?php if (in_array($template, explode(',', $row_setting['seo']))) { ?>
                            </h2>
                        <?php } ?>

                    </li>

                    <li class="<?php if ($com == 'lien-he') echo ' active'; ?> p-relative">

                        <?php if (in_array($template, explode(',', $row_setting['seo']))) { ?>

                            <h2>

                            <?php } ?>

                            <a href="lien-he" title="LIÊN HỆ" rel="dofollow" aria-label="LIÊN HỆ" role="link">LIÊN
                                HỆ</a>

                            <?php if (in_array($template, explode(',', $row_setting['seo']))) { ?>

                            </h2>

                        <?php } ?>

                    </li>

                </ul>
            </div>
        </div>
    </div>
</nav>