<?php 
include('../js/_function.php');
if(!empty(getUserIP())){
    $clt = @getUserIP();
    $mssgs = @_onLoadUserMssg($clt,$bdd);
    if(!empty($mssgs)){
    foreach($mssgs as $mssg) {
    $mssgas = strlen($mssg->mess_ass) > 0 ? $mssg->mess_ass : '<span class="spinner-grow spinner-grow-sm text-center"';
?>
        <!-- from me -->
        <div class="content pt-1 justify-content-end d-flex">
            <div class="w-75">
                <div class="w-100 text-muted"><small><?php echo($mssg->mess_date) ?></small></div>
                <p class="card-text border bg-primary p-1 text-white rounded pf-3"><?php echo($mssg->mess_client) ?></p>
            </div>
        </div>
        <!-- end -->
        <!-- to me -->
       <!-- <div class="content pt-1 justify-content-start d-flex">
            <div class="w-75">
                <div class="w-100 text-muted"><small><?php echo($mssg->mess_date) ?></small></div>
                <p class="card-text border bg-danger text-white p-1 rounded pf-3"><?php echo($mssgas) ?></p>
            </div>
        </div> -->
        <!-- end  -->

<?php
        }
    }else{
?>
<div class="col-12 text-center">
  <h4><span class="spinner-grow spinner-grow-md"></span></h4>
  <h6 class="text-muted">Services clients : que puis-je pour vous ? </h6>
</div>
<?php

    }
}
?>