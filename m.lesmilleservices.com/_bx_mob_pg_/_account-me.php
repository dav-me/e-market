<?php 

 if (isset($_GET['_tkn']) && strlen($_GET['_tkn']) === 32 && isset($_GET['page']) && isset($_GET['_recRef']) && !empty($_GET['_recRef']) && isset($_GET['ref']) && !empty($_GET['ref'])) {

      $str = $_SERVER['QUERY_STRING'];
      list($currentPage,$tkn_,$ref,$id)=preg_split("/&/",$str);
      #var_dump($queryString);
      $page = substr($currentPage,strrpos($currentPage,"=")+1);
      $tkn_ = substr($tkn_,strrpos($tkn_,"=")+1);
      $ref = substr($ref,strrpos($ref,"=")+1);
      $id = substr($id,strrpos($id,"=")+1);
      $cmmd = _onLoadSingleCommand($tkn_,$id,$ref,$bdd);
      #var_dump($cmmd);
      if($cmmd != null && strlen($tkn_) == 32){
        $categorie = '';
        $car = _onLoadSingleProduct($id,$bdd);
        switch($car->categorie){case 95: $categorie = "Achat"; break; case 84: $categorie = "Location Journalière";break;}
        #var_dump($car);

?>
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
<div class="container pt-5">
<div class="col-md-12">
      <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card card-outline card-primary">
          <div class="card-header">
            <h3>
              Validation Commande
            </h3>
            <h6>Vous êtes à une étape de la fin de votre Commande</h6>
          </div>
          <!-- /.card-header -->
          <div class="card-body pad">
            <div class="mb-3 w-100">
               <p>Pour la finalisation de votre requete nous vous prions de copier / coller le numero de reférence de véhicule; si Vous ne l'avez pas 
                   il se trouve dans le mail que vous avez reçu lors de la commande du véhicule. ou vous pouvez tout simplement cliquer sur le lien qui est dans le mail reçu
               </p>
               <div class="mt-3 w-100 row">
                  <div class="col-lg-8">
                        <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th scope="col" colspan="2">Détail du véhicule<span class="glyphicon glyphicon-glyphicon-inbox"></span></th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">Modèle</th>
                              <td><?php echo($car->model) ?></td>
                              <td rowspan="4"><img src="https://lesmilleservices.com/_bx_assoc_imgs_/_bx_assoc_imgs_/<?php echo($car->imgPrcl) ?>" class="w-100"/></td>
                            </tr>
                            <tr>
                              <th scope="row">Marque</th>
                              <td><?php echo($car->marque) ?></td>
                              
                            </tr>
                            <tr>
                              <th scope="row">Categorie</th>
                              <td><span class="badge badge-default"><?php echo$categorie ?></span></td>
                            
                            </tr>
                            <tr>
                              <th scope="row">Date</th>
                              <td><span><?php echo($cmmd->date_)?></span></td>
                            </tr>
                            <tr>
                          <th scope="row">Prix</th>
                              <th>$ <?php echo($car->price) ?></th>
                            
                            </tr>
                          </tbody>
                     </table>
                  </div>
                  <div class="col-lg-4 p-2" id="dom">
                    <p>Sélectionner le fichier de bordereau dans votre appareil pour finaliser cette opération
                        <!-- <small>Type de fichier</small> -->
                    </p>
                    <div class="w-100 p-2 border text-center rounded d-none" id="file-view">
                    </div>
                    <!--   method="POST" enctype="multipart/form-data" -->
                    <form id="uploadFile">
                      <div class="form-group">
                        <label for="exampleInputFile">Ajouter le fichier</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="exampleInputFile" name="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Chose file</label>
                          </div>
                          <div class="input-group-append">
                            <span class="input-group-text" id="whenUploaded">Upload</span>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <input type="text" value="<?php echo($tkn_) ?>" class="form-control opct opacity-0" name="customer" readonly>
                      </div>
                      <div class="form-group">
                        <input type="text"  name="car" value="<?php echo($id) ?>" class="form-control opct opacity-80" readonly>
                      </div>
                      <div class="form-group">
                        <input type="text"  name="refCar" value="<?php echo($ref) ?>" class="form-control opct opacity-80" readonly>
                      </div>
                      
                     <!-- <button type="submit" class="btn btn-primary">Envoyer</submit> -->
                    </form>
                    <!-- end form  -->
                  </div>
               </div>
            </div>
          </div>
          <div class="card-footer">
          <p>En cas d'oublie ou de perte de la clé de référence du véhicule; Nous vous prions 
             de passer dans nos installations ou conctactez nous aux :</p>
          <p>Contact</p>
          <p><span class="fa fa-phone"></span>&nbsp;+243 992 913 458</p>
          <p><span class="fa fa-phone"></span>&nbsp;+243 815 864 596</p>
          <p><span class="fa fa-envelope"></span>&nbsp;contact@lesmilleservices.com</p>
          </div>
        </div>
      </div>
      <!-- /.col-->
    </div>
    <!-- ./row -->
  </section>
  

  </div>
  </div>
  <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script> -->
  <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> -->
<script>
    const allowedFile = ["pdf","txt","jpeg","jpg","gif","png","docs","htm","doc","ppt","docx"];
    const input = document.getElementById('exampleInputFile');
    
    const whenUploaded = document.getElementById('whenUploaded');
    const previewDOM = document.getElementById('file-view');
    const dm = document.getElementById('dom');
    // 
    const span = document.createElement('span');
    span.className = "spinner-border spinner-border-sm";
    span.id = "wait-file";
    // 
    const spanRes = document.createElement('span');
    spanRes.innerHTML = "Votre fichier est envoyé avec succès \tNous vous repondrons après confirmation de la Banque \tMerci à très bientôt";
    spanRes.id = "response";
    // 
    const spanRd = document.createElement('span');
    spanRd.innerHTML = "<b class='text-success'>Votre fichier est prêt à être envoyé</b>";
    spanRd.id = "ready";
    // on timeout
    const spanTimeout = document.createElement('span');
    spanTimeout.innerHTML = "<b><span class='fa fa-warning'></span>&nbsp;Error: verifiez votre connection internet, puis reaissayer</>";
    spanTimeout.id = "ontimeout";
    // craeting botton
    const btn = document.createElement('button');
    btn.className = "btn btn-primary w-100";
    btn.id = "btn-upload";
    btn.type = "submit";
    btn.innerHTML = "<b>Envoyer</b>";
// event when file uploaded
    input.onchange = function(e){
      previewDOM.appendChild(span);
      previewDOM.classList.remove('d-none');
      const files = e.target.files[0];
      const fileName = files.name;
      const fileExtension = files.type.split("/").pop();
        if(allowedFile.includes(fileExtension.toLowerCase())){
            // formData 
          whenUploaded.innerHTML = "<span class='fa fa-check text-success'></span>";
          previewDOM.removeChild(span);
          previewDOM.classList.remove('d-none');
          previewDOM.appendChild(spanRd);
          dm.appendChild(btn);
          if(document.getElementById('ontimeout')){
            previewDOM.removeChild(spanTimeout)
          }

        }else{
          whenUploaded.innerHTML = "<span class='fa fa-check text-danger'></span>";
          previewDOM.classList.add('d-none');
          previewDOM.removeChild(span);
          if(document.getElementById('ontimeout')){
            previewDOM.removeChild(spanTimeout)
          }
        }
    }
    btn.onclick = function(evt){
      evt.target.disabled = true;
      if(document.getElementById('ontimeout')){
            previewDOM.removeChild(spanTimeout)
      }
      const span = document.createElement('span');
      span.className = "spinner-border spinner-border-sm";
      span.id = "wait-file";
      previewDOM.removeChild(spanRd);
      previewDOM.appendChild(span);
      const formdata = new FormData(document.getElementById('uploadFile'));
      evt.target.disabled = true;
      input.classList.add('d-none');
      const xhr = new XMLHttpRequest();
          xhr.open("POST", "./js/_onBilling.php",true);
          //xhr.timeout = 30000;
          xhr.onreadystatechange = function(){
            if(xhr.status === 200 && xhr.readyState === 4){
              const rhs = xhr.responseText;
              switch (rhs) {
                case '2020':
                setTimeout(function(){
                  // removing input file
                  dm.removeChild(btn);
                  previewDOM.removeChild(span);
                  if(document.getElementById('ontimeout')){
                    previewDOM.removeChild(spanTimeout);
                  }
                  previewDOM.appendChild(spanRes);
                  evt.target.disabled = true;
                  //alert(1)
                },200);
                  break;
                case '500':
                spanTimeout.innerHTML = '<b class="text-danger"><span class="fa fa-warning"></span> Désolé ce véhicule possede déjà un coupon\tVous avez déjà effectué cette action';
                if(!document.getElementById('ontimeout')){
                  previewDOM.innerHTML = null;
                  previewDOM.appendChild(spanTimeout);
                }
                break;
                default:
                alert(rhs)
                spanTimeout.innerHTML = '<b class="text-danger"><span class="fa fa-warning"></span> Une erreur inconnue s\'est produite';
                if(!document.getElementById('ontimeout')){
                  previewDOM.innerHTML = null;
                  previewDOM.appendChild(spanTimeout);
                }
                  break;
              }
              // if(xhr.responseText === '2020'){
              //   setTimeout(function(){
              //     // removing input file
              //     dm.removeChild(btn);
              //     previewDOM.removeChild(span);
              //     if(document.getElementById('ontimeout')){
              //       previewDOM.removeChild(spanTimeout);
              //     }
              //     previewDOM.appendChild(spanRes);
              //     evt.target.disabled = true;
              //     alert(1)
              //   },200);
              // }else if(xhr.responseText === '500'){
              //   spanTimeout.innerHTML = '<b class="text-danger"><span>Désolé ce véhicule possede déjà un coupon</span>';
              //   if(!document.getElementById('ontimeout')){
              //     previewDOM.innerHTML = NULL;
              //     previewDOM.appendChild(spanTimeout);
              //   }
              // }
            }
          }
        /*  xhr.ontimeout = function(){
            previewDOM.appendChild(spanTimeout);
            input.classList.remove('d-none');
          } */
          xhr.send(formdata);
    }
</script>
<?php
      }else{
?>
      <div class="container">
         <div class="alert alert-default">
           <span class="fa fa-warning text-danger"></span> <b> Are you a funcking guy what are doing here go Home Chose car get reference then retry</b>
           <p>Call me <a href="mailto:davidmened@gmail.com" class="nav-link text-danger">davidmened@gmail.com</a></p>
           <span class="float-right fa fa-thumb-down"></span>
         </div>
      </div>
<?php        
      }

 }else{
 
 ?>
	<div class="container">
	      <div class="alert alert-danger">
    		<span class="fa fa-warning text-danger"></span>
    		<b>Vous n'ête pas autorisé à être ici </b>
    		<p><b class="text-danger">Are you a fucking Guy what are you doing here</b></p>
	    </div>
	</div>
 <?php
    
 }

?>