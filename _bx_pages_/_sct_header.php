    <style type="text/css">
	.mail-service a{
		text-decoration: none;
		color: black;
	}
	.mail-service a:hover{
		text-decoration: none;
		color: #3498db;
	}
    </style>
    <!-- Header Section Begin -->
    <header class="header-section" >
        <div class="col-lg-12 bg-dark text-center">
          <small class="text-white"><b>Nous sommes la réference de vente et location des véhicules en RDC</b></small>
        </div>
        <div class="header-top shadow">
            <div class="container">
                <div class="ht-left">
                    <!-- Envoyer un mail a l'admin -->
                    <div class="mail-service">
                    	<a href="mailto:contact@lesmilleservices.com">
                        <i class=" fa fa-envelope"></i>
                        contact@lesmilleservices.com
                        </a>
                    </div>
                    <!-- Numero de Telephone -->
                    <div class="phone-service">
                        <i class=" fa fa-phone"></i>
                        +243 992 913 458 <span class="fa fa-whatsapp"></span>
                    </div>
                </div>
                    <!-- Verification Login et mot de passe -->
                <div class="ht-right">
                    <?php if (isset($_SESSION['_userId_'])) { ?>
                        <!-- <div class=""> -->
                            <a href="#" class="login-panel text-center ml-3" id="_pannelSession_">
                                <span class="round-init"><?php echo(get_user_session()); ?></span>
                            </a>
                        <!-- </div> -->
                   <?php } else { ?>
                        <a href="#" class="login-panel fade-a" data-toggle="modal" data-target="#connectUser">
                            <i class="fa fa-user"></i>
                            Connexion
                        </a>
                    <?php } ?>
                    <div class="top-social">
                        <a href="https://www.facebook.com/Les-Mille-Services-406094873225056/" title="nous suivre sur facebook" target="blank"><i class="ti-facebook"></i></a>
                        <a href="#" title="nous suivre sur twitter" target="blank"><i class="ti-twitter-alt"></i></a>
                        <a href="https://www.linkedin.com/company/38093245/admin/" title="nous suivre sur linkedin" target="blank"><i class="ti-linkedin"></i></a>
                        <!-- <a href="#" title="nous suivre sur pinterest" target="blank"><i class="ti-pinterest"></i></a> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
          <div class="inner-header">
            <div class="row">
                <!--  -->
               <div class="col-lg-3">
                 <div class="col-lg-12">
                   <img src="./_bx_assoc_imgs_/1.jpeg" alt="logo header" title="L1000" class="w-100">
                   <p id="date-content"></p>
                 </div>
               </div>
               <!--  -->
               <!--  -->
               <div class="col-lg-6">
                   <!-- start row -->
                 <div class="row">
                   <div class="col-lg-12">
                     <!-- <b class="pb-2 text-white shadow">Faites une Recherche</b> -->
                     &nbsp;
                   </div>
                   <div class="col-lg-12">
                     <div class="form-group">
                        <b class="text-white"><label for="_keySrch_">Nom du véhicule</label></b>
                        <div class="input-group">
                            <input type="text" class="form-control w-75" id="_keySrch_" name="_keySrch_" placeholder="Entre le nom du véhicule ...">
                            <span class="input-group-append">
                                <button type="button" class="btn btn-primary btn-flat" id="_btn_adv_srch_">
                                    <span class="fa fa-search"></span>
                                </button>
                            </span>
                        </div>
                     </div>
                   </div>
                 </div>
                 <!-- end row -->

                 <!-- start row -->
                 <!-- <div class="dropdown show">
                       <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           Faire une recherche avancée
                       </a>
                   </div> -->
                   <div class="text-white col-lg mb-2 mt-2 underlined cursor-p" id="advanced-search-btn"><b>Recherche spécifique</b><span class="ml-4 fa fa-caret-down"></span></div>
                    <div class="col-lg-12 rounded border p-1 bg-light px-4 pb-3" id="advanced-search" style="display:none">
                    <div class="row">
                        <div class="col-lg-4">
                          <small><label for="srch_marque">Marque</label></small>
                          <select name="srch_marque" id="srch_marque" class="form-control form-control-sm">
                          <option value="nospec">Selectionner</option>
                          <option value="TOYOTA">TOYOTA</option>
                          <option value="AUDI">AUDI</option>
                          <option value="CITROEN">CITROEN</option>
                          <option value="MERCEDES BENZ">MERCEDES BENZ</option>
                          <option value="MITSUBISHI">MITSUBISHI</option>
                          <option value="NISSAN">NISSAN</option>
                          <option value="OPEL">OPEL</option>
                          <option value="SUBARU">SUBARU</option>
                          <option value="SUZUKI">SUZUKI</option>
                          <option value="MAZDA">MAZDA</option>
                          <option value="HYUNDAI">HYUNDAI</option>
                          <option value="VOLVO">VOLVO</option>
                          <option value="BMW">BMW</option>
                          <option value="VW">VW</option>
                          <option value="FORD">FORD</option>
                          <option value="KIA MOTORS">KIA MOTORS</option>

                          </select>
                        </div>
                        <div class="col-lg-4">
                            <small><label for="srch_wheel">Volant</label></small>
                            <select name="srch_wheel" id="srch_wheel" class="form-control form-control-sm">
                            <option value="nospec">Selectionner</option>
                            <option value="left">Gauche</option>
                            <option value="right">Droit</option>
                            </select>
                        </div>
                        <div class="col-lg-4 w-100">
                            <small><label for="srch_enrg">Carburant</label></small>
                            <select name="srch_enrg" id="srch_enrg" class="form-control form-control-sm">
                            <option value="nospec">Selectionner</option>
                            <option value="essence">Essence</option>
                            <option value="diesel">Diesel</option>
                            <option value="hybride">Hybride</option>
                            </select>
                        </div>
                        <div class="col-lg-4 w-100">
                            <small><label for="srch_prc">Categorie Prix</label></small>
                            <select name="srch_prc" id="srch_prc" class="form-control form-control-sm">
                            <option value="nospec">Selectionner</option>
                            <option value="pr1">1000$ - 3000$</option>
                            <option value="pr2">3000$ - 4500$</option>
                            <option value="pr3">4500$ - 7500$</option>
                            <option value="pr4">7500$ - 12000$</option>
                            <option value="pr5">12000$ - 15000$</option>  
                            </select>
                        </div>
                        <div class="col-lg-4 w-100">
                            <small class="w-100"><label for="srch_place">Lieux</label></small>
                            <select name="srch_place" id="srch_place" class="form-control form-control-sm">
                              <option value="nospec">Selectionner</option>
                              <option value="gom">Goma</option>
                              <option value="kin">Kinshasa</option>
                              <option value="kis">Kisangani</option>
                              <option value="lush">lubumbashi</option>
                              <option value="bkv">Bukavu</option>
                            </select>
                        </div>
                        <div class="col-lg-4">
                          <small><label for="keysearch">Mot de recherche</label></small>
                          <input type="text" name="keysearch" id="keysearch" class="form-control form-control-sm">
                        </div>
                        <div class="col-lg-4">
                          <small><label for="srch_portes">N<sup>bre</sup> des portes</label></small>
                          <input type="number" class="form-control form-control-sm">
                        </div>
                        <div class="col-lg-8 pt-2 text-center">
                        <!-- <small><label for="btn-search">&nbsp;</label></small> -->
                        <button type="submit" class="btn btn-secondary w-100 btn-sm mt-4" id="btn-search" value="Chercher">
                            <span class="fa fa-search"></span> Chercher
                        </button>
                        </div>
                 </div>
                 <!-- end row -->
                    </div>
               </div>
               <!--  -->
               <!--  -->
               <div class="col-lg-3" id="ctn" style="min-height:200px">
                    <?php 
                        if(!isset($_SESSION['_userId_']) || isset($_SESSION['_userId_'])){
                    ?>
                    <!--  -->
                    <div class="col shadow pt-2 border shadow bg-white rounded" id="fade-signup">
                        <a href="?page=_signUp">
                            <b class="text-primary"><span class="ti-user h3 text-primary"></span>&nbsp;Créer un compte</b>
                            <p><small>Ceci ne prendra que 5 secondes</small></p>
                        </a>
                    </div>
                    <!--  -->
                    <?php
                        // }else{
                        }
                    ?>
                    <div class="col shadow pt-2 border shadow bg-white rounded mt-2">
                        <a href="?page=_signUp" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">
                            <b class="text-primary"><img class="" width="30px" src="./_bx_assoc_imgs_/_bx_banners_/index-01.png">&nbsp;&nbsp;Favoris</b>
                            <p>Retrouvez la liste de vos favoris</p>
                        </a>
                    </div>
                    <?php
                        // }
                    ?>
                    <!-- <div class="col shadow pt-2">
                        <a href="?page=_signUp">
                            <b class="text-primary"> <span class="fa fa-envelope"></span> &nbsp;&nbsp;Service Client</b>
                            <p>Vous désirez quelle sorte de voiture; je veux la chercher pour vous</p>
                        </a>
                    </div> -->
               </div>
               <!--  -->
            </div>
          </div>
        </div>
        <!-- <div class="container bg-danger">
            <div class="inner-header">
                <div class="row">          
                    <div class="col-lg-2 col-md-2">
                        <div class="logo">
                            <a href="?page=home">
                                <img src="_bx_assoc_imgs_/vraieheader.png" alt="" style="margin-top:-8px">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <div class="advanced-search" id="advancedsrch">
                            <button type="button" class="category-btn">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    Véhicule
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </button>
                            <div class="input-group">
                                <form action="#" name="advancedSrch" id="_adv_srch_" method="POST">
                                    <input type="text" placeholder="Recherche " id="_keySrch_" name="_keySrch_">
                                    <button type="button" id="_btn_adv_srch_"><i class="ti-search"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 text-center col-md-3">
                        <ul class="nav-right">
                            <?php if(isset($_SESSION['_userId_'])){ ?>
                            <li class="heart-icon">
                                <a href="#">
                                </a>
                            </li>
                          <?php }else{ ?>
                            <li class="heart-icon">&nbsp;</li>
                          <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- start of navbar ---------------------------------------------------------->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow sticky-top sticky">
           <div class="container">
                <div class="col-sm-2 styckyimg addaptator">
                    <a class="navbar-brand bg-dark text-center justify-content-center w-100 shadow" href="?page=home">
                        <img src="./_bx_assoc_imgs_/vraiefooter.png" alt="logo header" title="L1000" class="w-75">
                    </a>
                </div>
                <!-- form search -->
                <form class="form-inline sm-none col-9">
                    <div class="input-group input-group-sm">
                        <!-- <div class="input-group-prepend">
                            <span class="input-group-text bg-warning" id="basic-addon1">&nbsp;&nbsp;Recheche</span>
                        </div> -->
                        <input type="text" name="keysearchmobile" id="keysearchmobile" class="form-control form-control pill-l pl-4" placeholder="Mot clé ..." aria-label="Mot clé ..." aria-describedby="basic-addon1" required>
                        <span class="input-group-append">
                            <button class="btn btn-warning btn pill-r" type="button" id="btn-search-mob">
                                <span class="fa fa-search"></span>
                            </button>
                        </span>
                    </div>
                </form>
                <!--  end form search -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <nav class="collapse navbar-collapse overflow-hidden pl-cst-25" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item-cst pr-5 text-white text-uppercase  hov"><a href="?page=home"> <span class="fa fa-home"></span>&nbsp;acceuil</a></li>
                        <li class="nav-item-cst pr-5 text-white text-uppercase  hov"><a href="?page=_listingLease">En location</a></li>
                        <li class="nav-item-cst pr-5 text-white text-uppercase  hov"><a href="?page=_listingSale">En vente</a></li>
                        <li class="nav-item-cst pr-5 text-white text-uppercase  hov"><a href="?page=_operation_bata">Interchengeable</a></li>
                        <li class="nav-item-cst pr-5 text-white text-uppercase  cab-down hov">
                            <a href="#">pages <span class="fa fa-caret-down pl-4"></span></a>
                            <div class="dropdown-cntnt position-absolute py-2 bg-dark shadow">
                                <a class="text-white dropdown-item" href="?page=_signIn">Connexion</a>
                                <a class="text-white dropdown-item" href="?page=_signUp">Créer un compte</a>
                                <a class="text-white dropdown-item" href="?page=_contact">contact</a>
                            </div>
                        </li>
                    </ul>
                </nav>
           </div>
        </nav>
        <!-- end of navbar ------------------------------------------------------------->
    </header>
    <!-- Header End -->

    <!-- popUp connection -->
    <div class="modal fade" id="connectUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header border-bottom-0">
                    <!-- <h4 class="modal-title" id="myModalLabel">Connexion</h4> -->
                    <button type="button" class="close text-right" data-dismiss="modal" aria-hidden="true">
                            &times;
                    </button>
                </div>

                <!-- Boite de conexion -->
                <div class="modal-body">
                    <div class="container">
                    <div class="login-form">
                        <form action="#" id="formConn">
                            <h2 class="text-left">Connexion</h2>
                            <div class="group-input">
                                <label for="username">Numero de telephone ou E-mail</label>
                                <input type="text" id="username" name="username" placeholder="ex: mail@kbx.domain">
                            </div>
                            <div class="group-input">
                                <label for="pass">Mot de passe</label>
                                <input type="password" id="pass" name="pass">
                            </div>
                            <div class="group-input gi-check">
                                <div class="gi-more">
                                    <label for="save-pass">
                                    Enregistrer le mot de passe
                                        <input type="checkbox" id="save-pass">
                                        <span class="checkmark"></span>
                                    </label>
                                    <a href="#" class="forget-pass">J'ai oublier le mot de passe</a>
                                </div>
                            </div>
                            <div class="switch-login">
                                <a href="?page=_signUp" class="or-login">Ou cre&eacute;r un compte, C'est gratuit</a>
                                <p class="text-danger mt-2 hidden" id="tooltip_p">
                                    <span class="fa fa-warning"></span>
                                    <small id="tooltip"></small>
                                </p>
                            </div> 
                        </form>
                    </div>
                    </div>
                </div>


                <div class="modal-footer">
                    <button type="reset" class="btn btn-default" data-dismiss="modal">
                        Annuler
                    </button>
                    <button type="button" class="site-btn login-btn text-white" id="btn_conn">
                        <span class="spinner-border hidden emG" id="btn_conn_anim"></span>
                        <span class="" id="btn_conn_anim_">Connecter</span>
                    </button>
                </div>


            </div><!-- /.modal-content -->
        </div><!-- /.modal -->
    </div>
    <!-- end popup connection -->
                        
    <?php include('_sct_navWhenSession.php'); ?>
    <?php include('_onSearchingPanel.php'); ?>
    
    <script src="js/_onConnectingCustomer.js"></script>
<script>
    (function(){
        let ct = document.getElementById('advanced-search');
        document.getElementById('btn-search-mob').onclick = function(){
            const wd = document.getElementById('keysearchmobile').value;
            if(wd !== ''){
                window.location.replace('?page=_onSearchingMyCar&get_it_mob='+wd);
                // return false;
            }
        }
        document.getElementById('advanced-search-btn').onclick = function(){
            const ct = document.getElementById('advanced-search');
            if(ct.style.display === 'none'){ct.style.display = 'block';}else{ct.style.display = 'none';}  
        }
        document.getElementById('_keySrch_').onkeyup = function() { // Effectue une requête et récupère les résultats

            if (this.value != '' || this.value != ' ') {
                var mo = document.getElementById('_onSrch_');
                var xhr = new XMLHttpRequest();
                xhr.open('GET', 'js/_onSearch.php?word='+ encodeURIComponent(this.value));
                xhr.onreadystatechange = function() {
                    if (xhr.readyState == 4 && xhr.status == 200) {
                        mo.style.display = 'block';
                        // console.log(xhr.response);
                        // mo.classList.add('show');
                        setTimeout(function(){
                            mo.innerHTML = xhr.response;
                        }, 200);
                    }
                };
                xhr.send(null);
            }else{
                mo.style.display = 'none';
            }
        };
        document.getElementById('_btn_adv_srch_').onclick = function(){
            var keyWord_ = document.getElementById('_keySrch_').value;
            if (keyWord_ != '') {
                window.location.href = '?page=_onSearchingMyCar&get_it='+keyWord_;
            }
  };
     if(document.getElementById('fade-signup')){
        setInterval(() => {
            $('#fade-signup').toggle();
            // alert(document.getElementById('ctn').clientHeight)
        }, 7000);
     }
    let d = new Date();
    const dtcont = document.getElementById('date-content');
    const event = new Date();
    const options = { weekday: 'long', year: 'numeric', month: 'short', day: 'numeric' };
    console.log(event.toLocaleDateString('fr-FR', options)+'---'+event.toLocaleTimeString('fr-FR',{hour12:false}));
    dtcont.innerHTML = event.toLocaleDateString('fr-FR', options) + ' ' + event.toLocaleTimeString('fr-FR',{hour12:false});

alert(getDeviceType());
    })();
</script>
    