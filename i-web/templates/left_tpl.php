<nav class="sidebar-nav sidebar-bunker">

    <div class="sidebar-header">

        <div class="box" style="padding: 15px 0px 0px 0px;">

            <div class="logo-admin" style="text-align: center">

                <a href="index.php" title="logo"> <img src="images/logo.png" alt="" width="170" <?= ($config['logo'] == true) ? 'class="none"' : '' ?> /> </a>

            </div>

            <div class="line-admin">

                <span><i class="fas fa-globe"></i></span>

            </div>

        </div>

    </div>

    <ul class="metismenu" id="menu1">

        <li>

            <a class="home" href="index.php" title="Trang chủ">

                <i class="nav-icon text-sm fal fa-home"></i>Trang Chủ</a>

        </li>

        <li class="<?= ($com == 'baiviet' && $_GET['type'] == 'tac-gia') ? "active" : "" ?>">

            <a class="has-arrow" href="#" aria-expanded="<?= ($com == 'baiviet' && $_GET['type'] == 'tac-gia') ? "true" : "false" ?>">

                <span>

                    <i class="nav-icon text-sm fal fa-boxes"></i>Quản lý tác giả

                </span>

            </a>

            <ul aria-expanded="<?= ($com == 'baiviet' && 'tac-gia' == $_GET['type']) ? "true" : "false" ?>" class="collapse <?= ($com == 'baiviet' && 'tac-gia' == $_GET['type']) ? "in" : "" ?>" <?= ($com == 'baiviet' && 'tac-gia' == $_GET['type']) ? "" : "style='height: 0px;'" ?>>

                <li class="<?= ($com == 'baiviet' && $act == 'man' && 'tac-gia' == $_GET['type']) ? "this" : "" ?>">

                    <a href="index.php?com=baiviet&act=man&type=<?= 'tac-gia' ?>&page=1">Danh sách tác giả</a>

                </li>

            </ul>

        </li>

        <li class="<?= ($com == 'baiviet' && $_GET['type'] == 'giai-phap') ? "active" : "" ?>">

            <a class="has-arrow" href="#" aria-expanded="<?= ($com == 'baiviet' && $_GET['type'] == 'giai-phap') ? "true" : "false" ?>">

                <span>

                    <i class="nav-icon text-sm fal fa-boxes"></i>Quản lý giải pháp

                </span>

            </a>

            <ul aria-expanded="<?= ($com == 'baiviet' && 'giai-phap' == $_GET['type']) ? "true" : "false" ?>" class="collapse <?= ($com == 'baiviet' && 'giai-phap' == $_GET['type']) ? "in" : "" ?>" <?= ($com == 'baiviet' && 'giai-phap' == $_GET['type']) ? "" : "style='height: 0px;'" ?>>

                <li class="<?= ($com == 'baiviet' && $act == 'man' && 'giai-phap' == $_GET['type']) ? "this" : "" ?>">

                    <a href="index.php?com=baiviet&act=man&type=<?= 'giai-phap' ?>&page=1">Danh sách giải pháp</a>

                </li>

            </ul>

        </li>

        <li class="<?= ($com == 'order' || ($com == 'baiviet' && 'cau-hoi' == $_GET['type']) || ($com == 'baiviet' && 'htgh' == $_GET['type']) || ($com == 'baiviet' && 'pttt' == $_GET['type'])) ? "active" : "" ?>">

            <a class="has-arrow" href="#" aria-expanded="<?= ($com == 'order' || ($com == 'baiviet' && 'cau-hoi' == $_GET['type']) || ($com == 'baiviet' && 'htgh' == $_GET['type']) || ($com == 'baiviet' && 'pttt' == $_GET['type'])) ? "true" : "false" ?>">

                <span>

                    <i class="nav-icon text-sm fal fa-boxes"></i>Quản lý đặt hàng

                </span>

            </a>

            <ul aria-expanded="<?= ($com == 'order' || ($com == 'baiviet' && 'cau-hoi' == $_GET['type']) ||  ($com == 'baiviet' && 'htgh' == $_GET['type']) || ($com == 'baiviet' && 'pttt' == $_GET['type'])) ? "true" : "false" ?>" class="collapse <?= ($com == 'order' || ($com == 'baiviet' && 'cau-hoi' == $_GET['type']) ||  ($com == 'baiviet' && 'htgh' == $_GET['type']) || ($com == 'baiviet' && 'pttt' == $_GET['type'])) ? "in" : "" ?>" <?= ($com == 'order' || ($com == 'baiviet' && 'cau-hoi' == $_GET['type']) ||  ($com == 'baiviet' && 'htgh' == $_GET['type']) || ($com == 'baiviet' && 'pttt' == $_GET['type'])) ? "" : "style='height: 0px;'" ?>>

                <li class="<?= ($com == 'baiviet' && $act == 'man' && 'htgh' == $_GET['type']) ? "this" : "" ?>">

                    <a href="index.php?com=baiviet&act=man&type=htgh&page=1">Hình thức giao hàng</a>

                </li>

                <li class="<?= ($com == 'baiviet' && $act == 'man' && 'pttt' == $_GET['type']) ? "this" : "" ?>">

                    <a href="index.php?com=baiviet&act=man&type=pttt&page=1">Phương thức thanh toán</a>

                </li>

                <li class="<?= ($com == 'order' && $act == 'man') ? "this" : "" ?>">

                    <a href="index.php?com=order&act=man&page=1">Danh sách đơn hàng</a>

                </li>

            </ul>

        </li>


        <li class="<?= (($com == 'baiviet' && $_GET['type'] == 'san-pham')) ? "active" : "" ?>">

            <a class="has-arrow" href="#" aria-expanded=" <?= (($com == 'baiviet' && $_GET['type'] == 'san-pham')) ? "true" : "false" ?>">

                <span>

                    <i class="nav-icon text-sm fal fa-boxes"></i>Quản lý sản phẩm

                </span>

            </a>

            <ul aria-expanded="<?= (($com == 'baiviet' && $_GET['type'] == 'san-pham')) ? "true" : "false" ?>" class="collapse <?= (($com == 'baiviet' && $_GET['type'] == 'san-pham')) ? "in" : "" ?>" <?= (($com == 'baiviet' && $_GET['type'] == 'san-pham')) ? "" : "style='height: 0px;'" ?>>


                <li class="<?= ($com == 'baiviet' && $act == 'man_list' && 'san-pham' == $_GET['type']) ? "this" : "" ?>">

                    <a href="index.php?com=baiviet&act=man_list&tbl=list&type=san-pham&page=1">Danh mục cấp 1</a>

                </li>




                <?php /*

                <li class="<?=($com=='baiviet' && $act=='man_cat' && 'san-pham'==$_GET['type']) ? "this" :""?>">

                <a href="index.php?com=baiviet&act=man_cat&tbl=cat&type=san-pham&page=1">Danh mục cấp 2</a>

        </li>

        */ ?>

                <?php /*   <li class="<?=($com=='baiviet' && $act=='man_item' && 'san-pham'==$_GET['type']) ? "this" :""?>">

        <a href="index.php?com=baiviet&act=man_item&tbl=item&type=san-pham&page=1">Danh mục cấp 3</a>

        </li> */ ?>

                <li class="<?= ($com == 'baiviet' && $act == 'man' && 'san-pham' == $_GET['type']) ? "this" : "" ?>">

                    <a href="index.php?com=baiviet&act=man&type=san-pham&page=1">Danh sách</a>

                </li>



            </ul>

        </li>


        <li class="<?= (($com == 'baiviet' && $_GET['type'] == 'danh-gia')) ? "active" : "" ?>">

            <a class="has-arrow" href="#" aria-expanded=" <?= (($com == 'baiviet' && $_GET['type'] == 'danh-gia')) ? "true" : "false" ?>">

                <span>

                    <i class="nav-icon text-sm fal fa-boxes"></i>Quản lý đánh giá

                </span>

            </a>

            <ul aria-expanded="<?= (($com == 'baiviet' && $_GET['type'] == 'danh-gia')) ? "true" : "false" ?>" class="collapse <?= (($com == 'baiviet' && $_GET['type'] == 'danh-gia')) ? "in" : "" ?>" <?= (($com == 'baiviet' && $_GET['type'] == 'danh-gia')) ? "" : "style='height: 0px;'" ?>>


                <li class="<?= ($com == 'baiviet' && $act == 'man_list' && 'danh-gia' == $_GET['type']) ? "this" : "" ?>">

                    <a href="index.php?com=baiviet&act=man_list&tbl=list&type=danh-gia&page=1">Danh mục cấp 1</a>

                </li>




                <?php /*

    <li class="<?=($com=='baiviet' && $act=='man_cat' && 'san-pham'==$_GET['type']) ? "this" :""?>">

    <a href="index.php?com=baiviet&act=man_cat&tbl=cat&type=san-pham&page=1">Danh mục cấp 2</a>

</li>

*/ ?>

                <?php /*   <li class="<?=($com=='baiviet' && $act=='man_item' && 'san-pham'==$_GET['type']) ? "this" :""?>">

<a href="index.php?com=baiviet&act=man_item&tbl=item&type=san-pham&page=1">Danh mục cấp 3</a>

</li> */ ?>

                <li class="<?= ($com == 'baiviet' && $act == 'man' && 'danh-gia' == $_GET['type']) ? "this" : "" ?>">

                    <a href="index.php?com=baiviet&act=man&type=danh-gia&page=1">Danh sách</a>

                </li>



            </ul>

        </li>




        <li class="<?= (($com == 'baiviet' && $_GET['type'] == 'dich-vu')) ? "active" : "" ?>">

            <a class="has-arrow" href="#" aria-expanded=" <?= (($com == 'baiviet' && $_GET['type'] == 'dich-vu')) ? "true" : "false" ?>">

                <span>

                    <i class="nav-icon text-sm fal fa-boxes"></i>Quản lý dịch vụ

                </span>

            </a>

            <ul aria-expanded="<?= (($com == 'baiviet' && $_GET['type'] == 'dich-vu')) ? "true" : "false" ?>" class="collapse <?= (($com == 'baiviet' && $_GET['type'] == 'dich-vu')) ? "in" : "" ?>" <?= (($com == 'baiviet' && $_GET['type'] == 'dich-vu')) ? "" : "style='height: 0px;'" ?>>


                <li class="<?= ($com == 'baiviet' && $act == 'man_list' && 'dich-vu' == $_GET['type']) ? "this" : "" ?>">

                    <a href="index.php?com=baiviet&act=man_list&tbl=list&type=dich-vu&page=1">Danh mục cấp 1</a>

                </li>


                <li class="<?= ($com == 'baiviet' && $act == 'man_cat' && 'dich-vu' == $_GET['type']) ? "this" : "" ?>">

                    <a href="index.php?com=baiviet&act=man_cat&tbl=cat&type=dich-vu&page=1">Danh mục cấp 2</a>

                </li>


                <?php /*

    <li class="<?=($com=='baiviet' && $act=='man_cat' && ''==$_GET['type']) ? "this" :""?>">

    <a href="index.php?com=baiviet&act=man_cat&tbl=cat&type=&page=1">Danh mục cấp 2</a>

</li>

*/ ?>

                <?php /*   <li class="<?=($com=='baiviet' && $act=='man_item' && ''==$_GET['type']) ? "this" :""?>">

<a href="index.php?com=baiviet&act=man_item&tbl=item&type=&page=1">Danh mục cấp 3</a>

</li> */ ?>

                <li class="<?= ($com == 'baiviet' && $act == 'man' && 'dich-vu' == $_GET['type']) ? "this" : "" ?>">

                    <a href="index.php?com=baiviet&act=man&type=&page=1">Danh sách</a>

                </li>



            </ul>

        </li>


        <!-- check -->
        <li class="<?= ($com == 'baiviet' && $_GET['type'] == 'tuyen-dung') ? "active" : "" ?>">

            <a class="has-arrow" href="#" aria-expanded="<?= ($com == 'baiviet' && $_GET['type'] == 'tuyen-dung') ? "true" : "false" ?>">

                <span>

                    <i class="nav-icon text-sm fal fa-boxes"></i>Quản lý tuyển dụng

                </span>

            </a>

            <ul aria-expanded="<?= ($com == 'baiviet' && 'tuyen-dung' == $_GET['type']) ? "true" : "false" ?>" class="collapse <?= ($com == 'baiviet' && 'tuyen-dung' == $_GET['type']) ? "in" : "" ?>" <?= ($com == 'baiviet' && 'tuyen-dung' == $_GET['type']) ? "" : "style='height: 0px;'" ?>>

                <li class="<?= ($com == 'baiviet' && $act == 'man' && 'tuyen-dung' == $_GET['type']) ? "this" : "" ?>">

                    <a href="index.php?com=baiviet&act=man&type=<?= 'tuyen-dung' ?>&page=1">Danh sách tuyển dụng</a>

                </li>

            </ul>

        </li>



        <li class="<?= ($com == 'baiviet' && $_GET['type'] == 'hinh-anh') ? "active" : "" ?>">

            <a class="has-arrow" href="#" aria-expanded="<?= ($com == 'baiviet' && $_GET['type'] == 'hinh-anh') ? "true" : "false" ?>">

                <span>

                    <i class="nav-icon text-sm fal fa-boxes"></i>Quản lý hình ảnh thực tế

                </span>

            </a>

            <ul aria-expanded="<?= ($com == 'baiviet' && 'hinh-anh' == $_GET['type']) ? "true" : "false" ?>" class="collapse <?= ($com == 'baiviet' && 'hinh-anh' == $_GET['type']) ? "in" : "" ?>" <?= ($com == 'baiviet' && 'hinh-anh' == $_GET['type']) ? "" : "style='height: 0px;'" ?>>

                <li class="<?= ($com == 'baiviet' && $act == 'man' && 'hinh-anh' == $_GET['type']) ? "this" : "" ?>">

                    <a href="index.php?com=baiviet&act=man&type=<?= 'hinh-anh' ?>&page=1">Danh sách hình ảnh</a>

                </li>

            </ul>

        </li>








        <li <?= (($com == 'info' || $com == 'baiviet' || $com == 'video') && ($_GET['type'] == 'gioi-thieu' || $_GET['type'] == 'ho-so-nang-luc' || $_GET['type'] == 'album' || $_GET['type'] == 'video')) ? ' class="active"' : '' ?>>

            <a class="has-arrow" href="#" aria-expanded="<?= (($com == 'info' || $com == 'baiviet' || $com == 'video') && ($_GET['type'] == 'gioi-thieu' || $_GET['type'] == 'ho-so-nang-luc' || $_GET['type'] == 'album' || $_GET['type'] == 'video')) ? 'true' : 'false' ?>">

                <i class="nav-icon text-sm fal fa-pager"></i>Giới thiệu

            </a>

            <ul aria-expanded="<?= (($com == 'info' || $com == 'baiviet' || $com == 'video') && ($_GET['type'] == 'gioi-thieu' || $_GET['type'] == 'ho-so-nang-luc' || $_GET['type'] == 'album' || $_GET['type'] == 'video')) ? 'true' : 'false' ?>" class="collapse <?= (($com == 'info' || $com == 'baiviet' || $com == 'video') && ($_GET['type'] == 'gioi-thieu' || $_GET['type'] == 'ho-so-nang-luc' || $_GET['type'] == 'album' || $_GET['type'] == 'video')) ? 'in' : '' ?>" <?= (($com == 'info' || $com == 'baiviet' || $com == 'video') && ($_GET['type'] == 'gioi-thieu' || $_GET['type'] == 'ho-so-nang-luc' || $_GET['type'] == 'album' || $_GET['type'] == 'video')) ? '' : 'style="height: 0px;"' ?>>

                <li <?= ($com == 'info' && $_GET['type'] == 'gioi-thieu') ? ' class="this"' : '' ?>><a href="index.php?com=info&act=capnhat&type=gioi-thieu" title="">Về chúng tôi</a></li>

            </ul>

        </li>

        <li class="<?= ($com == 'baiviet' && ('tin-tuc' == $_GET['type'] || 'chinh-sach' == $_GET['type']    || 'vi-sao' == $_GET['type']  || 'he-thong-cua-hang' == $_GET['type']  || 'y-kien' == $_GET['type'] || 'chinh-sach' == $_GET['type'] || 'cam-nang' == $_GET['type'] || 'dich-vu' == $_GET['type'] || 'chinh-sach' == $_GET['type'])) ? "active" : "" ?>">

            <a class="has-arrow" href="#" aria-expanded="<?= ($com == 'baiviet' && ('tin-tuc' == $_GET['type'] || 'chinh-sach' == $_GET['type']  || 'dich-vu' == $_GET['type'] || 'vi-sao' == $_GET['type'] || 'he-thong-cua-hang' == $_GET['type']  || 'ptgh' == $_GET['type'] || 'chinh-sach' == $_GET['type'] || 'cam-nang' == $_GET['type'] || 'dich-vu' == $_GET['type'])) ? "true" : "false" ?>">

                <span>

                    <i class="nav-icon text-sm fal fa-boxes"></i>Quản lý bài viết chung

                </span>

            </a>

            <ul aria-expanded="<?= ($com == 'baiviet' && ('tin-tuc' == $_GET['type'] || 'cam-nang' == $_GET['type'] || 'chinh-sach' == $_GET['type'] || 'vi-sao' == $_GET['type'])) ? "true" : "false" ?>" class="collapse <?= ($com == 'baiviet' && ('tin-tuc' == $_GET['type'] || 'cam-nang' == $_GET['type'] || 'chinh-sach' == $_GET['type'] || 'vi-sao' == $_GET['type'] || 'dich-vu' == $_GET['type'])) ? "in" : "" ?>" <?= ($com == 'baiviet' && ('tin-tuc' == $_GET['type'] || 'cam-nang' == $_GET['type'] || 'chinh-sach' == $_GET['type'] || 'vi-sao' == $_GET['type'])) ? "" : "style='height: 0px;'" ?>>

                <li class="<?= ($com == 'baiviet' && $act == 'man' && 'tin-tuc' == $_GET['type']) ? "this" : "" ?>">

                    <a href="index.php?com=baiviet&act=man&type=tin-tuc&page=1">Tin tức</a>

                </li>

                <li class="<?= ($com == 'baiviet' && $act == 'man' && 'cam-nang' == $_GET['type']) ? "this" : "" ?>">

                    <a href="index.php?com=baiviet&act=man&type=cam-nang&page=1">Cẩm nang</a>

                </li>
                <li class="<?= ($com == 'baiviet' && $act == 'man' && 'vi-sao' == $_GET['type']) ? "this" : "" ?>">

                    <a href="index.php?com=baiviet&act=man&type=vi-sao&page=1">Vì sao</a>

                </li>

                <li class="<?= ($com == 'baiviet' && $act == 'man' && 'chinh-sach' == $_GET['type']) ? "this" : "" ?>">

                    <a href="index.php?com=baiviet&act=man&type=chinh-sach&page=1">Chính sách</a>

                </li>

            </ul>

        </li>

        <li <?= (($com == 'photo') || $com == 'video') ? ' class="active"' : '' ?>>

            <a class="has-arrow" href="#" aria-expanded="<?= (($com == 'photo')) ? 'true' : 'false' ?>">

                <i class="nav-icon text-sm fal fa-images"></i>Slider - MXH - ĐốiTác

            </a>

            <ul aria-expanded="<?= (($com == 'photo') || $com == 'video') ? 'true' : 'false' ?>" class="collapse <?= (($com == 'photo') || $com == 'video') ? 'in' : '' ?>" <?= (($com == 'photo') || $com == 'video') ? '' : 'style="height: 0px;"' ?>>

                <li <?= ($com == 'photo' && $_GET['type'] == 'slider') ? ' class="this"' : '' ?>><a href="index.php?com=photo&act=man&type=slider&page=1" title="">Danh sách Slider</a>

                </li>
                <li <?= ($com == 'photo' && $_GET['type'] == 'quang-cao') ? ' class="this"' : '' ?>><a href="index.php?com=photo&act=man&type=quang-cao&page=1" title="">Danh sách quảng cáo</a>

                </li>

                <li <?= ($com == 'photo' && $_GET['type'] == 'doi-tac') ? ' class="this"' : '' ?>><a href="index.php?com=photo&act=man&type=doi-tac&page=1" title="">Đối tác </a>

                </li>

                <li <?= ($com == 'photo' && $_GET['type'] == 'mangxahoi') ? ' class="this"' : '' ?>><a href="index.php?com=photo&act=man&type=mangxahoi&page=1" title="">Mạng xã hội</a>

                </li>

                <?php /* <li <?=($com=='video' && $_GET['type']=='video') ? ' class="this"' : '' ?>><a
                href="index.php?com=video&act=man&type=video&page=1" title="">Danh sách video</a>

    </li> */ ?>

            </ul>

        </li>

        <?php if (count($GLOBAL['bannerqc']) > 0) { ?>

            <li <?= ($com == 'bannerqc') ? ' class="active"' : '' ?>>

                <a class="has-arrow" href="#" aria-expanded="<?= ($com == 'bannerqc') ? 'true' : 'false' ?>">

                    <i class="nav-icon text-sm fal fa-pager"></i>Hình ảnh

                </a>

                <ul aria-expanded="<?= ($com == 'bannerqc') ? 'true' : 'false' ?>" class="collapse <?= ($com == 'bannerqc') ? 'in' : '' ?>" <?= ($com == 'bannerqc') ? '' : 'style="height: 0px;"' ?>>

                    <?php foreach ($GLOBAL['bannerqc'] as $key => $value) { ?>

                        <li <?php if (isset($kiemtra)) {
                                if ($func->checkPermissions('bannerqc', 'capnhat', $key)) echo 'class="none"';
                            } ?> <?php if ($_GET['type'] == $key) echo ' class="this"' ?>><a href="index.php?com=bannerqc&act=capnhat&type=<?= $key ?>" title=""><?= $value['title_main'] ?></a>

                        </li>

                    <?php } ?>

                </ul>

            </li>

        <?php } ?>

        <!-- <li class="<?= (($com == 'map') && $act == 'man') ? "active" : "" ?>">

            <a class="has-arrow" href="#" aria-expanded="<?= (($com == 'map') && $act == 'man') ? "true" : "false" ?>">

                <i class="nav-icon text-sm fal fa-id-card"></i>Hệ thống cửa hàng
            </a> -->

        <!-- <ul aria-expanded="<?= (($com == 'map') && $act == 'man') ? "true" : "false" ?>"
                class="collapse <?= (($com == 'map') && $act == 'man') ? "in" : "" ?>">

                <li <?php if ($com == 'map' && $act == 'man') echo ' class="this"' ?>><a href="index.php?com=map&act=man"
                        title="">Danh sách map</a></li>
            </ul>

        </li> -->

        <li class="<?= (($com == 'contact' || $com == 'booking' || $com == 'newsletter') && $act == 'man') ? "active" : "" ?>">

            <a class="has-arrow" href="#" aria-expanded="<?= (($com == 'contact' || $com == 'booking' || $com == 'newsletter') && $act == 'man') ? "true" : "false" ?>">

                <i class="nav-icon text-sm fal fa-id-card"></i>Liên hệ
            </a>

            <ul aria-expanded="<?= (($com == 'contact' || $com == 'booking' || $com == 'newsletter') && $act == 'man') ? "true" : "false" ?>" class="collapse <?= (($com == 'contact' || $com == 'booking' || $com == 'newsletter') && $act == 'man') ? "in" : "" ?>">

                <li <?php if ($com == 'contact' && $act == 'man') echo ' class="this"' ?>><a href="index.php?com=contact&act=man&type=contact" title="">Danh sách liên hệ</a></li>

                <li <?php if ($com == 'booking' && $act == 'man' && $_GET["type"] == 'tu-van') echo ' class="this"' ?>><a href="index.php?com=booking&act=man&type=tu-van" title="">Đăng ký tư vấn</a></li>

                <li <?php if ($com == 'booking' && $act == 'man' && $_GET["type"] == 'goi-lai') echo ' class="this"' ?>><a href="index.php?com=booking&act=man&type=goi-lai" title="">Yêu cầu gọi lại</a></li>


            </ul>

        </li>

        <li class="<?= ($com == 'redirect' || ($com == 'seopage' && $act == 'capnhat')) ? "active" : "" ?>">

            <a class="has-arrow" href="#" aria-expanded="<?= ($com == 'redirect' || ($com == 'seopage' && $act == 'capnhat')) ? "true" : "false" ?>">

                <i class="nav-icon text-sm fal fa-share-alt"></i>Quản lý seo

            </a>

            <ul aria-expanded="<?= ($com == 'redirect' || ($com == 'seopage' && $act == 'capnhat')) ? "true" : "false" ?>" class="collapse <?= ($com == 'redirect' || ($com == 'seopage' && $act == 'capnhat')) ? "in" : "" ?>">



                <?php foreach ($setting['seopage']['page'] as $k => $v) { ?>



                    <li <?php if (($com == 'seopage' && $act == 'capnhat') && $type == $k) echo ' class="this"' ?>><a href="index.html?com=seopage&act=capnhat&type=<?= $k ?>" title=""><?= $v ?></a></li>

                <?php } ?>

                <li <?= ($com == 'redirect') ? ' class="this"' : '' ?>><a href="index.html?com=redirect&act=man" title="">

                        Redirect url

                    </a>

                </li>

            </ul>

        </li>



        <li <?= ($com == 'setting' || $com == 'company') ? 'class="active"' : '' ?>>

            <a class="has-arrow" href="#" aria-expanded="<?= ($com == 'setting' || $com == 'company') ? 'true' : 'false' ?>">

                <i class="nav-icon text-sm fal fa-cogs"></i>Cài đặt cấu hình

            </a>

            <ul aria-expanded="<?= ($com == 'setting' || $com == 'company') ? 'true' : 'false' ?>" class="collapse <?= ($com == 'setting' || $com == 'company') ? 'in' : '' ?>" <?= ($com == 'setting' || $com == 'company') ? '' : 'style="height: 0px;"' ?>>

                <?php foreach ($GLOBAL['company'] as $key => $value) { ?>

                    <li <?php if (isset($kiemtra)) {
                            if ($func->checkPermissions('company', 'capnhat', $key)) echo 'class="none"';
                        } ?> <?= ($com == 'company' && $_GET['type'] == $key) ? ' class="this"' : '' ?>><a href="index.php?com=company&act=capnhat&type=<?= $key ?>" title=""><?= $value['title_main'] ?></a>

                    </li>

                <?php } ?>
                <?php foreach ($GLOBAL['map'] as $key => $value) { ?>
                    <li <?= ($com == 'map' && $key == $_GET['type']) ? ' class="this"' : '' ?>>
                        <a href="index.html?com=map&act=man&type=<?= $key ?>" title="">

                            <?= $value['title'] ?>

                        </a>

                    </li>
                <?php } ?>


                <li <?= ($com == 'setting') ? ' class="this"' : '' ?>><a href="index.php?com=setting&act=capnhat" title="">

                        <?= _cauhinhchung ?>

                    </a>

                </li>

            </ul>

        </li>

        <?php if ($GLOBAL_USER == true) { ?>

            <?php if ($func->checkUserAdmin()) { ?>

                <li <?= ($com == 'user') ? 'class="active"' : '' ?>>

                    <a class="has-arrow" href="#" aria-expanded="fa<?= ($com == 'user') ? 'true' : 'false' ?>">

                        <i class="nav-icon text-sm fal fa-users-cog"></i>Tài khoản admin

                    </a>

                    <ul aria-expanded="<?= ($com == 'user') ? 'true' : 'false' ?>" class="collapse <?= ($com == 'user') ? 'in' : '' ?>" <?= ($com == 'user') ? '' : 'style="height: 0px;"' ?>>

                        <?php if ($GLOBAL_USER == true) { ?>

                            <li <?php if ($_GET['com'] == 'user' && $_GET['act'] == 'man') echo ' class="this"' ?>><a href="index.php?com=user&act=man&type=user&page=1"><?= _account ?></a></li>

                        <?php } ?>

                    </ul>

                </li>

            <?php } ?>

        <?php } ?>

        <?php if ($GLOBAL_LANG == true) { ?>

            <li <?= ($_GET['com'] == 'ngonngu') ? 'class="active"' : '' ?>>

                <a class="has-arrow" href="#" aria-expanded="<?= ($_GET['com'] == 'ngonngu') ? 'true' : 'false' ?>">

                    <i class="nav-icon text-sm fal fa-language"></i> Hỗ trợ ngôn ngữ

                </a>

                <ul aria-expanded="<?= ($_GET['com'] == 'ngonngu') ? 'true' : 'false' ?>" class="collapse <?= ($_GET['com'] == 'ngonngu') ? 'in' : '' ?>" <?= ($_GET['com'] == 'ngonngu') ? '' : 'style="height: 0px;"' ?>>

                    <li <?php if ($_GET['com'] == 'ngonngu' && $_GET['act'] == 'man_lang') echo ' class="this"' ?>><a href="index.php?com=ngonngu&act=man_lang"><?= _ngonngu ?></a></li>

                </ul>

            </li>

        <?php } ?>

    </ul>

</nav>