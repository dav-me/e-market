<?php 
//https://lesmilleservices.com/?page=_verify-mail-me&tkn_=090d80727ba2051557f776b023c20a7f&cmpl=1591257214&em=davidmened@gmail.com&id_rec=1
  if(isset($_GET['tkn_']) && isset($_GET['cmpl']) && isset($_GET['em'])  && isset($_GET['id_rec'])){
    $tkn = $_GET['tkn_'];
    $email = $_GET['em'];
    $idUser = $_GET['id_rec'];
    $cb = _onVerifyMeThenLogIn($tkn,$email,$idUser,$bdd);
        switch ($cb) {
            case NULL:
               echo('<div class="container mt-5 pt-5 mb-5 pb-5 shadow border justify-content-center">
                <div class="col-lg-12">
                   <h2><span class="fa fa-warning text-warning"></span> 500 Error</h2> 
               	   <p>Nous n\'arrivons pas à vérifier votre compte<p>
                </div>
               <div class="col-lg-12 justify-content-center">
                 <div class="alert alert-default col-lg-8">
                  <span class="fa fa-warning"></span>  Nous n\'arrivons pas à vérifier votre compte
                 </div>
                 <div class="col-lg-8">
                 <p>Si le problème persiste connectez vous, ou crée un nouveau compte</p>
                    <div class="group-button">
                      <a href="?page=_signIn" class="btn btn-primary">Connexion</a>
                      <a href="?page=_signUp" class="btn btn-info">Crée un compte</a>
                    </div>
                 </div>
               </div>
              </div>');
            break;
            case 200:
                ?>

<!-- note appropriate to be done -->

<div class="container mt-5">
 <div class="col-lg-12 justify-content-center">
   <div class="alert alert-success col-lg-12">
      <h4><span class="fa fa-warning"></span> Compte : vérification réussie</h4>
   </div>
   <div class="col-lg-12 pb-3">
      <h6>Votre session est déjà connectée</h6>
      Vous pouvez à présent Vous connecter et profiter des meilleur des nos services
      <p><span class="fa fa-check"></span> Faites à present vos réservations;</p>
   </div>
   <div class="col-lg-12 shadow mt-5 mb-5 pt-3">
 <!-- Related Products Section End -->
 <div class="related-products spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title"> 
                        <h2>Suggestions</h2>
                        Cliquez sur le nom pour le détail de la voiture
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
   </div>
 </div>
</div>
            

                <?php
            break;
            case 404:
                
            echo('<div class="container mt-5 mb-5">
                <div class="col-lg-12 justify-content-center">
                  <div class="alert alert-warning col-lg-8">
                    <span class="fa fa-warning"></span> Vos informations contiennent des erreurs
                  </div>
                  <div class="col-lg-8">
                     <div class="group-button">
                       <a href="?page=_signIn" class="btn btn-primary">Connexion</a>
                       <a href="?page=_signUp" class="btn btn-info">Crée un compte</a>
                     </div>
                  </div>
                </div>
               </div>');
            break;
            case 300:
            echo('
            <div class="container mt-5 pt-5 mb-5 pb-5 shadow border justify-content-center">
                <div class="col-lg-12">
                   <h2><span class="fa fa-warning text-warning"></span> 300 Error</h2> 
               	   <p>Nous n\'arrivons pas à vérifier votre compte<p>
                </div>
               <div class="col-lg-12 justify-content-center">
                 <div class="alert alert-default col-lg-8">
                  <span class="fa fa-warning"></span>  Ce compte a déjà été confirmer
                 </div>
                 <div class="col-lg-8">
                 <p>connectez vous et faites vos commandes</p>
                    <div class="group-button">
                      <a href="?page=_signIn" class="btn btn-primary">Connexion</a>
                      <a href="?page=_signUp" class="btn btn-info">Crée un compte</a>
                    </div>
                 </div>
               </div>
              </div>');
            break;
                
            default:
                echo(' <div class="container mt-5 mb-5">
   <div class="col-lg-12">
      <div class="alert alert-warning">
        <span class="fa fa-warning"></span>
        R u a funcking guy what r u doing here <p>by davidmened@gmail.com</p>
      </div>
   </div>
 </div>');
            break;
        }
  }else{
 
 ?>
 <div class="container mt-5 mb-5">
   <div class="col-lg-12">
      <div class="alert alert-warning">
        <span class="fa fa-warning"></span>
        Désolé Vous ne devrez pas être ici <p>by davidmened@gmail.com</p>
      </div>
   </div>
 </div>
 <?php
  
  }

?>
