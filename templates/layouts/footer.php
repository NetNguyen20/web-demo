<footer class="footer <?php if($deviceType=="computer"){ ?> fadeInRight wow <?php }?>" data-wow-offset="50"
    data-wow-duration="3" data-wow-delay="0.2s" <?php if($bg_footer){ ?>
    style="background:url('<?=_upload_hinhanh_l.$bg_footer["photo_".$lang]?>') center center/cover" <?php }?>>

    <div class="box-footer pb30">

        <div class="grid wide">

            <div class="row justify-content-between">

                <div class="col l-4 m-6 c-12">

                    <div class="box-mg">

                        <div class="title-footer p-relative">

                            <span>Thông Tin Liên Hệ</span>

                        </div>

                        <div class="desc-footer mt20">
                            <?= htmlspecialchars_decode($footer["mota"])?>
                        </div>

                    </div>

                </div>

                <div class="col l-2-4 m-6 c-12">

                    <div class="box-mg">

                        <div class="title-footer p-relative">

                            <span>Danh Mục Sản Phẩm</span>

                        </div>

                        <div class="desc-footer mt20">

                            <ul class="ul-list-none">

                                <?php foreach($list_c1_footer as $key => $value){?>

                                <li>
                                    <a href="<?=$value["type"]?>/<?= $value['tenkhongdau']?>"
                                        title="<?= $value['ten']?>">
                                        <i class="fa-sharp fa-solid fa-circle-small"></i> <?= $value['ten']?>
                                    </a>
                                </li>
                                <?php }?>

                            </ul>

                        </div>

                    </div>

                </div>

                <div class="col l-2-4 m-6 c-12">

                    <div class="box-mg">

                        <div class="title-footer p-relative">

                            <span>Quy Định & Chính Sách</span>

                        </div>

                        <div class="desc-footer mt20">

                            <ul class="ul-list-none">

                                <?php foreach($chinhsach as $key => $value){?>

                                <li>
                                    <a href="<?=$value["type"]?>/<?= $value['tenkhongdau']?>"
                                        title="<?= $value['ten']?>">
                                        <i class="fa-sharp fa-solid fa-circle-small"></i> <?= $value['ten']?>
                                    </a>
                                </li>
                                <?php }?>

                            </ul>

                        </div>

                    </div>

                </div>

                <div class="col l-2-4 m-6 c-12">

                    <div class="box-mg">

                        <div class="title-footer">

                            <span>Liên Kết Nhanh</span>

                        </div>

                        <div class="desc-footer mt20">

                            <?= $func->getSocial($socical,'justify-content-start') ?>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <?php include _layouts."sectionCopy.php"; ?>

</footer>