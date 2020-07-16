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
        <div class="container-fluid bg-light border mt-4">
          <ul class="nav nav-tabs mb-3 w-100 row border-bottom-0 mt-2 container" id="pills-tab" role="tablist">
            <li class="col-lg-4 justify-content-center">
              <a class="underlined nav-link" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Recement vu</a>
            </li>
            <li class="col-lg-4 justify-content-center">
              <a class="underlined nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Mes favoris</a>
            </li>
            <li class="col-lg-4 justify-content-center">
              <a class="underlined nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Historique</a>
            </li>
          </ul>
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">1</div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">2</div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">3</div>
          </div>
        </div>
        <!-- end navs -->
        <!-- slides are here -->
        <div id="carouselExampleIndicators" class="carousel slide my-4 border" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox" id ="top_carrousel">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="./_bx_assoc_imgs_/_images_pub/haut_Pro2.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="./_bx_assoc_imgs_/_images_pub/haut_Pro3.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="./_bx_assoc_imgs_/_images_pub/h2.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="./_bx_assoc_imgs_/_images_pub/haut_Pro.jpg" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
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
                   <div class="row mt-2 pt-3">
                    <!-- start row cars -->
                      <div class="col-lg-2 col-4 px-1">
                        <div class="w-100 border p-1">
                           <div class="col-lg-12">
                             <a href="?page=" class="nav-img-link"><img src="./_bx_assoc_imgs_/_bx_banners_/back_header.png" alt=""></a>
                           </div>
                           <div class="col-lg-12 overflow-hidden shadow">
                              <a href="?page=" class="nav-link p-0">
                                <small class="w-100">
                                  TOYOTA rav4
                                </small>
                                <p><small><b>prix:</b>&nbsp;<b class="text-primary">12000$</b></small></p>
                                </a>
                           </div>
                        </div>
                      </div>

                      <div class="col-lg-2 col-4 px-1">
                        <div class="w-100 border p-1">
                           <div class="col-lg-12">
                             <img src="./_bx_assoc_imgs_/_bx_banners_/back_header.png" alt="">
                           </div>
                           <div class="col-lg-12 overflow-hidden shadow">
                             <small class="w-100" style="overflow:hide;width:100%" >
                              TOYOTA rav4
                             </small>
                             <p><small><b>prix:</b>&nbsp;<b class="text-primary">12000$</b></small></p>
                           </div>
                        </div>
                      </div>
                      <div class="col-lg-2 col-4 px-1">
                        <div class="w-100 border p-1">
                           <div class="col-lg-12">
                             <img src="./_bx_assoc_imgs_/_bx_banners_/back_header.png" alt="">
                           </div>
                           <div class="col-lg-12 overflow-hidden shadow">
                             <small class="w-100" style="overflow:hide;width:100%" >
                              TOYOTA rav4
                             </small>
                             <p><small><b>prix:</b>&nbsp;<b class="text-primary">12000$</b></small></p>
                           </div>
                        </div>
                      </div>
                      <div class="col-lg-2 col-4 px-1">
                        <div class="w-100 border p-1">
                           <div class="col-lg-12">
                             <img src="./_bx_assoc_imgs_/_bx_banners_/back_header.png" alt="">
                           </div>
                           <div class="col-lg-12 overflow-hidden shadow">
                             <small class="w-100" style="overflow:hide;width:100%" >
                              TOYOTA rav4
                             </small>
                             <p><small><b>prix:</b>&nbsp;<b class="text-primary">12000$</b></small></p>
                           </div>
                        </div>
                      </div>
                      <div class="col-lg-2 col-4 px-1">
                        <div class="w-100 border p-1">
                           <div class="col-lg-12">
                             <img src="./_bx_assoc_imgs_/_bx_banners_/back_header.png" alt="">
                           </div>
                           <div class="col-lg-12 overflow-hidden shadow">
                             <small class="w-100" style="overflow:hide;width:100%" >
                              TOYOTA rav4
                             </small>
                             <p><small><b>prix:</b>&nbsp;<b class="text-primary">12000$</b></small></p>
                           </div>
                        </div>
                      </div>
                      <div class="col-lg-2 col-4 px-1">
                        <div class="w-100 border p-1">
                           <div class="col-lg-12">
                             <img src="./_bx_assoc_imgs_/_bx_banners_/back_header.png" alt="">
                           </div>
                           <div class="col-lg-12 overflow-hidden shadow">
                             <small class="w-100" style="overflow:hide;width:100%" >
                              TOYOTA rav4
                             </small>
                             <p><small><b>prix:</b>&nbsp;<b class="text-primary">12000$</b></small></p>
                           </div>
                        </div>
                      </div>
                      <!-- end row cars -->
                      <div class="col-lg-12 text-right mt-1">
                          <a href="?page=_myShop" class="nav-link"><span class="text-weight-bold"><span class="fa fa-plus"></span>&nbsp;voir plus</span></a>
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
   
  