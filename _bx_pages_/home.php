<style>
    li.active_h a{
        background:#007bff;
        
    }
    .nav-link:hover{
      color: #3498db;
    }
    .nav-link{
      color:black;
    }
    .next a{
    border: 2px solid blue; padding:3px; margin 3px: position:absolute; right:30%;
    }
    /* .col-lg-4 a.dc:active{
        background: #3498db;
    } */
    /*my mobile script*/
    @media screen and (max-width: 771px){
    .d-mobile{
      display: none;
    }
    }
    @media screen and (max-width: 993px){
      .p-m{margin-top: 10px;}
      .d-mobile{align-items: center;}
      .p-d{display: none;}
    }
    .d-mobile img, .pub img{
      transition: 0.9s ease;
    }
    .d-mobile img:hover, .pub img:hover{
        transform: scale(1.007);
        transition: ease 0.7s;
        opacity: 0.8;
    }
    
</style>
     <!-- Page Content -->
  <div class="container">
    <div class="row">
    <!-- include left menu -->
    <?php include('./_bx_body_/_sct_left_menu.php') ?>
    <!-- end menu -->
    <!-- start col right -->
      <div class="col-lg-9">
        <!-- navs -->
        <?php $me = @getUserIP(); $h = @_getCustomerLatestViewed($me,$bdd); ?>
        <div class="container-fluid bg-light border mt-4">
          <ul class="nav nav-pills mb-3 w-100 row border-bottom-0 mt-2 container" id="pills-tab" role="tablist">
          
            <li class="col-lg-4 justify-content-center">
              <a class="underlined nav-link active dc" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Recement vu</a>
            </li>
            <li class="col-lg-4 justify-content-center">
              <a class="underlined nav-link dc" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Mes favoris</a>
            </li>
            <li class="col-lg-4 justify-content-center">
              <a class="underlined nav-link dc" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Historique</a>
            </li>
          </ul>
          <div class="tab-content pb-3" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
              <div class="row mx-2 mb-2">
              <?php 
                if(count($h) === 0) {
                    ?>
                      <div class="col-12">
                        <h5> <span class="fa fa-spinner text-warning"></span> Votre Historique de recherche apparaitra ici</h5>
                        <small class="pl-4">Rien à afficher pour le moment</small>
                      </div>
                    <?php    
                      }else{
                    ?>
                    <div class="col-12 mt-0 pl-0 ml-0 pb-3">
                        <small><b class="text-weight-bold"><span class="fa fa-circle-o mr-2"></span>&nbsp;Recement vus</b></small>
                    </div>
                    <?php
                        foreach ($h as $ky) {
                         $mod = strlen($ky->model) < 15 ? ($ky->model) : substr($ky->model,0,12).'~ ...';
                    ?>
                    <!-- start row cars -->

                      <div class="col-lg-2 col-6 border px-0 pb-0">
                        <div class="w-100 p-1">
                           <div class="col-lg-12 px-0">
                             <a href="?page=_product&_prd_get_cat_=<?php echo($ky->categorie)?>&_idProduct_=<?php echo($ky->id);?>" class="nav-img-link bg-primary w-100">
                                <img src="./_bx_assoc_imgs_/_bx_assoc_imgs_/<?php echo($ky->imgPrcl) ?>" alt="history : <?php echo($ky->id) ?>">
                             </a>
                           </div>
                           <div class="col-lg-12 overflow-hidden px-0 pb-0">
                           <a href="?page=_product&_prd_get_cat_=<?php echo($ky->categorie)?>&_idProduct_=<?php echo($ky->id);?>" class="nav-link p-0 font-weight-bold">
                              <i class="text-uppercase text-primary"><?php echo($ky->marque) ?></i><br>
                              <strong><small><?php echo($mod) ?></small></strong>
                              <p><small><span class="fa fa-circle-o-notch text-right"></span></small></p>
                            </a>
                           </div>
                        </div>
                      </div>
                      
                      <!-- end row cars -->
                    <?php
                        } 
                      }
                    ?>
              </div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            <div class="col-12 mt-0 pl-0 ml-0 pb-3">
                <small><b class="text-weight-bold"><span class="fa fa-star mr-2"></span>&nbsp;Favoris</b></small>
            </div>
            <div class="col-12">
                <h5> <span class="fa fa-spinner text-warning"></span> Votre Historique de recherche apparaitra ici</h5>
                <small class="pl-4">Rien à afficher pour le moment</small>
            </div>
            </div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
            
            <div class="col-12 mt-0 pl-0 ml-0 pb-3">
                <small><b class="text-weight-bold"><span class="fa fa-circle-o mr-2"></span>&nbsp;Historique</b></small>
            </div>
            <div class="col-12">
                <h5> <span class="fa fa-spinner text-warning"></span> Votre Historique de recherche apparaitra ici</h5>
                <small class="pl-4">Rien à afficher pour le moment</small>
            </div>
            </div>
          </div>
        </div>
        <!-- end navs -->
        <!-- slides are here -->
        
        <div class="col-lg-12 p-1 d-lg-flex ">
          <!--first block-->
        <div class="col-lg-4 mt-lg-2 justify-content-center text-center">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner" role="listbox">
           
            <div class="carousel-item active justify-content-center pub">
               <div class="p-3 shadow">
               		<div class="h4 badge-warning font-weight-bold" style="color:#ff0000f5;">L1000</div><br>
                	<div class=" h6"> Nous avons ce qui vous faut</div>
                  	<div class="h3">Assurer vous</div>
               </div>
              <!-- <img class="d-block img-fluid" src="_bx_assoc_imgs_/_bx_banners_/CAR1.jpg" alt="First slide"> -->
            </div>
             <!--<div class="carousel-item justify-content-center">
              <img class="d-block img-fluid" src="_bx_assoc_imgs_/_bx_banners_/CAR2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="_bx_assoc_imgs_/_bx_banners_/CAR3.jpg" alt="Third slide">
            </div>-->
            <?php
                foreach ($tabMark as $key) { 
            ?>
            <div class="carousel-item text-center justify-content-center">
            <a data-toggle="tooltip" title="Cliquez pour ouvrir" href="?page=_searchby&key=<?php echo $key['nom']; ?>"><div class="h4 badge-warning font-weight-bold" style="color:#ff0000f5;"><?php echo $key['nom']; ?></div></a><br>
        <a class="" href="?page=_searchby&key=<?php echo $key['nom']; ?>">

            <b> <img src="<?php echo($key['img']) ?>" alt="<?php echo($key['nom']) ?> logo" width="50%"></b>
        </a><br>
            </div>
    <?php  
    }
   ?> 
          </div>
        </div>
          <!--fin carousel -->
        </div>
        <!--second block with 2 mini-block-->
        <div class="col-lg-8 p-m d-mobile" style="" >
          <!--first mini-block
          <div class="col-lg-12 ">
            <img src="./_bx_assoc_imgs_/_images_pub/haut_Pro1.jpg" height="100" alt="L1000" class="col-lg-12">-->
            <?php @include('_bx_body_/pub2.php'); ?>
          <!--</div>-->
          <!--second mini-block-->
          <div class="p-d text-center">
            <img src="_bx_assoc_imgs_/_bx_caroussel_/assurer_blk.jpg" height="100" class="col-lg-5 mt-1 p-0">
               <img src="_bx_assoc_imgs_/_bx_caroussel_/assurer_wht.jpg" height="100" class="col-lg-6 mt-1 p-0">
          </div>
        </div>

      </div>
        <!-- end slides -->
        <!--  -->
        <div class="w-100 bg-light border py-2 shadow hd-when-sm">
              <?php include('./_bx_body_/_sct_annonce.php') ?>
        </div>
        <!-- cars this week -->
        <div class="col-lg-12 bg-light mt-4 border">
            <div class="w-100">
               <div class="col-lg-4 underlined pb-1 mt-2 ">
                 <div class="col-lg-12 pb-1 pl-0">
                    <span class="pb-2">Top de la semaine</span>
                 </div>
               </div>
               <div class="container-fluid mt-2 pb-3">
                 <!-- <div class="w-100 bg-danger pb-4"> -->
                 <?php $z = @_onLoadMostLiked($bdd); ?>
                   <div class="row mt-2 pt-3">
                   <?php 
                      if(count($z) === 0) {
                    ?>
                      <div class="col-12">
                        <h5> <span class="fa fa-spinner"></span> Les tops de la semaine apparaitront ici</h5>
                        <small class="pl-4">Rien à afficher pour le moment</small>
                      </div>
                    <?php    
                      }else{
                        foreach ($z as $ky) {
                    ?>
                    <!-- start row cars -->

                      <div class="col-lg-2 col-6 px-1">
                        <div class="w-100 border p-1">
                           <div class="col-lg-12 p-0">
                             <a href="?page=_product&_prd_get_cat_=<?php echo($ky->categorie)?>&_idProduct_=<?php echo($ky->id);?>" class="nav-img-link">
                                <div class="ribbon-wrapper ribbon-sm text-right mr-2">
                               		<b class="fa fa-star text-warning"></b>
                               		<b class="fa fa-star text-warning"></b>
                               		<b class="fa fa-star text-warning"></b>
                                </div>
                                <img src="./_bx_assoc_imgs_/_bx_assoc_imgs_/<?php echo($ky->imgPrcl) ?>" alt="top : <?php echo($ky->id) ?>">
                             </a>
                           </div>
                           <div class="col-lg-12 overflow-hidden px-0">
                           <a href="?page=_product&_prd_get_cat_=<?php echo($ky->categorie)?>&_idProduct_=<?php echo($ky->id);?>" class="nav-link p-0 font-weight-bold">
                              <i class="text-uppercase text-primary"><?php echo($ky->marque) ?></i><br>
                              <i class="font-weight-bold"><small><?php echo($ky->model) ?></small>&nbsp;<b class="fa fa-star text-warning"></b></i>
                            </a>
                           </div>
                        </div>
                      </div>
                      
                      <!-- end row cars -->
                    <?php
                        } 
                      }
                    ?>
                      <div class="col-lg-12 mt-1 border-top pt-2">
                          <a href="?page=_myShop" class="nav-link float-right"><span class="text-weight-bold"><span class="fa fa-plus"></span>&nbsp;voir plus</span></a>
                      </div>
                   </div>
                 <!-- </div> -->
               </div>
            </div>
        </div>
        <!-- end cars this week -->
        <?php include_once('./_bx_pages_/_for_pagination.php') ?> 
        <!-- <div class="container-fluid bg-primary"> -->
        <!-- ------------------------------------------------------------ -->
        </div>
            <div class="container">
         <!-- debut row -->
                <div class="row mt-3" id="product_listing">
                      <?php #include_once('./_bx_pages_/_for_pagination.php') ?>   
                </div> 
        <!-- /.row -->
      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
</section>
<?php #include_once('./_bx_pages_/_for_pagination.php') ?>
	<!--inclusion de la pub-->
	
	
        <!-- Banner Section Begin -->
    <!-- Man Banner Section End -->

   <div class="container-fluid border mb-4 bg-light">
        <!-- Banner Section End -->
    <div class="benefit-items pt-0 mt-0 border-0">
        <div class="row">
            <div class="col-lg-4">
                <div class="single-benefit">
                    <div class="sb-icon">
                        <img src="img/icon-1.png" alt="">
                    </div>
                    <div class="sb-text">
                        <h6>Un achat libre</h6>
                        <p>Achat en anonymat</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-benefit">
                    <div class="sb-icon">
                        <img src="img/icon-2.png" alt="">
                    </div>
                    <div class="sb-text">
                        <h6>Guarantie accord&eacute;e</h6>
                        <p>En cas de non satisfaction</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-benefit">
                    <div class="sb-icon">
                        <img src="img/icon-1.png" alt="">
                    </div>
                    <div class="sb-text">
                        <h6>Paiement sécurisé</h6>
                        <p>Paiement 100% sécurisé</p>
                    </div>
                </div> 
            </div>
        </div>
        </div>

   </div>
   
  