<!DOCTYPE html>

<html lang="<?=$lang?>" itemscope itemtype="http://schema.org/WebSite">

    <head>

        <?php include _source.'meta.php' ?>

        <?php include _layouts."css.php"; ?>

        <?php  if(!$func->isGoogleSpeed()){ ?>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        
        <?php }?>

        <script src="assets/js/all.js"></script>
        
    </head>

    <body itemscope itemtype="https://schema.org/WebPage" <?php if($source=='index') echo 'class="bg-gray"'; ?>>

        <?php  if(!$func->isGoogleSpeed()){ ?>

        <?=$row_setting["code_body"] ?>

        <?php }?>

        <?php include _layouts."seo.php"; ?>

        <div id="wrapper">

            <?php if($deviceType!='computer'){ ?>

            <?php include_once _layouts."topmobile.php";?>


            <?php }?>


            <?php include_once _layouts."top_demo.php";?>

            <?php include _layouts.'menu_demo.php'; ?>


            <?php if($source=='index'){?>
                
                <?php include _layouts."slider.php";?>

            <?php }?>

            <?php include _template.$template."_tpl.php";?>

            <?php include _layouts."doitac.php"; ?>

            <?php include _layouts."footer.php"; ?>

            <?php include _layouts."sectionCall.php";?>

            <?php if($deviceType!='computer'){ ?>

            <?php include _layouts."menu_mobile.php"; ?>

            <?php }?>

            <?php if($popup && $popup["photo_$lang"]!=''){ ?>

                <?php include_once _layouts.'popup.php'; ?>

            <?php }?>

        </div>

        <script>

            $(function(){

                $('img').each(function(){
                    var alter = $(this).attr('alt');
                    if(alter == "" || alter == null || alter == undefined){
                        $(this).attr('alt',"<?=$row_setting["name_$lang"]?>");
                    }
                });

            })
           
        </script>

        
        <?php include _layouts."js.php"; ?>

        <div class="mask-overlay"></div>

        <div id="loader">

            <div class="loader">

                <div class="inner one"></div>

                <div class="inner two"></div>

                <div class="inner three"></div>

            </div>

        </div>

    </body>

</html>

