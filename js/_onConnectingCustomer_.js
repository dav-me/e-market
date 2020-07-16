(function () {
    // getting url back
  let redirect = "?page=home";
  const pass_ = document.getElementById('username-cnnx');
  const pass__ = document.getElementById('pass-cnnx');
      // 
  const conErr = document.getElementById('out-error-message');
  const btnConnexion = document.getElementById('btn-connexion');
  _getUrlBack = function(evt){
      const qryString = window.location.search;
      const urlParams = new this.URLSearchParams(qryString);
      if(urlParams.has('_hdlBack')){
          const _hdlBack = urlParams.get('_hdlBack');
          redirect = _hdlBack;
          redirect = _hdlBack.replace(/[.]/g,'&',function(cb){
            return cb
          });
        //   evt.target.location.replace(_hdlBack);
      }
  }
  const _validate = function(){
      //return true;
    //   ('/^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/').test(pass_)
     if(pass_.value !== ''){
          pass_.classList.remove('border-danger');
        if(pass__.value !== ''){
            pass__.classList.remove('border-danger');
            return true;
        }else{
            pass__.classList.add('border-danger');
            return false;
        }
      }else{
          pass_.classList.add('border-danger');
          return false;
      } 
  }
  _getUrlBack();
  console.log(redirect);

// 
const bError = document.createElement('b');
bError.id = 'tooltip-error';
// creating span for fa fa-warning class name
const span = document.createElement('span');
span.className = 'fa fa-warning';
span.id = 'span-w';
bError.appendChild(span); // appending this child
// message
const spanMessage = document.createElement('span');
spanMessage.id = 'span-mssg';
spanMessage.innerHTML = ' Mot de passe ou nom d\'utilisateur incorrecte';
bError.appendChild(spanMessage); // appending this child

// cre4ating animation when loading 
const spanAnim = document.createElement('span');
spanAnim.className = 'spinner-border spinner-border-sm';
spanAnim.id = 'span-anim';

// then i get the event from submit btn
btnConnexion.onclick =  function(evt){
    if(_validate() === true){
        const formdata = new FormData(document.getElementById('formConnexion')); // formdata
        const xhr = new XMLHttpRequest();
       if(!document.getElementById('span-anim')){
           evt.target.appendChild(spanAnim);
       }
        xhr.open('POST','js/_onSubmit.php',true);
        xhr.send(formdata); 

        xhr.onreadystatechange = function(){
            if(xhr.readyState === 4 && xhr.status === 200){
                const res = xhr.responseText;
                switch(res){
                    case '200':
                        if(document.getElementById('tooltip-error')){
                            conErr.removeChild(bError);
                        }
                        setTimeout(function(){
                            window.location.replace(redirect);
                        },200)
                         console.log(xhr.responseText)
                    break;
                    case '404':
                        if(!document.getElementById('tooltip-error')){
                            conErr.appendChild(bError);
                        }
                        if(document.getElementById('span-anim')){
                            evt.target.removeChild(spanAnim);
                        }
                        console.log(xhr.responseText)
                    break;
                     case '202020':
                     if(document.getElementById('span-anim')){
                            evt.target.removeChild(spanAnim);
                        }
                     if(!document.getElementById('tooltip-error-h')){
                            conErr.appendChild(bError);
                            document.getElementById('tooltip-error').innerHTML = "<b class='text-warning'><span class='fa fa-warning'></span>Ce compte n'est pas activé;\tActive le en confirmant votre adresse mail\nUn mail de vérification vous a été envoyé</b>"
                        }
                        document.getElementById('tooltip-error').innerHTML = "<b class='text-warning'><span class='fa fa-warning'></span>Ce compte n'est pas activé;\tActive le en confirmant votre adresse mail\nUn mail de vérification vous a été envoyé</b>"
                    break;
                    default:
                        pass__.classList.add('border-danger');
                        pass_.classList.add('border-danger');
                        evt.target.removeChild(spanAnim);
                        alert('une erreur inconnue vient de se produire');
                        console.log(xhr.responseText);
                    break;

                }  
                console.log(res)              
            }
        }
    }
}
})();