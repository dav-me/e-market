<?php 
    if (isset($_SESSION['_getmeinplzdv_']) && $_SESSION['_getmeinplzdv_'] != null && !empty($_GET['_cab'])) {
      $item = trim($_GET['_cab']);
    //   global $rpl; 
      $rpl = TRUE;
      $item = (int) $item;
      $message = (_get_single_mssg($item,$bdd));
?>
    <!-- Main content -->
<?php if($message !== null){ ?>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
            <a href="?_trgPage_=_get_message_pg_" class="btn btn-primary btn-block mb-3">Boite de reception</a>

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Options</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Labels</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <ul class="nav nav-pills flex-column">
                  <li class="nav-item">
                    <a class="nav-link" href="#"><i class="far fa-circle text-danger"></i> Important</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#"><i class="far fa-circle text-warning"></i> Promotions</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#"><i class="far fa-circle text-primary"></i> Social</a>
                  </li>
                </ul>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        <div class="col-md-9 px-0">
            <div class="col-md-12">
                <div class="card card-primary card-outline" id="card-outline">
                <div class="card-header">
                <h3 class="card-title">Lecture E-mail</h3>

                <div class="card-tools">
                    <a href="#" class="btn btn-tool" data-toggle="tooltip" title="Previous"><i class="fas fa-chevron-left"></i></a>
                    <a href="#" class="btn btn-tool" data-toggle="tooltip" title="Next"><i class="fas fa-chevron-right"></i></a>
                </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                <div class="mailbox-read-info">
                    <h5>Message d'assistance</h5>
                    <h6><span class="text-muted">From:</span> <?php echo($message->addmail) ?> </h6>
                    <span class="mailbox-read-time float-right"><small><b><?php  ?></b></small></span></h6>
                </div>
                <!-- /.mailbox-read-info -->
                <div class="mailbox-controls with-border text-center">
                    <div class="btn-group">
                    <button type="button" class="btn btn-default btn-sm px-3 h" id="del_<?php echo($message->id) ?>" data-toggle="tooltip" data-container="body" title="Supprimer">
                        <i class="far fa-trash-alt"></i> Supprimer</button>
                    <button type="button" class="btn btn-default btn-sm px-3" id="reply" data-toggle="tooltip" data-container="body" title="Reply">
                        <i class="fa fa-reply"></i> Repondre</button>
                    <!-- <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="Forward">
                        <i class="fas fa-share"></i></button> -->
                    </div>
                    <!-- /.btn-group -->
                    <!-- <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" title="Print">
                    <i class="fas fa-print"></i></button> -->
                </div>
                <!-- /.mailbox-controls -->
                <div class="mailbox-read-message justify-content-start border-0">
                    <p><?php echo($message->content) ?></p>
                </div>
                <!-- /.mailbox-read-message -->
                </div>
                <!-- /.card-body -->
                <div class="card-footer bg-white">
                </div>
                <!-- /.card-footer -->
                <div class="card-footer">
                <div class="float-right">
                    <button type="button" class="btn btn-default"><i class="fa fa-reply"></i></button>
                    <!-- <button type="button" class="btn btn-default"><i class="fas fa-share"></i> Forward</button> -->
                </div>
                <!-- <button type="button" class="btn btn-default"><i class="far fa-trash-alt"></i> Delete</button> -->
                <!-- <button type="button" class="btn btn-default"><i class="fas fa-print"></i> Print</button> -->
                &copy; L1000 - 
                </div>
                <!-- /.card-footer -->
            </div>
            <!-- /.card -->
            </div>
            <!-- /.col -->
            <!-- /.col -->
            <div class="col-md-12 d-none" id="respond">
                <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title">Compose New Message</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="form-group">
                    <!-- <input class="form-control col-lg-6 w-75 col-6" placeholder="To:" value="<?php  echo($message->addmail) ?>" readonly> -->
                    <!-- <input class="form-control col-lg-6 w-75 col-6 " placeholder="To:" value="<?php  echo($message->addmail) ?>" readonly> -->
                    <h5><small>Vers</small> : <?php  echo(ucwords($message->name)) ?></h5>
                    <h6 class="text-muted"> <span class="fa fa-envelope pr-2"></span><?php  echo($message->addmail) ?></h6>
                    <h6 class="text-muted"> <span class="fas fa-phone pr-2"></span><?php  echo($message->phone) ?></h6>
                    </div>
                    <div class="form-group">
                    <input class="form-control" placeholder="Subject:" value="Subject : << L1000 | Services Clients >>" readonly>
                    </div>
                    <div class="form-group-">
                        <!-- <textarea id="compose-textarea-" placeholder="Reponse ..." name="textarea" class="form-control pl-1" style="min-height: 200px;max-height:200px">
                        </textarea> -->
                        <input type="text" id="id-message" hidden class="form-control" value="<?php echo($message->id) ?>">
                        <textarea class="form-control" name="compose" id="compose" cols="30" rows="10" style="min-height: 200px;max-height:200px"></textarea>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <div class="float-right">
                    <!-- <button type="button" class="btn btn-default"><i class="fas fa-pencil-alt"></i> Draft</button> -->
                    <button type="submit" class="btn btn-primary" id="onresponding"><i class="far fa-envelope"></i> Envoyer</button>
                    </div>
                    <button type="reset" class="btn btn-default" id="cancel"><i class="fas fa-times"></i> Annuler</button>
                    <strong class="text-success d-none" id="whendone"><span class="fa fa-warning"></span> Message envoyé avec succès</strong>
                </div>
                <!-- /.card-footer -->
                </div>
                <!-- /.card -->
            </div>
          <!-- /.col -->
        </div>
      </div>

      <!-- /.row -->
    </section>
<?php }else{ ?>
    <h1><span class="fa fa-warning text-danger"></span> Une erreur s'est produite </h1>
    <h6>le message que vous cherchez n'existe plus dans la base de données</h6>
<?php  } ?>
    <!-- /.content -->
  <!-- </div> -->
  <!-- /.content-wrapper -->
  <script>
      (function(){
          const bxread = document.getElementById('card-outline');
          const bxreply = document.getElementById('respond');
          const btnreply = document.getElementById('reply');
          const cancel = document.getElementById('cancel');
          const onresponding = document.getElementById('onresponding');
          const btndel = document.getElementsByTagName('button');
        for(let btn of btndel){
           if(btn.type === 'button' && btn.className === 'btn btn-default btn-sm px-3 h'){
               btn.onclick = function(){
                   const item = new String(btn.id);
                   const del = item.substring((item.lastIndexOf('_')+1));
                   if(confirm('Voulez-vous vraiement supprimer ce message ?')){
                       const xhr = new XMLHttpRequest();
                       xhr.open('GET','./dist/js/_phpSubmitionEdit.php?_delmessage='+del, false);
                       xhr.onreadystatechange = function(){
                        if(xhr.readyState === 4 && xhr.status === 200){
                            if(xhr.responseText === '200'){
                                window.location.replace('?_trgPage_=_get_message_pg_');
                            }else{
                                console.log(xhr.responseText)
                                alert('Une erreur vient de se produire sur ');
                                // console.log('je suis sur la bonne voix et il faut que je continu a essayer')
                            }
                        }
                       }
                       xhr.send(null);
                   }
               }
           }
        }
        onresponding.onclick = function(){
          let textarea = document.getElementById('compose');
          let done = document.getElementById('whendone');
          if(textarea.value.length > 10){
            textarea.classList.remove('border-danger');
            const idmessage = document.getElementById('id-message').value;
            const formdata = new FormData();
            formdata.append('idmessage',idmessage);
            formdata.append('response',textarea.value);
            
            const xhr = new XMLHttpRequest();
            xhr.open('POST','./dist/js/_phpSubmitionEdit.php', false);
            xhr.onreadystatechange = function(){
              if(xhr.readyState === 4 && xhr.status === 200){
                if(xhr.responseText === '200'){
                  done.classList.remove('d-none');
                  // alert(done.className)
                }else{
                  alert('une erreur vient de se produire')
                  done.classList.add('d-none');
                }
              }
            }
            xhr.send(formdata);
            // alert(textarea.value)
          }else{
            textarea.classList.add('border-danger');
            done.classList.add('d-none');
            // console.log(1)
          }
        }
         btnreply.addEventListener('click', function(){
            bxreply.classList.remove('d-none');
            bxread.classList.add('d-none');
         })
         cancel.onclick = function(){
            bxreply.classList.add('d-none');
            bxread.classList.remove('d-none');
         }
          
      })();
  </script>
<?php }else{ ?> <script>window.location.replace('https://lesmilleservices.com') </script> <?php } ?>