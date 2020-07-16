<?php 
    require '_function.php';

        if (isset($_GET['_get_it_']) && isset($_GET['_get_his_cat_']) && isset($_GET['_get_me_'])) {

           $tmp_ = _onAddToMyCard(trim($_GET['_get_me_']),trim($_GET['_get_it_']),trim($_GET['_get_his_cat_']),trim($_GET['mailme']),trim($_GET['candBa']),$bdd);

            switch ($tmp_) {

                case 'error':
                    echo('error');
                    break;
                case 'deja':
                    echo('100000');
                    break;
                case 'added':
                    echo(http_response_code());
                    break;
                default:
                   var_dump($tmp_);
                    break;
            }
        }

?>
<!-- <div class="card-title text-center">
     <h4>Votre compte a été crée avec succes</h4>
</div>
<div class="card-body">
    <div class="col-lgjustify-content-center">
        <p>Pour confirmer que cette adresse mail vous appartient nous vous avons envoyé un mail de vérification
            cliquer sur le lien contenu dans le mail que vous avez reçu.
        </p>
        <p>Le mail a été envoyé à cette adress  :'+mail_+'</p>
        <h6>La réception de ce mail peut prendre quelques temps depandament de votre connexion internet</h6>
    </div>
</div> -->