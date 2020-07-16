
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
    <link rel="icon" sizes="" href="_bx_assoc_imgs_/vraieheader.png">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/Image_anim.css" >
    <link rel="stylesheet" href="css/scroll_bar_theme.css" >
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=5ecb7398e15c0d0012555026&product=inline-share-buttons" async="async"></script>
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <script data-ad-client="ca-pub-4775294507760385" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- <link rel="stylesheet" href="css/fontawesome-free/css/all.min.css"> -->
    <!-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> -->
    <!-- <link rel="stylesheet" href="css/adminlte.css"> -->
	<link rel="stylesheet" href="css/st.me.css" type="text/css">
	<link href="css/sumogallery.css" rel="stylesheet" />
    <script src="js/_catchVer.js"></script>
    <style>
       .sticky {
        width: 100% !important;
        top: 0;
        }
        .styckyimg{
            display:none;
            transition: 1s;
            top: 10%;
            opacity: 60%;
            position:absolute;
            transition: 4s;
        }
        .annimation{
            visibility: 1;
            opacity: 1;
        }
        @media(max-width:768px){
            .addaptator{
                width: 120px;
                left:1px;
                margin-top:48px;
                float:left;
            }
        }
        .annimation:hover{
            opacity: 95%;
            visibility: 90%;
            transition: 4s;
        }
    </style>
</head>
<?php require 'js/_function.php'; require_once 'Action.php';?>
<body>
	    <!-- Page Preloder -->
    <!-- <div id="preloder">
        <div class="calibreur">
            <div class="loading" id="loading"> 
                <div class="load-bars">
                    <span></span>
                </div>
            </div>
        </div>
    </div>  -->
		<!-- including header -->
		<?php  include("_bx_body_/_sct_header.php"); ?>
		<!-- end of header -->
		<!-- start of real body -->
        <div class="scab" id="scro">
            <?php 
                
                    include_once('_bx_pages_/'.$page.'.php');
                
            ?>
        </div>
		<!-- end of real body -->
        <?php  include("_bx_body_/_sct_footer.php"); ?>
	    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/_onSubmit.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.zoom.min.js"></script>
    <script src="js/jquery.dd.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    <script>
        $(document).ready(function() {
            setInterval(function(){
                const client = $('.client').val();
                _refreshMssge(client);
                // console.log(client);
            }, 1000);
            const stickyTop = $('.sticky').offset().top;
            const styckyimg = $('.styckyimg');
            const pubCont = $('.stickyy');
            const mssgcontent = $('.card-mssg-content');
            $(window).scroll(function() {
                var windowTop = $(window).scrollTop();
                if (stickyTop < windowTop) {
                    $('.sticky').css('position', 'fixed');
                    $('.styckyimg').css('display','block');
                    $('.styckyimg').addClass('annimation');
                    $('.pl-cst-25').css('paddingLeft','25%');
                } else {
                    $('.sticky').css('position', 'relative');
                    $('.styckyimg').css('display','none');
                    $('.pl-cst-25').css('paddingLeft','0');
                }
            });
            $(window).scroll(function(){
                // alert(pubCont.scrollTop());
                const rpr = $(window).scrollTop();
                if(rpr > 1618){
                    $('.stickyy').css('position','sticky');
                    $('.stickyy').css('top','75px');
                    // $('.stickyy').addClass('col-lg-3');
                }else{
                    $('.stickyy').css('position','relative');
                    $('.stickyy').css('top','0');
                }
            });
            $('.col-media').mouseover(function(evt){
                $('.col-media').addClass('w-100');
                $('.col-media-text').removeClass('d-none');
            });
            $('.col-media').mouseout(function(evt){
            //    setTimeout(function(){
                const v = document.getElementById('chat-content').getAttribute('aria-hidden');
                if(v === 'true'){
                $('.col-media-text').addClass('d-none');
                $('.col-media').removeClass('w-100');
                }
                
            //    }, 200);
            });
            $('.show-chat-cnt').click(function(evt){
                const v = document.getElementById('chat-content').getAttribute('aria-hidden');
                if(v === 'true'){
                    $('.chat-content').attr('aria-hidden', 'false');
                    document.getElementById('chat-content').setAttribute('aria-hidden','false');
                    $('.chat-content').removeClass('d-none');
                }else{
                    $('.chat-content').attr('aria-hidden', 'true');
                    $('.col-media-text').addClass('d-none');
                    $('.col-media').removeClass('w-100');
                    
                    // document.getElementById('chat-content').setAttribute('aria-hidden','true');
                    $('.chat-content').addClass('d-none');
                }
            })
            function _refreshMssge(id){
                const bx = document.getElementById('card-mssg-content');
                const divMessage = document.createElement('div');
                const xhr = new XMLHttpRequest();
                xhr.open('GET', './_bx_pages_/_getMessage.php?_idClient='+id, false);
                xhr.onreadystatechange = function(){
                    if(xhr.readyState === 4 && xhr.status === 200){
                        bx.innerHTML = null;
                        divMessage.innerHTML = xhr.responseText;
                        // div.appendChild()
                        bx.appendChild(divMessage);
                        // bx.innerHTML = divMessage;
                        // console.log(xhr.responseText)
                    }else{
                        alert('error')
                    }
                }
                xhr.send(null)
            }
            function _indicError(){
                alert(eroor)
            }
            $('.close-chat').click(function(){
                $('.chat-content').attr('aria-hidden', 'true');
                const v = document.getElementById('chat-content').getAttribute('aria-hidden');
                $('.chat-content').addClass('d-none');
            })
            $('.btn-send').click(function(evt){
                const mssg = $('.msg-value').val();
                const client = $('.client').val();
                if(mssg !== '') {
                    $('.msg-value').removeClass('border-danger');
                    const dataass = new FormData(document.getElementById('ass-contact'));
                    const xhr = new XMLHttpRequest();
                    xhr.open('POST', './js/_onSubmit.php', false);
                    // xhr.timeout = 30000;
                    xhr.onreadystatechange = function(){
                        if(xhr.readyState === 4 && xhr.status === 200){
                            const rs = xhr.responseText;
                            switch (rs) {
                                case '200':
                                    _refreshMssge(client);
                                    break;
                                case '500':
                                    _indicError();
                                    break;    
                                default:
                                    alert(rs)
                                    break;
                            }
                        }
                    }
                    xhr.send(dataass)
                    document.getElementById('msg-value').value = null;
            } else{
                $('.msg-value').addClass('border-danger');
            }
        
        })
            // $('.msg-value').keypress(function(evt){
            //     const mssg = $('.msg-value').val();
            //     const client = $('.client').val();
            //     if (evt.keyCode === 13 || evt.which === 13) {
            //        if(mssg !== '') {
            //             $('.msg-value').removeClass('border-danger');
            //             const dataass = new FormData(document.getElementById('ass-contact'));
            //             const xhr = new XMLHttpRequest();
            //             xhr.open('POST', './js/_onSubmit.php', false);
            //             // xhr.timeout = 30000;
            //             xhr.onreadystatechange = function(){
            //                 if(xhr.readyState === 4 && xhr.status === 200){
            //                     const rs = xhr.responseText;
            //                     switch (rs) {
            //                         case '200':
            //                             _refreshMssge(client);
            //                             break;
            //                         case '500':
            //                             _indicError();
            //                             break;    
            //                         default:
            //                             break;
            //                     }
            //                 }
            //             }
            //             xhr.send(dataass)
            //             document.getElementById('msg-value').value = null;
            //        }else{
            //             $('.msg-value').addClass('border-danger');
            //        }
            //     }
            // })
        });
   </script>
</body>
</html>