/*! =========================================================
 *
 Paper Bootstrap Wizard - V1.0.1
*
* =========================================================
*
* Copyright 2016 Creative Tim (http://www.creative-tim.com/product/paper-bootstrap-wizard)
 *
 *                       _oo0oo_
 *                      o8888888o
 *                      88" . "88
 *                      (| -_- |)
 *                      0\  =  /0
 *                    ___/`---'\___
 *                  .' \|     |// '.
 *                 / \|||  :  |||// \
 *                / _||||| -:- |||||- \
 *               |   | \\  -  /// |   |
 *               | \_|  ''\---/''  |_/ |
 *               \  .-\__  '-'  ___/-. /
 *             ___'. .'  /--.--\  `. .'___
 *          ."" '<  `.___\_<|>_/___.' >' "".
 *         | | :  `- \`.;`\ _ /`;.`/ - ` : | |
 *         \  \ `_.   \_ __\ /__ _/   .-` /  /
 *     =====`-.____`.___ \_____/___.-`___.-'=====
 *                       `=---='
 *
 *     ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
 *
 *               Buddha Bless:  "No Bugs"
 *
 * ========================================================= */

// Paper Bootstrap Wizard Functions

searchVisible = 0;
transparent = true;
 var me = document.getElementById('id_me').innerHTML;
 var it = document.getElementById('id_it').innerHTML;
 var is = document.getElementById('id_his').innerHTML;
 var mail = document.getElementById('id_mail').innerHTML;

        $(document).ready(function(){

            /*  Activate the tooltips      */
            $('[rel="tooltip"]').tooltip();

            // Code for the Validator
            var $validator = $('.wizard-card form').validate({
        		  rules: {
        		    firstname: {
        		      required: true,
        		      minlength: 3
        		    },
        		    lastname: {
        		      required: true,
        		      minlength: 3
        		    },
        		    email: {
        		      required: true
        		    }
                },
        	});
            const contDivBc = '<div class="col-lg"> '+
            'Avis au client &nbsp;&nbsp;<span class="badge badge-danger pull-left"> Note</span>'+
            '</div>'+
            '<div class="col-lg text-justify">'+
               '<p> Chers Client vous êtes sur le point de faire une commande cette requete est directement'+
                'pris en charge directement et à l\'étape ou vous êtes ce véhicule sera reservé juste pour vous'+
                'jusque dans les<em class="badge badge-primary">24H</em> vous permettant ainsi de vous acquiter'+
                'avec le paiement<br></p>'+
                '<b>Les détails bancaires :</b>  <br>'+
               
               '<table class="p-2 col-lg mt-2 mb-2 table">'+
                    '<tr class="border-bottom">'+
                        '<td><span>Nom de la banque : </span></td>'+
                        '<td><b class="text-uppercase">trust Merchant Bank SA</b></td>'+
                    '</tr>'+
                    '<tr class="border-bottom">'+
                        '<td><span>Swift code : </span></td>'+
                        '<td><b class="text-uppercase">TRMSCD3L</b></td>'+
                    '</tr>'+
                    '<tr class="border-bottom">'+
                        '<td><span>Bénéficiaire :</span></td>'+
                        '<td><b>Les mille services SARL</b></td>'+
                    '</tr>'+
                    '<tr class="border-bottom">'+
                        '<td><span>Numéro du compte :</span></td>'+
                        '<td><b class="text-uppercase">00017280002347595000119</b></td>'+
                    '</tr>'+
               '</table>'+
            '</div>';
            const contDivCs = 
            '<div class="col-lg">'+
            'Pour le paiement en cash ou en éspèce nous vous prions de passer dans les installations des nos bureaux;'+
            '<p>Pour plus d\'informatons contactez nous au</p>'+
            '<p><span class="fa fa-phone"></span>+243 992 913 458&nbsp;ou <span class="fa fa-phone"></span>+243 815 864 596</p>'+
            'Ce mode de paiement est plus recomandé à nos clients résidant à dans la ville de Goma'+
            '</div>';
            
            // Wizard Initialization
          	$('.wizard-card').bootstrapWizard({
                'tabClass': 'nav nav-pills',
                'nextSelector': '.btn-next',
                'previousSelector': '.btn-previous',

                onNext: function(tab, navigation, index) {
                	var $valid = $('.wizard-card form').valid();
                	if(!$valid) {
                		$validator.focusInvalid();
                		return false;
                	}
                },

                onInit : function(tab, navigation, index){

                  //check number of tabs and fill the entire row
                  var $total = navigation.find('li').length;
                  $width = 100/$total;

                  navigation.find('li').css('width',$width + '%');

                },

                onTabClick : function(tab, navigation, index){

                    var $valid = $('.wizard-card form').valid();

                    if(!$valid){
                        return false;
                    } else{
                        return true;
                    }

                },

                onTabShow: function(tab, navigation, index) {
                    var $total = navigation.find('li').length;
                    var $current = index+1;

                    var $wizard = navigation.closest('.wizard-card');

                    // If it's the last tab then hide the last button and show the finish instead
                    if($current >= $total) {
                        $($wizard).find('.btn-next').hide();
                        $($wizard).find('.btn-finish').show();
                    } else {
                        $($wizard).find('.btn-next').show();
                        $($wizard).find('.btn-finish').hide();
                    }

                    //update progress
                    var move_distance = 100 / $total;
                    move_distance = move_distance * (index) + move_distance / 2;

                    $wizard.find($('.progress-bar')).css({width: move_distance + '%'});
                    //e.relatedTarget // previous tab

                    $wizard.find($('.wizard-card .nav-pills li.active a .icon-circle')).addClass('checked');

                }
	        });


                // Prepare the preview for profile picture
                $("#wizard-picture").change(function(){
                    readURL(this);
                });

                $('[data-toggle="wizard-radio"]').click(function(){
                    wizard = $(this).closest('.wizard-card');
                    wizard.find('[data-toggle="wizard-radio"]').removeClass('active');
                    $(this).addClass('active');
                    $(wizard).find('[type="radio"]').removeAttr('checked');
                    $(this).find('[type="radio"]').attr('checked','true');
                    // $(this).find('[type="radio"]').on('click',function(evt){
                    //     console.log(evt.target.value)
                    // })
                });

                $('[data-toggle="wizard-checkbox"]').click(function(){
                    if( $(this).hasClass('active')){
                        $(this).removeClass('active');
                        $(this).find('[type="checkbox"]').removeAttr('checked');
                    } else {
                        $(this).addClass('active');
                        $(this).find('[type="checkbox"]').attr('checked','true');
                    }
                });
                // container of detail
                const div = document.getElementById('payment-display');
                const outmssge = document.getElementById('out-mssg');
                // 
                const divbc = document.createElement('div');
                divbc.id = 'div-for-bc';
                divbc.className = "col-lg p-2 justify-content-start text-left";
                divbc.innerHTML = contDivBc;
                // 
                const divCs = document.createElement('div');
                divCs.id = 'div-for-cs';
                divCs.className = "col-lg p-2 justify-content-start text-left";
                divCs.innerHTML = contDivCs;
                // 
                const erro = document.createElement('div')
                erro.id = "error-mssge";
                erro.className = "alert alert-danger text-danger";
                erro.innerHTML = "<b>Désolé vous ne puvez pas commander le même véhicule plus d'une fois</b>";
                // 
                const succ = document.createElement('div');
                succ.id = "success-mssge"
                succ.className = "alert alert-success text-success";
                succ.innerHTML = '<b>Votre commande a réussie; Un mail contenant les prochaines étape vous a été envoyé<p>Maintenant vous allez être rediriger dans la liste des vos commande</p></b>'
                // start event here
                $('#forvbanc').click(function(){
                    div.innerHTML = null;
                    if(!document.getElementById('div-for-bc')){
                        div.appendChild(divbc)
                    }
                })
                $('#forvcash').click(function(){
                    div.innerHTML = null;
                    if(document.getElementById('div-for-bc')){
                        div.removeChild(divbc);
                    }
                    div.appendChild(divCs)
                })
                $('.btn-finish').click(function(){
                    const xhr = new XMLHttpRequest();
                    xhr.open('GET', '../../js/_onAddToMyOwnCard.php?_get_it_='+it+'&_get_his_cat_='+is+'&_get_me_='+me+'&mailme='+mail+'&candBa='+1);
                    xhr.send(null);
                    xhr.onreadystatechange = function(){
                        if(xhr.status === 200 && xhr.readyState === 4){
                            const rs = xhr.responseText;
                            switch(rs){
                                case '200':
                                    if(!document.getElementById('success-mssge')){
                                        outmssge.innerHTML = null;
                                        outmssge.appendChild(succ);
                                        setTimeout(function(evt){
                                            window.location.replace('https://lesmilleservices.com');
                                        },500);
                                    }
                                    break;
                                case '500':
                                    if(!document.getElementById('error-mssge')){
                                        outmssge.innerHTML = null;
                                        outmssge.appendChild(erro);
                                    }
                                    break;
                                default:
                                    alert('Une erreur inconnue vient de se produire')
                                    break;
                            }
                        }
                    }
                })
                $('.set-full-height').css('height', 'auto');
                // const rdo = document.getElementsByName('payment');
                // for(let radio of rdo){
                //     // if(radio.checked){
                //         radio.onclick = function(){
                //             console.log(radio.value)
                //         }
                //     // }
                // }
                // const rd = document.querySelector('input[name=choix]:checked');
                // alert(1)
            });



         //Function to show image before upload

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#wizardPicturePreview').attr('src', e.target.result).fadeIn('slow');
                }
                reader.readAsDataURL(input.files[0]);
            }
        }


        function debounce(func, wait, immediate) {
        	var timeout;
        	return function() {
        		var context = this, args = arguments;
        		clearTimeout(timeout);
        		timeout = setTimeout(function() {
        			timeout = null;
        			if (!immediate) func.apply(context, args);
        		}, wait);
        		if (immediate && !timeout) func.apply(context, args);
        	};
        };
