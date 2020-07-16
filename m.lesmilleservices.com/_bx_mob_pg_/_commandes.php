<?php

if(isset($_SESSION['_userId_'])){

?>
<style>
    td img{
        width:120px;
    }
</style>
 <!-- Breadcrumb Section Begin -->
 <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text product-more">
                        <a href="?page=home"><i class="fa fa-home"></i> Home</a>
                        <a href="?page=">Véhicules</a>
                        <span>Mes commandes</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- --------------------------------- debut pannel ------------------------------------------------>
	<div class="container mt-4 mb-4">
	    
		<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
		  <li class="nav-item">
		    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Mes commandes</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Mes favoris</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Mes achats</a>
		  </li>
		</ul>
		<div class="tab-content" id="pills-tabContent">
		<!-- -->
		  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
		     <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cart-table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th class="p-name">Nom du produit</th>
                                    <th>Prix</th>
                                    <th>Date</th>
                                    <th>Categorie</th>
                                    <th><span class="fa fa-file"></div></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 

                                $mesC = _onLoadMesCommandes($bdd);
                               #print_r($mesC);
                                 foreach ($mesC as $cmmd) {
                                // var_dump($mesC);
                            ?>
                                <tr class="border-bottom">
                                    <td class="cart-pic first-row"><img src="./_bx_assoc_imgs_/_bx_assoc_imgs_/<?php echo($cmmd->get_img()) ?>" alt="commande"></td>
                                    <td class="cart-title first-row">
                                        <h5>
                                            <span class="badge badge-primary text-uppercase"><?php echo($cmmd->get_marque()); ?></span> 
                                            <?php echo($cmmd->get_name()); ?>
                                        </h5>
                                    </td>
                                    <td class="p-price first-row">$<?php echo($cmmd->get_prix()); ?></td>
                                    <td class="p-price first-row"><?php echo($cmmd->get_date()); ?></td>
                                    <td class="total-price first-row">
                                        <span class="badge badge-warning"><?php echo($cmmd->get_categ()); ?></span>
                                    </td>
                                    <td class="close-td first-row" id="cas-<?php echo($cmmd->get_id()) ?>"><i class="ti-close"></i></td>
                                </tr>

                            <?php } ?>
                                
                            </tbody>
                        </table>
                    </div>
                    <!-- <div class="row">
                        <div class="col-lg-4 offset-lg-4">
                            <div class="proceed-checkout">
                                <ul>
                                    <li class="subtotal">Subtotal <span>$000.0</span></li>
                                    <li class="cart-total">Total <span>$000.0</span></li>
                                </ul>
                                <a href="#" class="proceed-btn">EVALUER ENCORE MON COMPTE</a>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
    <!-- Shopping Cart Section End -->
		  </div>
		  <!-- end -->
		  <!-- -->
		  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
		  
		  </div>
		  <!-- end -->
		  <!-- -->
		  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
		  
		  </div>
		  <!-- end -->
		</div>
	</div>
    <!-- ----------------------------- end pannel ------------------------ -->
    <script>
    	const tiClose = document.getElementsByTagName('i');
    	for(let ig of tiClose){
    	   ig.onclick = function(){
    	     alert(1);
    	   }
    	}
    </script>
<?php


    }else{ ?> <script>window.location.href = "?page=_signIn&_tm_out_=true";</script> <?php } ?>
