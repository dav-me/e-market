<?php 
//https://lesmilleservices.com/?page=_verify-mail-me&tkn_=090d80727ba2051557f776b023c20a7f&cmpl=1591257214&em=davidmened@gmail.com&id_rec=1
  if(isset($_GET['tkn_']) && isset($_GET['cmpl']) && isset($_GET['em'])  && isset($_GET['id_rec'])){
    $tkn = $_GET['tkn_'];
    $email = $_GET['em'];
    $idUser = $_GET['id_rec'];
    $cb = _onVerifyMeThenLogIn($tkn,$email,$idUser,$bdd);
        switch ($cb) {
            case NULL:
               echo('<div class="container mt-5 pt-5 shadow border">
               <div class="col-lg-12 justify-content-center text-center">
                 <div class="alert alert-danger col-lg-8">
                    Nous n\'arrivons pas à vérifier votre compte
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
            case 200:
                ?>

<!-- note appropriate to be done -->

<div class="container">
 <div class="col-lg-12 justify-content-center">
   <div class="alert alert-success col-lg-8">
      <h4>Compte : vérification réussie</h4>
      <h6>Votre session est déjà connectée</h6>
      Vous pouvez à présent Vous connecter et profiter des meilleur des nos services
      <span class="fa fa-check"></span> Faites à present vos réservations;
   </div>
   <div class="col-lg-12">
 <!-- Related Products Section End -->
 <div class="related-products spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- <div class="section-title"> -->
                        <h2>Suggestions</h2>
                        Cliquer sur le nm pour le détail de la voiture
                    <!-- </div> -->
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
                
            echo('<div class="container">
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
                
            default:
                echo('by davidmened@gmail.com');
            break;
        }
  }else{
 
 ?>
 <div class="container">
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
<?php 

function _onVerifyMeThenLogIn($tkn,$email,$idUser,$bdd){

    $req = $bdd->prepare('SELECT * FROM _customer_ WHERE _cst_id = ? AND _cst_tkn = ?  AND _cst_mail_ = ?');
    $req->execute([$idUser,$tkn,$email]);
    $req = $req->fetch();

    switch ($req['_cst_isActivated']) {
        case 0:
            if(is_numeric($req['_cst_id'])){
                $c = $bdd->prepare('UPDATE _customer_ SET _cst_isActivated = ? WHERE _cst_id = ? AND _cst_tkn = ?  AND _cst_mail_ = ?');
                if($c->execute([1,$idUser,$tkn,$email])){
                    $myCustomer = new Customer($req['_cst_id'],$req['_cst_fst_name_'],$req['_cst_lst_name_'],$req['_cst_mail_'],$req['_cst_phone_']);
                    _getMeIn($myCustomer);
                    return 200;
                }else{
                    return NULL;
                }
            }else if(empty($req['_cst_id'])){
                return 404;
            }
        break;
        case 1:
            return NULL;
        break;
        
        default:
           return 404;
        break;
    }
    
}

?>