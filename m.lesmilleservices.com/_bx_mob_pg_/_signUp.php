<?php 
if(!isset($_SESSION['_userId_'])) {
?>
<style>
    li.active_p a{
        background: #1a82db;
    }
    .error_{
        border:1px solid red;
    }
    .to{
        font-family:sans-serif;
    }
</style>
 <!-- Breadcrumb Section Begin -->
 <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="?page=home"><i class="fa fa-home"></i> Home</a>
                        <a href="#"> Pages</a>
                        <span>créer un compte</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Form Section Begin -->
<div class="register-login-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="register-form" id="register">
                   <div class="w-100" id="splash">
                    <h2>Créer un compte</h2>
                    <form action="#" method="POST" id="_newCustomer_">
                        <div class="group-input">
                            <label for="username">Nom</label>
                            <input class="to" type="text" id="name1" name="name1">
                            <span class="text-danger hdn" id="chk_fn_name1"><span class="fa fa-warning"></span> le nom est invalide</span>
                        </div>
                        <div class="group-input">
                            <label for="username">Postnom</label>
                            <input class="to" type="text" id="name2" name="name2">
                            <span class="text-danger hdn"  id="chk_fn_name2"><span class="fa fa-warning"></span> le postnom est invalide</span>
                        </div>
                        <div class="group-input">
                            <label for="username">Adresse mail</label>
                            <input class="to" type="email" id="email_" name="email_">
                            <span class="text-danger hdn" id="chk_fn_email_"><span class="fa fa-warning"></span> Adresse mail invalide</span>
                        </div>
                        <div class="group-input">
                            <label for="username">Numero de téléphone</label>
                            <input class="to" type="text" id="phonenum" name="phonenum">
                            <span class="text-danger hdn" id="chk_fn_phonenum"><span class="fa fa-warning"></span> le numero est incorrect</span>
                        </div>
                        <div class="group-input">
                            <label for="pass">mot de pass*</label>
                            <input class="to" type="password" id="pass_1" name="pass_1">
    			    <small class="text-danger hdn" id="chk_fn_pass_1"><span class="fa fa-warning"></span> le mot de passe doit etre > 6 charactères </small>
                        </div>
                        <div class="group-input">
                            <label for="con-pass">Confirmer le mot de pass*</label>
                            <input class="to" type="password" id="con-pass" name="con-pass">
                            <span class="text-danger hdn" id="chk_fn_con-pass"><span class="fa fa-warning"></span> les mots de passe ne sont pas identique ou vides</span>
                        </div>
                        <button type="button" class="site-btn register-btn" id="crt_account">Créer un compte</button>
                    </form>
                    <div class="switch-login" id="out-ms">
                        <a href="?page=_signIn" class="or-login">J'ai déjà un compte Connexion</a>
                    </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Register Form Section End -->
<script>
    (function(){
    var emailTo = '';
   const splash = document.getElementById('splash');
   const divMssage = document.createElement('div');
   divMssage.id = "succes-added";
   divMssage.className = "col-lg-12 p-2";
   divMssage.innerHTML =
                      '<div class="w-100" id="infoSucc">'+
                      '<h2 class="text-success">Compte crée avec succès</h2>'+
                      '<h6>Confirmation de l\'adresse mail requise</h6>'+
                          '<div class="col-lgjustify-content-center">'+
        			'<p>Pour confirmer que cette adresse mail vous appartient nous vous avons envoyé un mail de vérification'+
                                 ' cliquer sur le lien contenu dans le mail que vous avez reçu.'+
                          '</p>'+
                          '<p>Le mail a été envoyé à cette adress  :<em class="badge badge-primary" id="emContent"></em></p>'+
                          '<h6>La réception de ce mail peut prendre quelques temps depandament de votre connexion internet</h6>'+
                          '</div>'+
                      '</div>';


        const divMes = document.getElementById('register');
    	const dormer = document.getElementById('out-ms');
        const spanAnimUp = document.createElement('span');
    	spanAnimUp.className = 'spinner-border spinner-border-sm';
    	spanAnimUp.id = 'span-anim-s';
    	const alert = document.createElement('div');
    	alert.id = 'error-alert';
    	alert.className = 'alert alert-danger text-anger';
    	alert.innerHTML = "Désolé cette adresse mail a déjà été utilisée par quelqu'un d'autre\rUtilise une autre qui est différente"
    var _checkThis_ = {};
    var psswd;
    function get_chck(es,comm){
		var chck = document.getElementById('chk_fn_' + es );
		// console.log(chck.className);
		if(comm === 1){
			chck.classList.remove('hdn');
			document.getElementById(es).style.border = "1px solid red";
			// outputMess.classList.add('hdn');

		}else if(comm === 0){
			chck.classList.add('hdn');
			document.getElementById(es).style.border = "1px solid #6A9955";
			// outputMess.classList.remove('hdn');
        }
    }
    _checkThis_['name1'] = function(id){
		var name = document.getElementById(id);
			if(name.value.length >= 2){
				if((/^[a-zA-Z]+$/).test(name.value)){
					get_chck(id,0);
					return true;
				}else{
					get_chck(id,1);
					// outputMess.innerHTML = '&nbsp; don\'t use specials characters'; 
					return false;
				}
			}else{
				get_chck(id,1);
				// outputMess.innerHTML = '&nbsp; first name is too short'; 
			}
	};
	_checkThis_['name2'] = function(id){
		// console.log();
		var name = document.getElementById(id);
			if(name.value.length >= 2){
				if((/^[a-zA-Z]+$/).test(name.value)){
					get_chck(id,0);
					return true;
				}else{
					get_chck(id,1);
					// outputMess.innerHTML = '&nbsp; don\'t use specials characters'; 
					return false;
				}
			}else{
				get_chck(id,1);
				// outputMess.innerHTML = '&nbsp; last name is too short'; 
				return false;
			}
	};
	_checkThis_['email_'] = function(id){
		// console.log();
		var name = document.getElementById(id);
			if((/^([a-z0-9._-]+)@([a-z0-9._-]+)\.([a-z]{2,6})$/).test(name.value)){
				get_chck(id,0);
				emailTo = name.value;
				// outputMess.innerHTML = '&nbsp; don\'t use specials characters'; 
				return true;
			}else{
				get_chck(id,1);
				// outputMess.innerHTML = '&nbsp; Invalid mail adresse'; 
				return false;
			}
			
	};
	_checkThis_['phonenum'] = function(id){
		// console.log();
		var name = document.getElementById(id);
			if((/^[0-9+]{9,13}$/).test(name.value)){
				get_chck(id,0);
				// outputMess.innerHTML = '&nbsp; don\'t use specials characters'; 
				return true;
			}else{
				get_chck(id,1);
				// outputMess.innerHTML = '&nbsp; invalide number ( 10 digits min )'; 
				return false;
			}
			
	};
	_checkThis_['pass_1'] = function(id){
		// console.log();
		var name = document.getElementById(id);
			if(name.value.length >= 6){
				if(name.value.length >= 6){
					get_chck(id,0);
					// outputMess.innerHTML = '&nbsp; don\'t use specials characters'; 
					psswd = name.value;
					return true;
				}else{
					get_chck(id,1);
					// outputMess.innerHTML = '&nbsp; bad character (use -,_,.)';
					return false;
				}
			}else{
				get_chck(id,1);
				// outputMess.innerHTML = '&nbsp; too short password (6 chrtr min)'; 
				return false;
			}
			
	};
	_checkThis_['con-pass'] = function(id){
        // console.log();
        psswd = document.getElementById('pass_1').value;
		var name = document.getElementById(id);

				// if((/^[a-zA-Z0-9._-]+$/).test(name.value)){
					if(name.value === psswd && name.value != ''){
					// alert(psswd);
                        get_chck(id,0);
					// outputMess.innerHTML = '&nbsp; don\'t use specials characters'; 
					return true;
					}else{
						get_chck(id,1);
						// outputMess.innerHTML = '&nbsp; the passwords are not the same';
						return false;
					}
				// }else{
				// 	get_chck(id,1);
				// 	// outputMess.innerHTML = '&nbsp; bad character (use -,_,.)';
				// 	return false;
				// }
			
	};
        document.getElementById('crt_account').onclick = function(evt){
            const email_ = document.getElementById('email_');
            var resChecking = true;
            for (const key in _checkThis_) {
                if (_checkThis_.hasOwnProperty(key)) {
                    resChecking = resChecking & _checkThis_[key](key);
                }
            }
            if (resChecking) {
            evt.target.disabled = true;
            evt.target.appendChild(spanAnimUp);
            const _form_ = new FormData(document.getElementById('_newCustomer_'));
            var xhr = new XMLHttpRequest();
            xhr.open('POST','js/_onSubmit.php',true);
            xhr.send(_form_);
            xhr.timeout = 30000;
            xhr.onreadystatechange = function(){
             if (xhr.readyState == 4 && xhr.status == 200) {
                if(xhr.responseText === '200'){
                   //emContent = email_.value;
                    //window.location.href = '?page=_signIn';
                     email_.classList.remove('border-danger');
                     if(document.getElementById('error-alert')){
	             dormer.removeChild(alert);
	           }
	             splash.classList.add('d-none')  ;  
	             divMes.appendChild(divMssage);
	            
	            document.getElementById('emContent').innerHTML = emailTo;
                    console.log(xhr.responseText)
	         }
	         if(xhr.responseText === '501'){
	            if(document.getElementById('span-anim-s')){
	              evt.target.disabled = false;
	              evt.target.removeChild(spanAnimUp)
	              email_.classList.add('border-danger');
	              dormer.appendChild(alert);
	            }
	            console.log(xhr.responseText)
	         }
	         if(xhr.responseText === '500'){
	         email_.classList.remove('border-danger');
	         if(document.getElementById('error-alert')){
	           dormer.removeChild(alert);
	         }
	          alert('Une erreur inconnue vient de se produire \r by davidmened@gmail.com');
	         }

           	    }
		}
		xhr.ontimeout = function(){
		  alert('Connexion internet trop lente ou inexistante \r by davidmened@gmail.com');
		}
            }
        }
        var domInput = document.getElementsByTagName('input');
        for (let index = 0; index < domInput.length; index++) {
                if (domInput[index].type == 'text' || domInput[index].type == 'password' || domInput[index].type == 'email') {
                    if (domInput[index].className.indexOf('to') != -1) {
                        domInput[index].onkeyup = function(e){
                        _checkThis_[this.id](this.id);
                    } 
                    }
                }
            }
    })();
</script>
<?php }else{ ?> <script>window.location.href = "?page=_commandes";</script> <?php } ?>