(function () {
    // getting url back
  let redirect = "?page=home";
  const pass_ = document.getElementById('username-h');
  const pass__ = document.getElementById('pass-h');
      // 
  const conErr = document.getElementById('tooltip-h');
  const btnConnexion = document.getElementById('btn-connx-h');
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
bError.id = 'tooltip-error-h';
// creating span for fa fa-warning class name
const span = document.createElement('span');
span.className = 'fa fa-warning';
span.id = 'span-w-h';
bError.appendChild(span); // appending this child
// message
const spanMessage = document.createElement('span');
spanMessage.id = 'span-mssg-h';
spanMessage.innerHTML = ' Mot de passe ou nom d\'utilisateur incorrecte';
bError.appendChild(spanMessage); // appending this child

// cre4ating animation when loading 
const spanAnim = document.createElement('span');
spanAnim.className = 'spinner-border spinner-border-sm';
spanAnim.id = 'span-anim-h';

// then i get the event from submit btn
btnConnexion.onclick =  function(evt){
    if(_validate() === true){
        const formdata = new FormData(document.getElementById('formConn-h')); // formdata
        const xhr = new XMLHttpRequest();
       if(!document.getElementById('span-anim-h')){
           evt.target.appendChild(spanAnim);
       }
        xhr.open('POST','js/_onSubmit.php',true);
        xhr.send(formdata); 

        xhr.onreadystatechange = function(){
            if(xhr.readyState === 4 && xhr.status === 200){
                const res = xhr.responseText;
                switch(res){
                    case '200':
                        if(document.getElementById('tooltip-error-h')){
                            conErr.removeChild(bError);
                        }
                        setTimeout(function(){
                            window.location.replace(redirect);
                        },200)
                         console.log(xhr.responseText)
                    break;
                    case '404':
                        if(!document.getElementById('tooltip-error-h')){
                            conErr.appendChild(bError);
                        }
                        if(document.getElementById('span-anim-h')){
                            evt.target.removeChild(spanAnim);
                        }
                        console.log(xhr.responseText)
                    break;
                    case '202020':
                     if(document.getElementById('span-anim-h')){
                            evt.target.removeChild(spanAnim);
                        }
                     if(!document.getElementById('tooltip-error-h')){
                            conErr.appendChild(bError);
                            document.getElementById('tooltip-error-h').innerHTML = "<b class='text-warning'><span class='fa fa-warning'></span>Ce compte n'est pas activé;\tActive le en confirmant votre adresse mail\nUn mail de vérification vous a été envoyé</b>"
                        }
                        document.getElementById('tooltip-error-h').innerHTML = "<b class='text-warning'><span class='fa fa-warning'></span>Ce compte n'est pas activé;\tActive le en confirmant votre adresse mail\nUn mail de vérification vous a été envoyé</b>"
                    break;
                    default:
                        pass__.classList.add('border-danger');
                        pass_.classList.add('border-danger');
                        console.log(xhr.responseText);
                    break;

                }                
            }
        }
    }
}
})();