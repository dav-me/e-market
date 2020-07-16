<style>
    li.active_p a{
        background: #1a82db;
    }
</style>
<?php 

if(!isset($_SESSION['_userId_'])){

?>
 <!-- Breadcrumb Section Begin -->
 <!-- <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="?page=home"><i class="fa fa-home"></i> Home</a>
                        <a href="#"> Pages</a>
                        <span>Connexion</span>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Breadcrumb Form Section Begin -->

    <?php
    
        if (isset($_GET['_tm_out_']) && $_GET['_tm_out_'] == 'true') {
    ?>
    
        <div class="content mt-3">
            <div class="alert alert-danger text-center">
                <span class="fa fa-warning"></span> <span>Vous devez d'abord vous connecter avant de pouvoir continuer ! Merci</span>
            </div>
        </div>

    <?php

        }

    ?>

    <!-- Register Section Begin -->
    <div class="register-login-section pt-1 px-0 hs">
        <div class="content">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                <div class="login-form">
                        <form id="formConnexion">
                            <h4 class="text-left">Connexion</h4>
                            <div class="group-input">
                                <label class="h6" for="username">E-mail</label>
                                <input class="form-control form-control-md" type="text" id="username-cnnx" name="username" placeholder="ex: mail@kbx.domain">
                            </div>
                            <div class="group-input">
                                <label for="pass">Mot de passe</label>
                                <input type="password" id="pass-cnnx" name="pass" class="form-control form-control-md">
                                <!--<b class="fa fa-eye"></b>-->
                                <b class="text-danger d-none"><span class="fa fa-warning"></span> ceci ne ressamble pas à une adresse mail ou un nu,ero de téléphone</b>
                            </div>
                            <div class="group-input gi-check">
                                <div class="gi-more text-left">
                                    <!-- <label for="save-pass">
                                    Enregistrer le mot de passe
                                        <input type="checkbox" id="save-pass-">
                                        <span class="checkmark"></span>
                                    </label> -->
                                    <a href="#" class="forget-pass mb-2">J'ai oublier le mot de passe</a>
                                    <a href="?page=_signUp" class="forget-pass">Ou cre&eacute;r un compte, C'est gratuit</a>
                                </div>
                            </div>
                            <!-- <div class="switch-login or-login ">
                                <a href="?page=_signUp" class="border-bottom">Ou cre&eacute;r un compte, C'est gratuit</a>
                                <p class="text-danger mt-2" id="out-error-message"></p>    
                            </div>  -->
                            <button type="button" class="site-btn login-btn text-white" id="btn-connexion">
                               Connexion
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Register Form Section End -->
    <script src="js/_onConnectingCustomer_.js"></script>

    <?php } else{ ?> <script>window.location.href = "?page=_myShop";</script> <?php } ?>
                    
               