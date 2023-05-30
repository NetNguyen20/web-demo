<?php

    $slider=$db->rawQuery("select ten_$lang as ten,photo_$lang photo,link,mota_$lang as mota,slogan from #_photo where hienthi=1 and type=? order by stt asc,id desc",array('slider'));
    
    $introTop = $func->AllDataPhoto("ten_$lang as ten,mota_$lang as mota,",'intro-top',' limit 0,1','array');


?>

<section id="slider-top" class="clearfix p-relative">

<?php if($row_setting["slider_web"]==1){ ?>

    <section class="slider-videoupload p-relative">

        <div 
         video-width="1440"
         video-height="686"
         class="ratio-cover ratio-video">

            <video class="ratio-video__content" playsinline autoplay muted controls loop>

                <source src="<?=_upload_hinhanh_l.$row_setting["photo"]?>" type="video/mp4">
                
            </video>

        </div>

    </section>

<?php }else{ ?>

    <div class="maxSlider">

        <div class="box-slider">

            <div class="slider-left1">

            <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1519px;height:667px;overflow:hidden;visibility:hidden;">    

                <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1519px;height:667px;overflow:hidden;">
                        
                    <?php foreach ($slider as $k => $v){ $stt++; ?>

                        <div data-idle="<?=$row_setting["time_slider"]?>">

                            <a 
                            
                                href="<?=$v['link']!='' ? $v["link"] : 'javascript:void(0)'?>" 
                                title="<?=$v['ten']?>" 
                                rel="nofollow" <?php if(!empty($v["link"])){ ?> target="_blank" <?php }?> 
                                role="link" 
                                class="ratio-img d-block" 
                                img-width="1440" 
                                img-height="667px">
                            
                                <img 
                                
                                    width="1440" 
                                    height="667px" 
                                    class="ratio-img__content img-scale"
                                    data-u="image" 
                                    src="<?=$imgDefault?>" 
                                    data-src="<?=_upload_hinhanh_l.$v['photo']?>" alt="<?=$v['ten']?>" <?=$func->errorImg()?>/>
                        
                            </a>   
                            

                        </div>
                        

                    <?php }?>

                    </div>

                <div data-u="navigator" class="jssorb057" style="position:absolute;bottom:16px;right:16px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
                    <div data-u="prototype" class="i" style="width:14px;height:14px;">
                        <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                            <circle class="b" cx="8000" cy="8000" r="5000"></circle>
                        </svg>
                    </div>
                </div>

                
            </div>

        </div>

    </div>

    <script>
        $(function(){

            jssor_1_slider_init();

        });
    </script>

<?php }?>

    <!-- <?php if(count($introTop)>0): ?>

    <div class="tea-criteria">

        <div class="grid-s wide-s">

            <div class="row">

                <div class="col l-12 m-12 c-12">

                    <div class="tea-criteria__aside p-relative">

                        <div class="row">
                            
                            <?php foreach($introTop as $key=>$value){ ?>

                            <div class="col l-3 m-3 c-6 mb-m-20 col-check-intro">

                                <div class="tea-criteria-box">

                                    <div class="tea-criteria-box__img">

                                        <span class="d-block hover-left">

                                            <img src="<?=_upload_hinhanh_l.$value["photo"]?>" alt="<?=$value["ten"]?>">

                                        </span>

                                    </div>

                                    <div class="criteria-box-detail t-center">

                                       <div class="criteria-box-detail__title line-2">

                                            <span><?=$value["ten"]?></span>

                                       </div>

                                       <div class="criteria-box-detail__des line-2"><?= htmlspecialchars_decode($value["mota"])?></div>
                                       
                                    </div>

                                </div>

                            </div>

                            <?php }?>

                        </div>

                    </div>
                    
                </div>

            </div>

        </div>

    </div>

    <?php endif ?> -->

</section>





