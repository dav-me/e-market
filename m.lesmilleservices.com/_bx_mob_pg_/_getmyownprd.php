<?php
     if(!isset($_SESSION['_userId_'])){ ?>
     <script>
     	const lnk = window.location.search;
	const backTo = lnk.replace(/&/g,'.', function(cb){
	   return cb;
	});
	console.log(backTo)
     	window.location.href = '?page=_signIn&_tm_out_=true&_hdlBack='+backTo;
     </script>
   <?php  }else if (isset($_SESSION['_userId_'])) { 

        if(isset($_GET['_getYou_this_']) && isset($_GET['_dvd_me_']) && isset($_GET['_dvd_got_cat_'])){

            if (is_numeric($_GET['_getYou_this_']) && is_numeric($_GET['_dvd_got_cat_'])) {
        
?>


			<style>
				.for_confirmation table{
					margin-top:2% !important;
					padding:3px 3px;
					width:100%;
					height:140px;
					/* text-align:center; */
				}
				  .btn-circle{
				    padding: 0px 3px;
				    width: 50px;
				    height: 50px;
				    border: 2px solid #ccc;
				    border-radius: 50%;
				    font-weight:bold;
				    text-align: center;
				    line-height: 50px;
				  }
				.for_confirmation table td{
					padding-left:2%;
				}
				.for_confirmation table td+td{
					text-align:left;
				}
                ul.nav li{
                    background: white;
                    /*padding-right: 10%;*/
                }
				.gi-more {
					display:inline-block;
				}
				.gi-more input{
					font-size:13px;
					padding:0;
					margin:0;
				}
    /*.modal-body{
        padding:0 0;
        margin:0 0;
        }*/
            </style>

    <div class="breacrumb-section">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-12">
    				<div class="breadcrumb-text">
    					<a href="?page=home"><i class="fa fa-home"></i> Home</a>
    					<a href="?page=_myShop"> Véhicules</a>
    					<a href="?page=_account"> mon compte</a>
    					<span>Validation commande</span>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>

    <!-- Breadcrumb Form Section Begin -->
    <section class="checkout-section spad">
    	<div class="container">
    		<form action="#" class="checkout-form">
    			<div class="row">
    				<div class="col-lg-6" style="overflow:hidden;">
    					<div class="container">
    						<div class="blog-details-inner">
    							<div class="blog-detail-title">
    								<h2>Information concernant le mode de paiement.</h2>
    								<p>Les milleservices <span>- 2 mars, 2020</span></p>
    							</div>
    							<div class="blog-detail-desc">
    								<p>
    									pour ce qui concerne le mode de paiement Nous proposons à nos Clients
    									Un mode de paiement le plus sur et sécurisé; Le paiement de nos services se fait directement dans les installations de
    									l'agence <span class="badge badge-danger">Note</span> <br> En appyant sur 
    									<span class="btn btn-default disabled">continuer</span> la réservation se fait automatiquement, Et pour la confirmation de 
    									de cette requête Nous vous prions de passer au sein de notre agence <br>
    									Pour plus d'informations :
    								</p>
    							</div>
    							<div class="blog-quote">
    								<p><span class="fa fa-phone"></span>&nbsp;<span class="badge badge-warning"> +243 974 228 949</span></p>
    								<p><span class="fa fa-phone"></span>&nbsp;<span class="badge badge-warning"> +243 815 864 596</span></p>
    								<p><span class="fa fa-phone"></span>&nbsp;<span class="badge badge-warning"> +243 974 739 246</span></p>
    								<p><b class="badge badge-primary"><span class="fa fa-envelope"></span> contact@lesmilleservices.com</b> <br><span>- les milleservices</span></p>
    								<p>" en voiture, on assure. "</p>
    							</div>
    						</div>
    					</div>
    				</div>
    				<?php 

    				$prd_info = _onLoadProdctInformation(trim($_GET['_getYou_this_']),trim($_GET['_dvd_got_cat_']),$bdd);
    			      /* var_dump($prd_info);
    				echo($prd_info->model); */

    				if (!empty($prd_info)) { 

    					?>
    					<span class="hdn" id="id_me"><?php echo($_SESSION['_userId_'])?></span>
    					<span class="hdn" id="id_it"><?php echo($prd_info->id)?></span>
    					<span class="hdn" id="id_his"><?php echo($prd_info->categorie)?></span>
    					<span class="hdn" id="id_mail"><?php echo($_SESSION['_userEm_'])?></span>

    					<div class="col-lg-6">
    						<div class="checkout-content">
    							<input type="text" placeholder="Validation de commande " readonly="true">
    						</div>
    						<div class="place-order">
    							<h4>Votre commande</h4>
    							<div class="order-total">
    								<ul class="order-table">
    									<li>Client <span class="badge badge-primary">active</span></li>
    									<li class="fw-normal">
    										Nom :
    										<span><?php echo($_SESSION['_userN_'])?></span>
    									</li>
    									<li class="fw-normal">
    										Post-nom :
    										<span><?php echo($_SESSION['_userP_'])?></span>
    									</li>
    									<li class="fw-normal">
    										E-mail :
    										<span><?php echo($_SESSION['_userEm_'])?></span>
    									</li>
    									<li class="fw-normal">
    										Phone :
    										<span><?php echo($_SESSION['_userPh_'])?></span>
    									</li>
    									<li>Commande <span class="badge badge-success">( courante )</span></li>

    									<li class="fw-normal">
    										Type :
								<span class="text-primary"><?php echo($prd_info->model);?></span>
								<span class="text-secondary pr-3"><?php echo($prd_info->marque);?></span>
    									</li>
    									<li class="fw-normal">
    										Prix :
    										<span>$ <?php echo($prd_info->price)?></span>
    									</li>

    								</ul>
    								<div class="order-btn">
    									<div class="alert alert-success hdn" >
    										<span id="wnss">Votre démande a été envoyé avec succes</span>
    									</div>
    									<div class="alert alert-danger hdn" id="wnsss">
    										<span class="fa fa-warning"></span>
    										<span>Vous ne pouvez pas commander un meme produit 2 fois</span>
    									</div>
    									<!-- href="./_bx_pages_/_onConfirm.php?_getYou_this_=<?php echo($prd_info->id) ?>&_dvd_me_=<?php echo($_GET['_dvd_me_'])?>&_dvd_got_cat_=<?php echo($prd_info->categorie) ?>" -->
    									<a
    									       href="./_bx_pages_/_onConfirm.php?_getYou_this_=<?php echo($prd_info->id) ?>&_dvd_me_=<?php echo($_GET['_dvd_me_'])?>&_dvd_got_cat_=<?php echo($prd_info->categorie) ?>" class="site-btn place-btn" id="btn-proced">
    									
    										Confirmer
    								        </a>
                                    <!-- <button 
                                        type="button" class="site-btn place-btn" id="_btn_proced_" data-toggle="modal" data-target="#confirmeforme">
                                        <span class="spinner-border hdn emG" id="_onconfirm_s"></span>
                                        Payer par virement bacaire
                                    </button> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="_mdr_">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header border-bottom-0 pt-5">
                <h4 class="modal-title">Confirmation</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                	    <!--   Big container   -->
	    <div class="container">
	        <div class="row">
		        <div class="col-sm-8 col-sm-offset-2">

		            <!--      Wizard container        -->
		            <div class="wizard-container">

		                <div class="card wizard-card" data-color="orange" id="wizardProfile">
		                    <form id="confirmform">
		                <!--        You can switch " data-color="orange" "  with one of the next bright colors: "blue", "green", "orange", "red", "azure"          -->

		                    	<div class="wizard-header text-center">
		                        	<h3 class="wizard-title">Confirmation de votre commande</h3>
									<p class="category">Nous collectons des informations pour finaliser votre commande.</p>
		                    	</div>

								<div class="wizard-navigation">
									<div class="progress-with-circle">
									     <div class="progress-bar" role="progressbar" aria-valuenow="1" aria-valuemin="1" aria-valuemax="3" style="width: 21%;"></div>
									</div>
									<ul>
			                            <li>
											<a href="#about" data-toggle="tab">
												<div class="icon-circle">
													<i class="ti-user"></i>
													<!-- <h1>1</h1> -->
												</div>
												Compte
											</a>
										</li>
			                            <li>
											<a href="#account" data-toggle="tab">
												<div class="icon-circle">
													<i class="ti-credit-card"></i>
												</div>
												Mode de Paiement
											</a>
										</li>
			                            <li>
											<a href="#address" data-toggle="tab">
												<div class="icon-circle">
													<i class="ti-map"></i>
												</div>
												Envoie
											</a>
										</li>
			                        </ul>
								</div>
		                        <div class="tab-content">
		                            <div class="tab-pane" id="about">
		                            	<div class="row">
											<h5 class="info-text"> Ces informations nous permettent de traiter votre requete.</h5>
											<div class="col-sm-12 col-sm-offset-1">
												<p>	vous êtes sur le point de confirmer votre commande : <span class="badge badge-primary">
													<?php 
							
													switch ($prd_info->categorie) {
														case '84':
														echo('Location');
														break;
														case '95':
														echo('D\'achat');
														break;   
							
														default:
								   # code...
														break;
													} 
							
													?>
												</p>
												</span><br>
												<table class="table">
													<tr class="border">
														<td>Nom du véhicule :</td>
														<td>
															<span class="text-primary"><?php echo($prd_info->model)?></span>
														</td>
													</tr>
													<tr class="border">
														<td>Marque :</td>
														<td>
															<span class="text-secondary pr-3"><?php echo($prd_info->marque)?></span>
														</td>
													</tr>
													<tr class="border">
														<td>
							
															<?php 
							
															switch ($prd_info->categorie) {
																case '84':
																echo('Location');
																break;
																case '95':
																echo('D\'achat');
																break;   
							
																default:
								   # code...
																break;
															} 
															?>                
							
															(<span class="badge badge-default">Prix</span>)</td>
															<td><span>$ <?php echo($prd_info->price)?></span></td>
														</tr>
														<tr>
															<td>Nom complet</td>
															<td><?php echo(ucfirst($_SESSION['_userN_']).'&nbsp;'.ucfirst($_SESSION['_userP_']))?></td>
														</tr>
														<tr>
															<td>Adresse emaiil</td>
															<td><?php echo($_SESSION['_userEm_'])?></td>
														</tr>
														<tr>
															<td>Téléphone</td>
															<td><?php echo($_SESSION['_userPh_'])?></td>
														</tr>
													</table> 
													<div class="col-lg">
														C'est ne sont pas mes informations je veux changer de <a href="?page=_log_me_out" class="btn btn-light">compte</a>
													</div>
											</div>
										</div>
		                            </div>
		                            <div class="tab-pane" id="account">
										<h5 class="info-text"> Choisissez votre mode de paiement </h5>
										<div class="col-lg-12 p-2" id="payment-display"></div>
		                                <div class="row">
		                                    <div class="col-sm-8 col-sm-offset-2">
		                                        <div class="col-sm-6">
		                                            <div class="choice active" data-toggle="wizard-radio" id="forvbanc">
		                                                <input type="radio" id="vbanc" name="payment" value="vbanc" checked>
		                                                <div class="card card-checkboxes card-hover-effect">
		                                                    <i class="ti-briefcase"></i>
															<p>Virement Bancaire</p>
		                                                </div>
		                                            </div>
		                                        </div>
		                                        <div class="col-sm-6">
		                                            <div class="choice" data-toggle="wizard-radio" id="forvcash">
		                                                <input type="radio" id="vcash" name="payment" value="vcash">
		                                                <div class="card card-checkboxes card-hover-effect">
		                                                    <i class="ti-id-badge"></i>
															<p>Paiement cash</p>
		                                                </div>
		                                            </div>
		                                        </div>
		                                        <!-- <div class="col-sm-4">
		                                            <div class="choice" data-toggle="wizard-checkbox">
		                                                <input type="checkbox" name="jobb" value="Develop">
		                                                <div class="card card-checkboxes card-hover-effect">
		                                                    <i class="ti-star"></i>
															<p>Develop</p>
		                                                </div>
		                                            </div>
		                                        </div> -->
		                                    </div>
		                                </div>
		                            </div>
		                            <div class="tab-pane" id="address">
										<div class="row">
											<div class="col-sm-12 mt-4 pt-4">
												<p>Les mille services vous remercie pour votre confiance et votre collaboration, vous voila à la fin de votre
												processus voici donc les dernières étapes à suivre :</p>
												<p><em class="badge badge-primary">1</em> Remplissage du formulaire de confirmation <span class="text-success fa fa-check"></span><br>
												<em class="badge badge-primary">2</em> Nous envoyé la preuve de virement au lien envoyé à votre adresse mail</p>
												<p>prière de pouvoir consulter votre boite mail pour finaliser la prochaine étape,ou toute fois vous pouvez passer dans l'installation de l'agence à Goma, pour plus d'informations veuillez concactez nos services
												client : <br><span class="fa fa-envelope"></span><em>contact@lesmilleservices.com</em><br>
												<span class="fa fa-phone"></span><em>+243 974 228 949</em> &nbsp;&nbsp; <span class="fa fa-phone"></span><em>+243 815 864 596</em></p>
												<!-- <p><em class="badge badge-default">les mille services SARL</em></p> -->
											 </div>
											 <div class="col-sm-12" id="out-mssg">
												 
											</div>
										</div>
		                            </div>
		                        </div>
		                        <div class="wizard-footer">
		                            <div class="pull-right">
		                                <input type='button' class='btn btn-next btn-fill btn-warning btn-wd' name='next' value='Next' />
		                                <input type='button' class='btn btn-finish btn-fill btn-warning btn-wd' name='finish' value='Finish' id="finish" />
		                            </div>

		                            <div class="pull-left">
		                                <input type='button' class='btn btn-previous btn-default btn-wd' name='previous' value='Previous' />
		                            </div>
		                            <div class="clearfix">
									</div>
		                        </div>
		                    </form>
		                </div>
		            </div> <!-- wizard container -->
		        </div>
	    	</div><!-- end row -->
		</div> <!--  big container -->

	    <!-- <div class="footer">

	        <div class="container text-center">
	            Made with <i class="fa fa-heart heart"></i> by <a href="https://www.creative-tim.com">Creative Tim</a>. Free download <a href="https://www.creative-tim.com/product/paper-bootstrap-wizard">here.</a>
	        </div>
	    </div>
		<div class="fixed-plugin">
			<div class="dropdown open">
				<a href="#" data-toggle="dropdown">
					<i class="fa fa-cog fa-2x"> </i>
				</a>
				<ul class="dropdown-menu">
					<li class="header-title">Examples</li>
					<li class="active">
						<a href="wizard-create-profile.html">
						   <img src="assets/img/wizard-create-profile.png">
						   Create Profile
						</a>
					</li>
					<li>
						<a href="wizard-find-desk.html">
						   <img src="assets/img/wizard-find-desk.png">
						   Find Desk
						</a>
					</li>
					<li>
						<a href="wizard-list-place.html">
						   <img src="assets/img/wizard-list-place.png">
						   List Your Place
						</a>
					</li>
					<li class="header-title">Colors</li>
					<li class="adjustments-line">
						<a href="javascript:void(0)" class="switch-trigger">
							<div class="text-center">
								<span class="badge filter badge-blue" data-color="blue"></span>
								<span class="badge filter badge-azure" data-color="azure"></span>
								<span class="badge filter badge-green" data-color="green"></span>
								<span class="badge filter badge-orange active" data-color="orange"></span>
								<span class="badge filter badge-red" data-color="red"></span>
							</div>
							<div class="clearfix"></div>
						</a>
					</li>
				   <li class="tutorial">
						<div class="text-center">
							<a href="documentation/elements.html" target="_blank" class="btn btn-default btn-fill btn-block">Documentation</a>
						</div>
					</li>
					<li class="license">
						Personal License
						<div class="text-center">
							<a href="https://www.creative-tim.com/product/paper-bootstrap-wizard" target="_blank" class="btn btn-info btn-fill btn-block">Download, it's free!</a>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div> -->

            </div>
    </div>
</div>
     
            
    <script>
	const btnProced = document.getElementById('btn-proced');
	btnProced.onclick = function(){
	const lnkDir = window.location.search;
	const ln = lnkDir.substring(lnkDir.indexOf('&'));
	window.location.replace('_bx_pages_/_onConfirm.php/);
	   console.log(ln)
	}
    </script>
<?php   
}else{ 
	?>
	<div class="container col-lg-6 p-5">
		<div class="alert alert-warning col-lg text-center">
			<div class="container">
				<span class="fa fa-warning"></span>
				<span>Une erreure s'est produite; difficile de traiter votre requete </span>
				<span class="pl-5"><a href="?page=_myShop" class="btn btn-primary">Try again</a></span>
			</div>
		</div>
	</div>
<?php
}
?>
</div>
</form>
</div>
</section>

<?php       
}

}else{
	?>
	<div class="container col-lg-8 p-5">
		<div class="alert alert-warning col-lg">
			<div class="container">
				<span class="fa fa-warning"></span>
				<span>Une erreure s'est produite; difficile de traiter votre requete </span>
				<span class="pl-5"><a href="?page=_myShop" class="btn btn-primary">Try again</a></span>
			</div>
		</div>
	</div>

	<?php

}
}
// }else{  header("location:?page=_signIn&_tm_out_=true");} 
?>

