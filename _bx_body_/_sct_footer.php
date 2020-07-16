<?php 
  $bo = !_test_if_already_need_ass($bdd);
?>
<footer class="footer-section col-12 w-100">
        <div class="container">
        <!-- <a href="#" class="fa back-to-top bg-primary text-white" ><i class="fa fa-chevron-up h4"></i></a> -->
            <!-- chat with me -->
            <div class="p-1 fa back-to-top col-lg-3 col-11 bg-transparent bg-danger">
                
                <div class="d-none col-lg-12 pr-0 chat-content" aria-hidden="true" id="chat-content">
                    <?php if(!$bo){ ?>
                        <!-- formulaire start -->
                        <div class="card border-bottom-0 rounded-0 float-right shadow" style="width: 18rem;">
                        <div class="card-title bg-light border-bottom p-2">
                          <span>
                            <!-- <img src="./_bx_assoc_imgs_/_bx_banners_/thumb.png" width="45" alt="AsS"> -->
                            <h6> <span class="fa fa-comments display-4 text-danger mr-1"></span>Télé-assistance <span class="pt-2 float-right ml-4 pr-2 fa fa-close hoverOn close-chat"></span></h6>
                            <span class="text-muted ml-4"><small>Nous vous repondrerons bientôt</small></span>
                          </span>
                        </div>
                        <div class="card-body px-2 pt-1" id="content-card">
                            <form id="need-assistance" onsubmit="needAssistance() return false">
                               <div class="form-group">
                                 <label for="nom-ass"><span class="fa fa-user-circle"></span> Nom<span class="text-danger">*</span></label>
                                 <input type="text" name="nomass" class="form-control form-control-sm" id="nom-ass" required>
                               </div>
                               <div class="form-group">
                                 <label for="mail-ass"><span class="fa fa-envelope"></span> E-mail<span class="text-danger">*</span></label>
                                 <input type="email" name="emailass" class="form-control form-control-sm" id="mail-ass" required>
                               </div>
                               <div class="form-group">
                                 <label for="phone-ass"><span class="fas fa-phone"></span> Téléphone<span class="text-danger">*</span></label>
                                 <input type="number" name="teleass" class="form-control form-control-sm" id="phone-ass" required>
                               </div>
                               <div class="form-group">
                                 <label for="text-ass"><span class="fas fa-file"></span> Message<span class="text-danger">*</span></label>
                                 <!-- <input type="number" class="form-control form-control-sm" id="mail-ass"> -->
                                 <textarea name="textass" id="text-ass" cols="30" rows="3" class="form-control form-control" required></textarea>
                               </div>
                               <div class="form-group">
                                 <button type="submit" class="btn btn-primary btn-sm w-100" id="first-ass">
                                   <span class="fa fa-send"></span> &nbsp;Envoyer
                                 </button>
                               </div>
                            </form>
                        </div>
                        </div>
                        <!-- formulaire end -->
                        <script>
                           function needAssistance(){
                                return false;
                                document.getElementById('first-ass').disabled = true;
                                const div = document.getElementById('content-card');
                                const formd = document.getElementById('need-assistance');
                                const mess = document.createElement('div');
                                mess.id = 'div-done';
                                mess.className = 'col-lg-12';
                                mess.innerHTML = '<h4>Message envoyé</h4><h6>Nous comptons vous repondre le plus tôt possible</h6>';
                                cont xhr = new XMLHttpRequest();
                                xhr.open('POST', './js/_onSubmit.php', false);
                                xhr.onreadystatechange = function(){
                                    if(xhr.readyState === 4 && xhr.status === 200){
                                        if(xhr.response === '200'){
                                            formd.classList.add('d-none');
                                            if(!document.getElementById('div-done')){
                                                div.appendChild(mess);
                                            }
                                        }else{
                                            alert(xhr.responseText)
                                        }
                                    }
                                }
                                xhr.send(formd);
                               
                           }
                        </script>
                    <?php }else{ ?>
                    <!-- -------------------------- -->
                    <div class="card border-bottom-0 rounded-0 float-right shadow" style="width: 18rem;">
                        <div class="card-title bg-light border-bottom p-2">
                          <span>
                            <!-- <img src="./_bx_assoc_imgs_/_bx_banners_/thumb.png" width="45" alt="AsS"> -->
                            <h6> <span class="fa fa-comments display-4 text-danger mr-1"></span>Télé-assistance <span class="pt-2 float-right ml-4 pr-2 fa fa-close hoverOn close-chat"></span></h6>
                            <span class="text-muted ml-4"><small>Nous vous repondrerons bientôt</small></span>
                          </span>
                        </div>
                        <!-- body -->
                        <div class="card-body px-1 pt-1 overflow-auto card-mssg-content" style="max-height:300px" id="card-mssg-content">
                            <?php #include('./_bx_pages_/_getMessage.php') ?>
                            <div class="col-12 text-center">
                                <h4><span class="spinner-grow spinner-grow-md"></span></h4>
                                <h6 class="text-muted">Services clients : que puis-je pour vous ? </h6>
                            </div>
                        </div>
                        <!-- end body -->
                        <!-- input chat -->
                        <div class="card-footer p-0 px-1 mt-2 py-2">
                            <form id="ass-contact" method="POST">
                                <input type="text" class="client" name="client" value="<?php echo(@getUserIP()) ?>" hidden>
                                <div class="input-group input-group-sm">
                                    <input type="text" name="assval" class="form-control msg-value" id="msg-value">
                                    <span class="input-group-append">
                                        <button class="btn btn-primary btn-send" type="button">
                                            <span class="fa fa-send"></span>
                                        </button>
                                    </span>
                                </div>
                            </form>
                        </div>
                        <!-- end input chat -->
                    </div>
                    <!-- -------------------------- -->
                    <?php } ?>
                </div>
                <div class="overflow-hidden d-flex justify-content-between p-1 shadow border pill-l float-right bg-white col-media">
                    <div class="overflow-hidden pill-l bg-danger px-1 pl-1" style="width:45px;">
                        <strong>
                            <h3><span class="fa fa-comments pl-1 text-white"></span></h3> 
                        </strong>
                    </div>
                    <div class="col ml-2 pl-2 d-none col-media-text hoverOn show-chat-cnt">
                        <h6 class="hoverOn-none"> <strong>Besoin d'une assistance ?</strong></h6>
                        <h6 class="text-muted hoverOn-none">Chater avec nous</h6>
                    </div>
                </div>
            </div>
            <!-- end chat -->
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer-left">
                        <div class="footer-logo">
                            <a href="#"><img src="_bx_assoc_imgs_/vraiefooter.png" alt=""></a>
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
                            <li><a href="?page=_faqPage">A propos de nous</a></li>
                            <li><a href="?page=_contact">Informations</a></li>
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
    <script src="js/_onSubscribe.js"></script>