<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta property="og:url"           content="https://www.lesmilleservices.com" />
    <meta property="og:type"          content="Les Mille Services " />
    <meta property="og:title"         content="Les Mille Services" />
    <meta property="og:description"   content="En voiture, On assure" />
    <meta property="og:image"         content="https://lesmilleservices.com/_bx_assoc_imgs_/vraieheader.png" />
    <title>les 1000 services </title>
    <link rel="icon" sizes="" href="../_bx_assoc_imgs_/vraieheader.png">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles 
    <link rel="stylesheet" href="../css/Image_anim.css" >
    <link rel="stylesheet" href="../css/scroll_bar_theme.css" >-->
    <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
    <!-- <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=5ecb7398e15c0d0012555026&product=inline-share-buttons" async="async"></script> -->
    <link rel="stylesheet" href="../css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="../css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="../css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="../css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="../css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="../css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="../css/style.css" type="text/css">
    <!-- <script data-ad-client="ca-pub-4775294507760385" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script> -->
    <link rel="stylesheet" href="../css/st.me.css" type="text/css">
</head>
<body class="hs m-0 p-0">
<?php require('../js/_function.php'); require('./_routing_conf.php'); ?>
    <!-- header -->
    <?php include('./_bx_mob_cmp_/_header.php') ?>
    <!-- end header -->
    <!-- ----------------------------------------- -->
    <!-- left menu -->
    <div class="pl-0 position-absolute overflow-auto bg-drkd left-menu" style="min-height:200%;background:red;">
        <?php include('./_bx_mob_cmp_/_menu_left.php') ?>
    </div>
    <!-- end left menu -->
    <!-- <div class="container px-1 mx-0 px-0"> -->
        <!-- including all pages -->
        <div class="col-sm-12 col-12 pt-1">
            <?php require('./_bx_mob_pg_/'.$page.'.php');?>
        </div>
        <!-- end including -->
    <!-- </div> -->
    <!-- ---------------------------------------- -->
    <!-- footer -->
    <?php include('./_bx_mob_cmp_/_footer.php') ?>
    <!-- end footer -->
    <!-- plugIn  -->
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- end plugIn -->
    <script>
      $('.login-sec').animate({height: '0',position: 'absolute'});
      $('.left-menu').animate({width: '0'});
      
      $('.btn-menu-toggler').click(function(){
        const v  = document.getElementById('btn-menu-toggler').getAttribute('aria-expanded');
        if(v === 'false'){
            $('.left-menu').animate({width: '100%'});
            $('.left-menu').animate({height: '0'});
            document.getElementById('btn-menu-toggler').setAttribute('aria-expanded','true');
        }else if(v === 'true'){
            $('.left-menu').animate({width: '0'});
            document.getElementById('btn-menu-toggler').setAttribute('aria-expanded','false');
        }
      })
      $('#keysearchmobile').focus(function(){
          $('.cont').addClass('w-75');
      })
      $('#btn-log-mb').click(function(evt){
        const v = document.getElementById('btn-log-mb').getAttribute('aria-expanded');
        if(v === 'false'){
          $('.login-sec').animate({height: '87.5px'})
          document.getElementById('btn-log-mb').setAttribute('aria-expanded','true')
        }else{
          $('.login-sec').animate({height: '0'})
          document.getElementById('btn-log-mb').setAttribute('aria-expanded','false')
        }
      })
      $('#btn-srch-mb').click(function(e){
        const v = document.getElementById('btn-srch-mb').getAttribute('aria-expanded');
        if(v === 'false'){
          $('.logo-img').animate({
            opacity: '0',
            display: 'none'
          },'show')
          $('.formheader').removeClass('d-none').addClass('w-100');
          document.getElementById('btn-srch-mb').setAttribute('aria-expanded','true');
        }else if(v === 'true'){
            $('.logo-img').animate({
            opacity: '1',
            display: 'block'
          })
          $('.formheader').addClass('d-none');
          document.getElementById('btn-srch-mb').setAttribute('aria-expanded','false');
        }
      }) 
    </script>
</body>
</html>