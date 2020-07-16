<?php 
    if(isset($_GET['_idProduct_']) && isset($_GET['_prd_get_cat_'])) { 
    
    // creating my product from a model
    
    $produit = _onLoadSingleProduct(trim($_GET['_idProduct_']),$bdd);
    $it = $_GET['_idProduct_'] ?? 0;
    $me = @getUserIP();
    @_setMyRecentViewed($me,$it,$bdd);
    
  ?>
    <!-- Breadcrumb Section Begin -->
      <!-- Load Facebook SDK for JavaScript -->
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text product-more">
                        <a href="?page=home"><i class="fa fa-home"></i> Home</a>
                        <a href="?page=_myShop">Véhicule</a>
                        <span>Détail</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->
    

    <!-- Product Shop Section Begin -->
    <section class="product-shop spad page-details pt-0">
        <div class="container">
            <div class="row">
	       <?php include('./_bx_body_/_sct_left_menu.php'); ?>
                <div class="col-lg-9 mt-4 bg-light border p-2">
                    <div class="row">
                        <div class="col-lg-6">
                                <img class="product-big-img img-thumbnail" data-sgallery="group1" title="L1000" date-thumb"./_bx_assoc_imgs_/_bx_assoc_imgs_/<?php echo($produit->imgPrcl); ?>" data-full="./_bx_assoc_imgs_/_bx_assoc_imgs_/<?php echo($produit->imgPrcl); ?>" data-thumb="./_bx_assoc_imgs_/_bx_assoc_imgs_/<?php echo($produit->imgPrcl); ?>" src="./_bx_assoc_imgs_/_bx_assoc_imgs_/<?php echo($produit->imgPrcl); ?>" alt="Img detail">
                               
                            <div class="product-thumbs" id= "Gallerie" >
                                    <img
                                 data-sgallery="group1" title="L1000" data-full="./_bx_assoc_imgs_/_bx_assoc_imgs_/<?php echo($produit->img1); ?>" data-thumb="./_bx_assoc_imgs_/_bx_assoc_imgs_/<?php echo($produit->img1); ?>" src="./_bx_assoc_imgs_/_bx_assoc_imgs_/<?php echo($produit->img1); ?>" alt="Img detail" width="75"  class="img-thumbnail">
                                    <img
                                 data-sgallery="group1" title="L1000" data-full="./_bx_assoc_imgs_/_bx_assoc_imgs_/<?php echo($produit->img2); ?>" data-thumb="./_bx_assoc_imgs_/_bx_assoc_imgs_/<?php echo($produit->img2); ?>" src="./_bx_assoc_imgs_/_bx_assoc_imgs_/<?php echo($produit->img2); ?>" alt="Img detail" width="75"  class="img-thumbnail">
                                    <img
                                 data-sgallery="group1" title="L1000" data-full="./_bx_assoc_imgs_/_bx_assoc_imgs_/<?php echo($produit->img3); ?>" data-thumb="./_bx_assoc_imgs_/_bx_assoc_imgs_/<?php echo($produit->img3); ?>" src="./_bx_assoc_imgs_/_bx_assoc_imgs_/<?php echo($produit->img3); ?>" alt="Img detail" width="75"  class="img-thumbnail">
                                    <img
                                 data-sgallery="group1" title="L1000" data-full="./_bx_assoc_imgs_/_bx_assoc_imgs_/<?php echo($produit->img4); ?>" data-thumb="./_bx_assoc_imgs_/_bx_assoc_imgs_/<?php echo($produit->img4); ?>" src="./_bx_assoc_imgs_/_bx_assoc_imgs_/<?php echo($produit->img4); ?>" alt="Img detail" width="75"  class="img-thumbnail">
                                    <img
                                 data-sgallery="group1" title="L1000" data-full="./_bx_assoc_imgs_/_bx_assoc_imgs_/<?php echo($produit->img5); ?>" data-thumb="./_bx_assoc_imgs_/_bx_assoc_imgs_/<?php echo($produit->img5); ?>" src="./_bx_assoc_imgs_/_bx_assoc_imgs_/<?php echo($produit->img5); ?>" alt="Img detail" width="75"  class="img-thumbnail"><br>
                                     <img
                                 data-sgallery="group1" title="L1000" data-full="./_bx_assoc_imgs_/_bx_assoc_imgs_/<?php echo($produit->img6); ?>" data-thumb="./_bx_assoc_imgs_/_bx_assoc_imgs_/<?php echo($produit->img6); ?>" src="./_bx_assoc_imgs_/_bx_assoc_imgs_/<?php echo($produit->img6); ?>" alt="Img detail" width="75"  class="img-thumbnail">
                                     <img
                                 data-sgallery="group1" title="L1000" data-full="./_bx_assoc_imgs_/_bx_assoc_imgs_/<?php echo($produit->img7); ?>" data-thumb="./_bx_assoc_imgs_/_bx_assoc_imgs_/<?php echo($produit->img7); ?>" src="./_bx_assoc_imgs_/_bx_assoc_imgs_/<?php echo($produit->img7); ?>" alt="Img detail" width="75"  class="img-thumbnail">
                                     <img
                                 data-sgallery="group1" title="L1000" data-full="./_bx_assoc_imgs_/_bx_assoc_imgs_/<?php echo($produit->img8); ?>" data-thumb="./_bx_assoc_imgs_/_bx_assoc_imgs_/<?php echo($produit->img8); ?>" src="./_bx_assoc_imgs_/_bx_assoc_imgs_/<?php echo($produit->img8); ?>" alt="Img detail" width="75"  class="img-thumbnail">
                                     <img
                                 data-sgallery="group1" title="L1000" data-full="./_bx_assoc_imgs_/_bx_assoc_imgs_/<?php echo($produit->img9); ?>" data-thumb="./_bx_assoc_imgs_/_bx_assoc_imgs_/<?php echo($produit->img9); ?>" src="./_bx_assoc_imgs_/_bx_assoc_imgs_/<?php echo($produit->img9); ?>" alt="Img detail" width="75"  class="img-thumbnail">
                                
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="product-details">
                                <div class="pd-title">
                                    <span><?php echo($produit->marque); ?></span>
                                    <h3><?php echo($produit->model); ?></h3>
                                    <div class="fb-share-button" 
    						data-href="https://lesmilleservices.com" 
    						data-layout="button_count">
  				    </div>
                                    <a href="#" id="<?php echo($produit->id) ?>" onclick="_addToMyfavorites(this.id)" class="heart-icon"><i class="icon_heart_alt"></i></a>
                                </div>
                                <div class="pd-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <span>(5)</span>
                                </div>
                                <div class="pd-desc">
                                    <p><?php echo($produit->description); ?></p>
                                    <h4>$<?php echo($produit->price); ?></h4>
                                </div>

                                <div class="quantity">
 <a href="?page=_getmyownprd&_getYou_this_=<?php echo($produit->id);?>&_dvd_me_=<?php echo($produit->price);?>&_dvd_got_cat_=<?php echo($produit->categorie);?>" class="primary-btn pd-cart">Commander</a>
                                </div>
                                <ul class="pd-tags">
        <li>
        <span>CATEGORIE</span>:
        <?php switch($produit->categorie){ 
        	case '84': echo("<span class='badge badge-primary'>Location</span>"); break; 
        	case '95': echo("<span class='badge badge-warning'>Vente</span>"); break;
        	} ?>
        </li>
       
                                </ul>
                                <div class="pd-share">
                                   <!-- <div class="p-code">Sku : 00012</div> -->
                                    <div class="pd-social">
                                    	<div class="sharethis-inline-share-buttons"></div>
                                       <!-- <a href="#"><i class="ti-facebook"></i></a>
                                        <a href="#"><i class="ti-twitter-alt"></i></a>
                                        <a href="#"><i class="ti-linkedin"></i></a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-tab">
                        <div class="tab-item">
                            <ul class="nav pb-3" role="tablist">
                                <li class="col-12 col-lg-4">
                                    <a class="active col-12 p-1 text-center py-2" data-toggle="tab" href="#tab-1" role="tab"><span class="hs h6"  style="font-size:13.7px">DéSCRIPTION</span></a>
                                </li>
                                <li class="col-12 col-lg-4">
                                    <a  class="col-12 p-1 text-center py-2" data-toggle="tab" href="#tab-2" role="tab"><span class="hs h6">caractéristiques</span></a>
                                </li>
                                <li  class="col-12 col-lg-4">
                                    <a  class="p-1 col-12 text-center py-2" data-toggle="tab" href="#tab-3" role="tab"><span class="hs h6">AVIS UTILISATEURS</span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-item-content px-4 border mx-3 pb-4">
                            <div class="tab-content">
                                <div class="tab-pane fade-in active" id="tab-1" role="tabpanel">
                                    <div class="product-content">
                                        <div class="row">
                                            <div class="col-lg-7">
                                                <h5>Introduction</h5>
                                                <p><?php echo($produit->description) ?></p>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab-2" role="tabpanel">
                                    <div class="specification-table">
                                        <table>
                                            <tr>
                                                <td class="p-catagory">Avis utilisateurs</td>
                                                <td>
                                                    <div class="pd-rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <span>(5)</span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-catagory">Prix</td>
                                                <td>
                                                    <div class="p-price">$<?php echo($produit->price); ?></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-catagory">Porte</td>
                                                <td>
                                                    <div class="cart-add"><?php echo($produit->porte); ?></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-catagory">Siège</td>
                                                <td>
                                                    <div class="p-stock"><?php echo($produit->siege); ?></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-catagory">Volant</td>
                                                <td>
                                                     <div class="p-stock"><?php echo($produit->volant); ?></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-catagory">Carburant</td>
                                                <td>
                                                     <div class="p-stock"><?php echo($produit->carburant); ?></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-catagory">Couleur</td>
                                                <td> <div class="p-stock"><?php echo($produit->couleur); ?></div></td>
                                            </tr>
                                            <tr>
                                                <td class="p-catagory">Transmission</td>
                                                <td>
                                                    <div class="p-code"><?php echo($produit->transmission); ?></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-catagory">Categorie</td>
                                                <td>
                                                    <div class="p-code"><?php echo($produit->categorie); ?></div>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab-3" role="tabpanel">
                                    <div class="customer-review-option">
                                        <!-- <div class="col-lg-12"> -->
                                            <h5>Commentaires</h5>
                                        <!-- </div> -->
                                        <!-- <div class="comment-option">
                                         <div class="co-item">
                                                <div class="avatar-pic">
                                                    <img src="img/product-single/avatar-1.png" alt="">
                                                </div>
                                                <div class="avatar-text">
                                                    <div class="at-rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <h5>Brandon Kelley <span>27 Aug 2019</span></h5>
                                                    <div class="at-reply">Nice !</div>
                                                </div>
                                            </div>
                                        </div> -->
                                        <div class="leave-comment mt-0 pt-3 mb-3">
                                            <h6>Lesser un Commentaire</h6>
                                            <form action="#" class="comment-form mt-2 pt-3">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <input type="text" placeholder="Votre nom">
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <input type="text" placeholder="Adresse email">
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <textarea placeholder="Messages"></textarea>
                                                        <button type="submit" class="site-btn">Send message</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Shop Section End -->

    <!-- Related Products Section End -->
    <div class="related-products spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Suggestions</h2>
                    </div>
                </div>
            </div>
            <div class="row">
            
             <?php  
                        // $indPrd = new Product();
                        $srt = 9; $pr = _onLoadProductSuggestion($srt,$bdd); if($pr != null) { 
                        for ($i = 0; $i < count($pr); $i++) { 
                        
                        $prod = $pr[$i];
             ?>
             
                <div class="col-6 col-lg-2">
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="./_bx_assoc_imgs_/_bx_assoc_imgs_/<?php echo($prod->imgPrcl)?>" alt="product image">
                            <div class="icon">
                                <i class="icon_heart_alt"></i>
                            </div>
                        </div>
                        <div class="pi-text">
                            <div class="catagory-name"><?php echo($prod->marque)?></div>
                            <a  href="?page=_product&_prd_get_cat_=<?php echo($prod->categorie)?>&_idProduct_=<?php echo($prod->id);?>">
                                <h5><?php echo($prod->model)?></h5>
                            </a>
                            <div class="product-price">
                                $<?php echo($prod->price)?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }  } ?>
            </div>
        </div>
    </div>
    <!-- Related Products Section End -->
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="../js/jquery.sumogallery.js"></script>
    <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
    <?php } ?>