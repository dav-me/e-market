<?php

    // header('Content-type: text/xml');
    include('conf_funct.php');
    // var_dump($_FILES);
    $error_message = [];
    $arrayFile = [];
// adding admin in database
if (isset($_POST['fstName'])) {
    _insertnewAdmin(
        trim($_POST['fstName']),
        trim($_POST['lstName']),
        trim($_POST['emailfrom']),
        trim($_POST['phonenumber']),
        trim($_POST['password_1']),
        $bdd);
}
// adding new product in database

if (isset($_POST['fullname'])){
    foreach ($_FILES as $file) {
        if (
        $file['error'] == UPLOAD_ERR_EXTENSION 
        || $file['error'] == UPLOAD_ERR_CANT_WRITE 
        || $file['error'] == UPLOAD_ERR_NO_TMP_DIR
        || $file['error'] == UPLOAD_ERR_PARTIAL
        || $file['error'] == UPLOAD_ERR_FORM_SIZE
        || $file['error'] == UPLOAD_ERR_EXTENSION
        || $file['error'] == UPLOAD_ERR_INI_SIZE) {
            array_push($error_message,$file['error']);
            echo(500);
            continue;
        }
        $destination_dir = '../../../_bx_assoc_imgs_/_bx_assoc_imgs_/'.$file['name'];
        $tmp_dest_dir = $file['tmp_name'];
        move_uploaded_file($tmp_dest_dir,$destination_dir);
        array_push($arrayFile,$file['name']);

      /*  if (move_uploaded_file($tmp_dest_dir,$destination_dir)) {
        array_push($arrayFile,$file['name']);
        }  */
    }
   if(_insertingBataPrd(
    array_merge([
    $_POST['fullname'],
    $_POST['marque'],
    $_POST['desc'],
    57575,
    $_POST['forwheel'],
    $_POST['porte'],
    $_POST['sieges'],
    $_POST['carburant'],
    $_POST['color'],
    $_POST['transmission']
    ]
    ,$arrayFile),$bdd)){
        echo(http_response_code());
    }else{
        echo(500);
    } 
   /* var_dump(_insertingBataPrd(
    array_merge([
    $_POST['fullname'],
    $_POST['marque'],
    $_POST['desc'],
    57575,
    $_POST['forwheel'],
    $_POST['porte'],
    $_POST['sieges'],
    $_POST['carburant'],
    $_POST['color'],
    $_POST['transmission']
    ]
    ,$arrayFile),$bdd));
    */
}
    // hypothese que ce ficher ne va jamais et jamai manque dans le formulaire
    
?>