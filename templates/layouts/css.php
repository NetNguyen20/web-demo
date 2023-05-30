<?php  if(!$func->isGoogleSpeed()){ ?>

<link rel="stylesheet" href="./assets/plugins/fontawesome/css/all.min.css">
<link rel="stylesheet" href="./assets/css/style.css">

<?php }?>

<?php

    $css->setCache("cached");

    if(!$func->isGoogleSpeed()){

        $css->setCss("./assets/css/all.css");

        $css->setCss("./assets/css/fonts.css");

        $css->setCss("./assets/css/normalize.css");

    }

    $css->setCss("./assets/css/jssor.css");

    $css->setCss("./assets/css/reset.css");
    
    $css->setCss("./assets/plugins/wow/animate.css");

    $css->setCss("./assets/css/keyframes.css");

    $css->setCss("./assets/css/tool_demo.css");

    $css->setCss("./assets/css/detail.css");

    $css->setCss("./assets/css/grid.css?v=".filemtime("./assets/css/grid.css"));
    $css->setCss("./assets/css/style.css?v=".filemtime("./assets/css/style.css"));


    $css->setCss("./assets/css/responsive.css?v=".filemtime("./assets/css/responsive.css"));

    echo $css->getCss();

?>

<style>

<?php  if(!$func->isGoogleSpeed()){ ?>

@font-face {

font-family: 'Inter';

src: url('assets/images/fonts/font/Inter/Inter-VariableFont_slnt,wght.ttf') format('truetype');

}

@font-face {

font-family: 'Inter-Black';

src: url('assets/images/fonts/font/Inter/static/Inter-Black.ttf') format('truetype');

}

@font-face {

font-family: 'Inter-Bold';

src: url('assets/images/fonts/font/Inter/static/Inter-Bold.ttf') format('truetype');

}

@font-face {

font-family: 'Inter-ExtraBold';

src: url('assets/images/fonts/font/Inter/static/Inter-ExtraBold.ttf') format('truetype');

}

@font-face {

font-family: 'Inter-ExtraLight';

src: url('assets/images/fonts/font/Inter/static/Inter-ExtraLight.ttf') format('truetype');

}

@font-face {

font-family: 'Inter-Light';

src: url('assets/images/fonts/font/Inter/static/Inter-Light.ttf') format('truetype');

}

@font-face {

font-family: 'Inter-Medium';

src: url('assets/images/fonts/font/Inter/static/Inter-Medium.ttf') format('truetype');

}

@font-face {

font-family: 'Inter-Regular';

src: url('assets/images/fonts/font/Inter/static/Inter-Regular.ttf') format('truetype');

}

@font-face {

font-family: 'Inter-Semibold';

src: url('assets/images/fonts/font/Inter/static/Inter-SemiBold.ttf') format('truetype');

}

@font-face {

font-family: 'Inter-Thin';

src: url('assets/images/fonts/font/Inter/static/Inter-Thin.ttf') format('truetype');

}

<?php }?>
    
:root {

    --html-bg-website: <?=$row_setting['color_page']?>;

    --html-cl-website: <?=$row_setting['color_text']?>;

    --html-sc-website: <?=$row_setting['color_secondary']?>;

    --color-star:#fec60f;

    --secondary-website: <?=$row_setting['color_secondary']?>;

    --inter-main:'Inter';

    --inter-black:'Inter-Black';

    --inter-bold:'Inter-Bold';

    --inter-extrabold:'Inter-ExtraBold';

    --inter-extralight:'Inter-ExtraLight';

    --inter-light:'Inter-Light';

    --inter-medium:'Inter-Medium';

    --inter-rg:'Inter-Regular';

    --inter-semibold:'Inter-Semibold';

    --inter-thin:'Inter-Thin';

}
</style>