<?php
     include('../js/_function.php');
     if(!isset($_SESSION['_userId_'])){ ?>
     <script>
     	const lnk = window.location.search;
	const backTo = lnk.replace(/&/g,'.', function(cb){
	   return cb;
	});
	console.log(backTo)
     	window.location.replace('https://lesmilleservices.com/?page=_signIn');
     </script>
   <?php  }else if (isset($_SESSION['_userId_'])) { 

        if(isset($_GET['_getYou_this_']) && isset($_GET['_dvd_me_']) && isset($_GET['_dvd_got_cat_'])){

            if (is_numeric($_GET['_getYou_this_']) && is_numeric($_GET['_dvd_got_cat_'])) { 
            
            $prd_info = _onLoadSingleProduct(trim($_GET['_getYou_this_']),$bdd);
        
?>
	
		
<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="icon" type="image/png" href="assets/img/favicon.png" />
	<title>L 1000 | Account</title>
	<link rel="icon" sizes="" href="../_bx_assoc_imgs_/vraieheader.png">

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    	<meta name="viewport" content="width=device-width" />

	<!-- CSS Files -->
	<link href="../js/assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="../js/assets/css/paper-bootstrap-wizard.css" rel="stylesheet" />

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<!--<link href="../js/assets/css/demo.css" rel="stylesheet" />-->
	<style>
	  .d-none{
	    opacity:0;
	  }
	</style>

	<!-- Fonts and Icons -->
        <link href="https://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
	<link href="../js/assets/css/themify-icons.css" rel="stylesheet">
	<link rel="stylesheet" href="../css/style.css" type="text/css">
	<!--<link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
	 Google Tag Manager -->

	<!-- End Google Tag Manager -->
	</head>

	<body>
	<nav class="navbar navbar-expand-lg bg-white shadow fixed-top navbar-dark">
    <div class="container algn-center">
        <a class="navbar-brand text-primary" href="https://lesmilleservices.com?page=_myShop">
            <img src="../img/a1.jpg" alt="logoHeader" class="logo-h-t">
        </a>
    </div>
</nav>
	
	    				<span class="d-none" id="id_me"><?php echo($_SESSION['_userId_'])?></span>
    					<span class="d-none" id="id_it"><?php echo($prd_info->id)?></span>
    					<span class="d-none" id="id_his"><?php echo($prd_info->categorie)?></span>
    					<span class="d-none" id="id_mail"><?php echo($_SESSION['_userEm_'])?></span>
		<!-- Google Tag Manager (noscript) -->
	<!-- <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript> -->
	<!-- End Google Tag Manager (noscript) -->
	<!-- <div class="image-container set-full-height" style="background-image: url('assets/img/paper-1.jpeg')"> -->
	    <!--   Creative Tim Branding   -->
	    <!-- <a href="https://creative-tim.com">
	         <div class="logo-container">
	            <div class="logo">
	                <img src="assets/img/new_logo.png">
	            </div>
	            <div class="brand">
	                Creative Tim
	            </div>
	        </div>
	    </a> -->

		<!--  Made With Paper Kit  -->
		<!-- <a href="https://demos.creative-tim.com/paper-kit" class="made-with-pk">
			<div class="brand">PK</div>
			<div class="made-with">Made with <strong>Paper Kit</strong></div>
		</a> -->

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
														C'est ne sont pas mes informations je veux changer de <a href="https://lesmilleservice.com/?page=_log_me_out" class="btn btn-light">compte</a>
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
		<!--   Core JS Files   -->
		<script src="../js/assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
		<script src="../js/assets/js/bootstrap.min.js" type="text/javascript"></script>
		<script src="../js/assets/js/jquery.bootstrap.wizard.js" type="text/javascript"></script>

		<!--  Plugin for the Wizard -->
		<!-- <script src="../js/assets/js/demo.js" type="text/javascript"></script> -->
		<script src="../js/assets/js/paper-bootstrap-wizard.js" type="text/javascript"></script>

		<!--  More information about jquery.validate here: https://jqueryvalidation.org/	 -->
		<script src="../js/assets/js/jquery.validate.min.js" type="text/javascript"></script>
		<footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer-left">
                        <div class="footer-logo">
                            <a href="#"><img src="../_bx_assoc_imgs_/vraiefooter.png" alt=""></a>
                        </div>
                        <ul>
                            <li>
                                <span  class="fa fa-map-marker"></span>
                                 Blvrd Kanyamuhanga,habamungu building | RDC - Goma
                            </li>
                            <li>
                                <ul>
                                    <li>
                                        <span class="fa fa-phone"></span>
                                        +243 992 913 458 <span class="fa fa-whatsapp text-success" style="font-size:18px"></span>
                                    </li>
                                    <li>
                                        <span class="fa fa-phone"></span>
                                        +243 815 864 596
                                    </li>
                                </ul>
                            </li>
                            <li>
                               <span class="fa fa-envelope"></span>
                                <em> contact@lesmilleservices.com</em>
                            </li>
                        </ul>
                        <div class="footer-social">
                            <a href="https://www.facebook.com/Les-Mille-Services-406094873225056/"><i class="fa fa-facebook"></i></a>
                            <!-- <a href="#"><i class="fa fa-instagram"></i></a> -->
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="https://www.linkedin.com/company/38093245/admin/" title="nous suivre sur linkedin" target="blank"><i class="ti-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1">
                    <div class="footer-widget">
                        <h5>Informations</h5>
                        <ul>
                            <li><a href="?page=_contact">About Us</a></li>
                            <li><a href="?page=_faqPage">Informations</a></li>
                            <li><a href="?page=_contact">Contact</a></li>
                            <!-- <li><a href="#">Serivius</a></li> -->
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="footer-widget">
                        <h5>Mon compte</h5>
                        <ul>
                            <li><a href="?page=_account">Mon compte</a></li>
                            <li><a href="?page=_commandes">Mes commandes</a></li>
                            <!-- <li><a href="#">Mode de paiement</a></li> -->
                            <li><a href="?page=_myShop">Location | Achat</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="newslatter-item">
                        <h5>Rejoignez notre Newsletter</h5>
                        <p>Recevez reguli&egrave;rement les nouvelles de nos produits</p>
                        <form action="#" class="subscribe-form" id="subscribeForm">
                            <input type="email" name="emForSubs" placeholder="Adresse mail ici ..." id="mailSub">
                            <button type="button" name="subscrib" id="onSubscib">Inscription</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-reserved">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-text">
                            
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | by <a href="#" target="_blank" class="text-primary">les 1000 Services</a>

                        </div>
                        <div class="payment-pic">
                            <!-- <img src="img/payment-method.png" alt=""> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="../js/_onSubscribe.js"></script>`
</body>



</html>
<?php } } } ?>