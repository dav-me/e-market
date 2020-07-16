<?php 

    if (isset($_SESSION['_userId_'])) {
            
            unset($_SESSION['_userId_']);
            unset($_SESSION['_userN_']);
            unset($_SESSION['_userP_']);
            unset($_SESSION['_userEm_']);
            unset($_SESSION['_userPh_']);
 ?>

     <script>window.location.href = "?page=_signIn";</script>

 <?php   }else{  ?>

    <div class="container">
        <div class='mt-5 text-center mb-5 alert alert-success text-justify'>
            <span class='fa fa-warning'></span>vous n'&ecirc;tes pas connecte !
            <a href="?page=_signIn">
                <button class="btn btn-default bg-dark text-white">
                    Connexion
                </button>
            </a>
        </div>
    </div>
        
  <?php  } ?>