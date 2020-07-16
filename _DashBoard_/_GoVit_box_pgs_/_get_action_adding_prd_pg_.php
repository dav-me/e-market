<?php if (isset($_SESSION['_getmeinplzdv_'])) { ?>

<link rel="stylesheet" href="./dist/css/css.style.css">
<section class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-6">
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Formulaire</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start ----------------------------------onsubmit="addingPrd(); return false;"- action="./dist/js/_phpSubmition.hnd.php"--------------------------------------------->
                  <form enctype="multipart/form-data" id="addprd" method="POST" onsubmit="addingPrd(); return false;">
                    <div class="card-body">
<!--                      --------------------------------------------------------------------->
                      <div class="row">
                        <div class="input-group mb-3 col-lg-6">
                          <div class="input-group-prepend">
                            <span class="input-group-text">Modele</span>
                          </div>
                          <input type="text" class="form-control" placeholder="ex: Noah" name="fullname" required>
                        </div>
                        <div class="input-group mb-3 col-lg-6">
                          <div class="input-group-prepend">
                            <span class="input-group-text">Marque</span>
                          </div>
                          <input type="text" class="form-control" placeholder="ex: Toyota" name="marque" required>
                        </div>
                      </div>
<!------------------------------------------------------------------------------------------------>
<div class="form-group border p-3">
                        <span class="pb-3">Categorie</span>
                        <div class="container pt-2">
                          <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" id="customRadio1" name="cat" value="vente" required>
                            <label for="customRadio1" class="custom-control-label">En vente</label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" id="customRadio2" name="cat" value="location" required>
                            <label for="customRadio2" class="custom-control-label">En location</label>
                          </div>
                        <!--  <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" id="customRadio3" name="cat" value="leasesale" required>
                            <label for="customRadio3" class="custom-control-label">Vente et Location</label>
                          </div> -->
                        </div>
                        <div class="col-lg d-none" id="customRadio3-cc">
                          <div class="row pt-3">
                            <div class="input-group mb-3 col-6">
                              <div class="input-group-prepend">
                                <span class="input-group-text">($) Location</span>
                              </div>
                              <input type="number" class="form-control" placeholder="ex: 4 000" id="pricelease" name="pricelease">
                            </div>
                            <!--  -->
                            <div class="input-group mb-3 col-6">
                              <div class="input-group-prepend">
                                <span class="input-group-text">($) Vente</span>
                              </div>
                              <input type="number" class="form-control" placeholder="ex: 4 000" id="pricesale" name="pricesale">
                            </div>
                          </div>
                        </div>
                        <div class="input-group mb-3 pt-3 d-none" id="customRadio2-cc">
                          <div class="input-group-prepend">
                            <span class="input-group-text">Prix du véhicule en&nbsp;<b>USD</b></span>
                          </div>
                            <input type="number" class="form-control" placeholder="ex: 10 000 " id="price" name="price">
                        </div>
                        <div class="col">
                          <b class="text-warning text-muted">Entrer le prix sans le symbole ( $ )</b>
                        </div>
                      </div>
<!--                      ------------------------------------------------------------------------>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text">description</span>
                        </div>
                        <textarea type="text" class="form-control" placeholder="ex: 4" name="desc" required></textarea>
                      </div>
                      <div class="form-group">
                        <!-- <label for="exampleInputFile">File input</label> -->
                        <div class="input-group">
                          <div class="custom-file">
                            <input id="imageFile" name="imageFile1" type="file" class="custom-file-input" required>
                            <label class="custom-file-label" for="imageFile">Image pricipale</label>
                          </div>
                          <div class="input-group-append">
                            <span class="input-group-text" id="labImg"><></span>
                          </div>
                        </div>
                      </div>
<!--                      -------------------------------------------------------------->
                      <div class="row">
                        <div class="form-group col-lg-6">
                          <!-- <label for="exampleInputFile">File input</label> -->
                          <div class="input-group">
                            <div class="custom-file">
                              <input id="imageFile-1" name="imageFile2" type="file" class="custom-file-input" required>
                              <label class="custom-file-label" for="imageFile-2">Image 1</label>
                            </div>
                            <div class="input-group-append">
                              <span class="input-group-text" id="labImg1"><></span>
                            </div>
                          </div>
                        </div>
                        <div class="form-group col-lg-6">
                          <!-- <label for="exampleInputFile">File input</label> -->
                          <div class="input-group">
                            <div class="custom-file">
                              <input id="imageFile-2" name="imageFile3" type="file" class="custom-file-input" required>
                              <label class="custom-file-label" for="imageFile-3">Image 2</label>
                            </div>
                            <div class="input-group-append">
                              <span class="input-group-text" id="labImg2"><></span>
                            </div>
                          </div>
                        </div>
                        <div class="form-group col-lg-6">
                          <!-- <label for="exampleInputFile">File input</label> -->
                          <div class="input-group">
                            <div class="custom-file">
                              <input id="imageFile-3" name="imageFile4" type="file" class="custom-file-input" required>
                              <label class="custom-file-label" for="imageFile-3">Image 3</label>
                            </div>
                            <div class="input-group-append">
                              <span class="input-group-text" id="labImg3"><></span>
                            </div>
                          </div>
                        </div>
                        <div class="form-group col-lg-6">
                          <!-- <label for="exampleInputFile">File input</label> -->
                          <div class="input-group">
                            <div class="custom-file">
                              <input id="imageFile-4" name="imageFile5" type="file" class="custom-file-input" required>
                              <label class="custom-file-label" for="imageFile-4">Image 4</label>
                            </div>
                            <div class="input-group-append">
                              <span class="input-group-text" id="labImg4"><></span>
                            </div>
                          </div>
                        </div>
                        <div class="form-group col-lg-6">
                          <!-- <label for="exampleInputFile">File input</label> -->
                          <div class="input-group">
                            <div class="custom-file">
                              <input id="imageFile-5" name="imageFile6" type="file" class="custom-file-input" required>
                              <label class="custom-file-label" for="imageFile-5">Image 5</label>
                            </div>
                            <div class="input-group-append">
                              <span class="input-group-text" id="labImg5"><></span>
                            </div>
                          </div>
                        </div>
                        <div class="form-group col-lg-6">
                          <!-- <label for="exampleInputFile">File input</label> -->
                          <div class="input-group">
                            <div class="custom-file">
                              <input id="imageFile-6" name="imageFile7" type="file" class="custom-file-input" require>
                              <label class="custom-file-label" for="imageFile-6">Image 6</label>
                            </div>
                            <div class="input-group-append">
                              <span class="input-group-text" id="labImg6"><></span>
                            </div>
                          </div>
                        </div>
                        <div class="form-group col-lg-6">
                          <!-- <label for="exampleInputFile">File input</label> -->
                          <div class="input-group">
                            <div class="custom-file">
                              <input id="imageFile-7" name="imageFile8" type="file" class="custom-file-input" require>
                              <label class="custom-file-label" for="imageFile-7">Image 7</label>
                            </div>
                            <div class="input-group-append">
                              <span class="input-group-text" id="labImg7"><></span>
                            </div>
                          </div>
                        </div>
                        <div class="form-group col-lg-6">
                          <!-- <label for="exampleInputFile">File input</label> -->
                          <div class="input-group">
                            <div class="custom-file">
                              <input id="imageFile-8" name="imageFile9" type="file" class="custom-file-input" require>
                              <label class="custom-file-label" for="imageFile-8">Image 8</label>
                            </div>
                            <div class="input-group-append">
                              <span class="input-group-text" id="labImg8"><></span>
                            </div>
                          </div>
                        </div>
                        <div class="form-group col-lg-6">
                          <!-- <label for="exampleInputFile">File input</label> -->
                          <div class="input-group">
                            <div class="custom-file">
                              <input id="imageFile-9" name="imageFile10" type="file" class="custom-file-input" require>
                              <label class="custom-file-label" for="imageFile-9">Image 9</label>
                            </div>
                            <div class="input-group-append">
                              <span class="input-group-text" id="labImg9"><></span>
                            </div>
                          </div>
                        </div>
                      </div>
<!--                 ------------------------------------------------------------------->
<!--                      --------------------------------------------------------------->
                      <div class="row">
                        <div class="input-group mb-3 col-lg-6">
                          <div class="input-group-prepend">
                            <span class="input-group-text">Volant</span>
                          </div>
<!--                          <input type="text" class="form-control" placeholder="ex: Noah" name="fullname" required>-->
                          <select name="forwheel" id="wheel" class="form-control" required>
                            <option value="gauche">Gauche</option>
                            <option value="droit">Droit</option>
                          </select>
                        </div>
                        <div class="input-group mb-3 col-lg-6">
                          <div class="input-group-prepend">
                            <span class="input-group-text">Carburant</span>
                          </div>
                          <!--                          <input type="text" class="form-control" placeholder="ex: Noah" name="fullname" required>-->
                          <select name="carburant" id="carburant" class="form-control" required>
                            <option value="essence">Essence</option>
                            <option value="diesel">Diesel</option>
                          </select>
                        </div>
                      </div>
<!--                      --------------------------------------------------------------->
                      <div class="row">
                        <div class="input-group mb-3 col-lg-6">
                          <div class="input-group-prepend">
                            <span class="input-group-text">Transmission</span>
                          </div>
                          <!--                          <input type="text" class="form-control" placeholder="ex: Noah" name="fullname" required>-->
                          <select name="transmission" id="Transmission" class="form-control" required>
                            <option value="automatique">Automatique</option>
                            <option value="manuel">Manuel</option>
                          </select>
                        </div>
                        <div class="input-group mb-3 col-lg-6">
                          <div class="input-group-prepend">
                            <span class="input-group-text">Couleur ext.</span>
                          </div>
                          <!--                          <input type="text" class="form-control" placeholder="ex: Noah" name="fullname" required>-->
                          <input name="color" id="color" class="form-control" required placeholder="ex: rouge">
                        </div>
                      </div>
                      <!--                      --------------------------------------------------------------->
                      <div class="row">
                        <div class="input-group mb-3 col-lg-6">
                          <div class="input-group-prepend">
                            <span class="input-group-text">Sièges</span>
                          </div>
                          <!--                          <input type="text" class="form-control" placeholder="ex: Noah" name="fullname" required>-->
                          <input name="sieges" id="Sieges" class="form-control" required type="number" placeholder="ex: 8">
                        </div>
                        <div class="input-group mb-3 col-lg-6">
                          <div class="input-group-prepend">
                            <span class="input-group-text">Portières</span>
                          </div>
                          <!--                          <input type="text" class="form-control" placeholder="ex: Noah" name="fullname" required>-->
                          <input name="porte" id="porte" class="form-control" required placeholder="ex: 5" type="number">
                        </div>
                      </div>
                      <!-- ----------------------------------------------------------------------- -->
                       <div class="row">
                        <div class="input-group mb-3 col-lg-12">
                          <div class="input-group-prepend">
                            <span class="input-group-text">Kilometrage</span>
                          </div>
                          <!--                          <input type="text" class="form-control" placeholder="ex: Noah" name="fullname" required>-->
                          <input name="kilometrage" id="kilometrage" class="form-control" type="text" placeholder="ex: 12 000 km">
                        </div>
                       <!-- <div class="input-group mb-3 col-lg-6">
                          <div class="input-group-prepend">
                            <span class="input-group-text">Portières</span>
                          </div>
                                                   <input type="text" class="form-control" placeholder="ex: Noah" name="fullname" required>
                          <input name="porte" id="porte" class="form-control" required placeholder="ex: 5" type="number">
                        </div>-->
                      </div>
<!--                      --------------------------------------------------------------->
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" checked>
                        <label class="form-check-label" for="exampleCheck1">Me diriger vers la page du site</label>
                      </div>
                    </div>
                    <!-- /.card-body -->
    
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary w-100" id="onSending-off">
                        <span class="spinner-grow spinner-grow-sm d-none" id="animate"></span>&nbsp;
                        Ajouter
                      </button>
                    </div>
                  </form>
                </div>
              </div>
              <!-- section preview here -->
              <div class="col-lg-6">
                <div class="border card">
                  <div class="card-header">
                    <div class="card-title">
                      <span>Previsualisation</span>
                    </div>
                  </div>
                  <div class="card-bady">
                    <div class="col-lg h-50 algn-center p-2">
                      <span><b>Image pricipale</b></span>
                      <img class="preview-1 border" id="preview" src=""/>
                    </div>
                    <div class="container">
                      <div class="row">
                        <div class="col-lg-6 algn-center border content-center">
                          <h6>Image : 1</h6>
                          <img class="preview-2" id="preview-1" src=""/>
                        </div>
                        <div class="col-lg-6 algn-center border">
                          <h6>Image : 2</h6>
                          <img class="preview-2" id="preview-2" src=""/>
                        </div>
                        <div class="col-lg-6 algn-center border">
                          <h6>Image : 3</h6>
                          <img class="preview-2" id="preview-3" src=""/>
                        </div>
                        <div class="col-lg-6 algn-center border">
                          <h6>Image : 4</h6>
                          <img class="preview-2" id="preview-4" src=""/>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer">
                    &copy; David maene
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <script src="./dist/js/jquery-2.2.4.min.js"></script>
        <script src="./dist/js/onUploadingFileLeaseSale.js"></script>

<!---------------------------------------------------- start of script login here ------------------------------------------->
<script>
  /*  (function(){
        var allowedTypes = ['jpg', 'jpeg', 'png','icon','gif','tiff'];
        var _TFILE_ = document.getElementById('exfaceimg');
        var _forCheck = [];

        function _getTooltip(element) {
            var issus = document.getElementById('out_'+element);
                element = document.getElementById(element);
            var tmp = issus.className.split(' ');
                if (tmp.indexOf('hdn') != -1) {
                    element.classList.add('error-border');
                    // document.getElementById('btnEnreg').disabled = true;
                    // _chechIfMarqueSelected();
                    return issus.classList;
                }else{
                    return false;
                }
        }
        function _desactivateTooltip(element) {
    
            _getTooltip(element).remove('indic-form');
            document.getElementById(element).classList.remove('error-border');
        }
        _forCheck['exname'] = function(ex){
            var element = document.getElementById('exname');
                if (element.value != '' && element.value.length >= 2 ) {
                    _desactivateTooltip(element.id);
                    return true;
                }else{
                    _getTooltip(element.id).add('indic-form');
                    return false;
                }
        };
        _forCheck['exmarque'] = function(ex){
            var element = document.getElementById('exmarque');
            // var tool = element.nextSibling;
                if (element.value != '' && element.value.length >= 2) {
                    _desactivateTooltip(element.id);
                    return true;
                }else{
                    _getTooltip(element.id).add('indic-form');
                    return false;
                }
        };
        function _checkDescription(){
            var element = document.getElementById('exdesc');
            // var tool = element.nextSibling;
                if (element.value != '' && element.value.length >= 5) {
                    _desactivateTooltip(element.id);
                    return true;
                }else{
                    _getTooltip(element.id).add('indic-form');
                    return false;
                }
        };
        _forCheck['exprice'] = function(ex){
            var element = document.getElementById('exprice');
            // var tool = element.nextSibling;
                if (element.value != '' && (/^[0-9.]+$/).test(element.value)) {
                    _desactivateTooltip(element.id);
                    return true;
                }else{
                    _getTooltip(element.id).add('indic-form');
                    return false;
                }
        };
        _forCheck['excolor'] = function(ex){
            var element = document.getElementById('excolor');
            // var tool = element.nextSibling;
                if (element.value != '') {
                   if ((/^[a-zA-Z]+$/).test(element.value)) {
                    _desactivateTooltip(element.id);
                    return true;
                   }else{
                    _getTooltip(element.id).add('indic-form');
                    return false;
                }
                }else{
                    _getTooltip(element.id).add('indic-form');
                    return false;
                }
        };
        function _chkAllowedFile(_input_){
            _input_ = document.getElementById(_input_);
            var files = _input_.files,
                f = files[0],
                filname = f.name;
            var fileext = filname.substring(filname.lastIndexOf('.')).toLowerCase();
                // imgType;
            if(allowedTypes.indexOf(fileext) !== -1){
                _desactivateTooltip(_input_.id);
                return true;
            }else{
                _getTooltip(_input_.id).add('indic-form');
						return false;
            }
			
        }
        function _chkAllowedFileRequired(){
            // _input_ = document.getElementById(_input_);
            var files = _TFILE_.files;
            var files = files.files,
                f = files[0],
                filname = f.name;
            var fileext = filname.substring(filname.lastIndexOf('.')).toLowerCase();
                // imgType;
            if(allowedTypes.indexOf(fileext) !== -1){
                _desactivateTooltip(_input_.id);
                return true;
            }else{
                _getTooltip(_input_.id).add('indic-form');
						return false;
            }
        }
        function _chechIfMarqueSelected(){
            var _mrq_ = document.getElementById('ex_chck_cat');
                if(_mrq_.value != '_none_'){
                    document.getElementById('out_ex_chck_cat').classList.remove('indic-form');
                    return true;
                }
                else{
                   document.getElementById('out_ex_chck_cat').classList.add('indic-form');
                    return false;
                }
                // alert(_mrq_);
        };
        var imgC = document.getElementsByTagName('input');
            for (let index = 0; index < imgC.length; index++) {
                imgC[index].onkeyup = function(dvd){
                    if (imgC[index].type === 'text') {
                        _forCheck[this.id](this.id);
                    }
                };
            }
       // var _FILES_ = document.getElementsByTagName('input');
       // for (let index = 0; index < _FILES_.length; index++) {
       //     _FILES_[index].onchange = function(ex){
       //         if (_FILES_[index].type === 'file') {
       //             _chkAllowedFile(this.id);
       //         }
       //     }
       // }
        document.getElementById('btnEnreg').onclick = function(evt){
            var _req_ = true;
            for (const key in _forCheck) {
                if (_forCheck.hasOwnProperty(key)) {
                    _req_ = _forCheck[key](key) && _req_;
                }
            }
            if (_req_) {
                if (_checkDescription() && _chechIfMarqueSelected()) {
                const span = document.createElement('span');
                span.classsName = 'spinner-grow spinner-grow-sm';
                span.id = 'span-h';
                evt.target.appendChild(span);
                const _form_ = new FormData(document.getElementById('formAddProduct'));
                var xhr = new XMLHttpRequest();
                    xhr.open('POST','dist/js/_phpSubmition.php',true);
                    xhr.send(_form_);
                    xhr.onreadystatechange = function(){
                    if (xhr.readyState == 4 && xhr.status == 200) {
                        if(xhr.response.indexOf(xhr.status) != -1){
                            // commandSpinner(0);
                            evt.target.removeChild(span);
                            alert('ajouter avec succes');
                            
                        }else{
                            // commandSpinner(0);
                            console.log(xhr.response);
                        }
                console.log(xhr.response);
			 }
			
           }
        }
    }
    }
    })();  */
</script>
<?php }else{ header("location:?_trgPage_=_get_home"); } ?>