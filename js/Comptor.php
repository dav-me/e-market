<?php 
function getUserIP() {
   /* $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_X_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if(isset($_SERVER['HTTP_X_CLUSTER_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_X_CLUSTER_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if(isset($_SERVER['REMOTE_ADDR']))
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress; */
    //  if (filter_var($ip, FILTER_VALIDATE_IP) === FALSE) {
    //     $ip = $_SERVER["REMOTE_ADDR"];
    //     if ($deep_detect) {
    //         if (filter_var(@$_SERVER['HTTP_X_FORWARDED_FOR'], FILTER_VALIDATE_IP))
    //             $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    //         if (filter_var(@$_SERVER['HTTP_CLIENT_IP'], FILTER_VALIDATE_IP))
    //             $ip = $_SERVER['HTTP_CLIENT_IP'];
    //     }
    // } else {
    //     $ip = $_SERVER["REMOTE_ADDR"];
    // }
    // date_default_timezone_set("UTC");
    // $has = date("Ymd");
    // $has = sha1($has);
    // if(isset($_COOKIE["visitor_L1000_dvd_dev"])){
    //   $cookies = $_COOKIE["visitor_L1000_dvd_dev"];
    // }else{
    //   setcookie("visitor_L1000_dvd_dev",$has);
    //   // h6r6gmobhun6605f5eujqac2m2
    // }
    // setcookie('INDENTL','david maene');
    $except = rand(10,10000);
    return $cookies = $_COOKIE["PHPSESSID"] ?? $_SESSION['_userId_'] ?? $except;
}
  function _countLocationCars($bdd){
    $l = $bdd->prepare('SELECT COUNT(*) FROM _cars_table WHERE _cars_table.categorie = ?');
    $l->execute([84]);
    $l = $l->fetchColumn();
    return $l;
  } 
  function _countSalesCars($bdd){
    $l = $bdd->prepare('SELECT COUNT(*) FROM _cars_table WHERE _cars_table.categorie = ?');
    $l->execute([95]);
    $l = $l->fetchColumn();
    return $l;
  }
  function _countBataCars($bdd){
    $l = $bdd->prepare('SELECT COUNT(*) FROM _bataTable_cars');
    $l->execute();
    $l = $l->fetchColumn();
    return $l;
  }
  function _testingIfPrefer($co,$idcar,$bdd){
    $pre = $bdd->prepare("SELECT COUNT(*) FROM _preference WHERE idUser = ? AND idCar = ?");
    $pre->execute([$co,$idcar]);
    $pre = $pre->fetchColumn();
    if(!empty($pre)){
      return true;
    }else{
      return false;
    }
  }
  function _testingIfAlreadyViewed($co,$idcar,$bdd){
    $pre = $bdd->prepare("SELECT COUNT(*) FROM _historique WHERE idUser = ? AND idCar = ?");
    $pre->execute([$co,$idcar]);
    $pre = $pre->fetchColumn(); 
    if(!empty($pre)){
      $pre = $bdd->prepare("DELETE FROM _historique WHERE idUser = ? AND idCar = ?");
      if($pre->execute([$co,$idcar])) return false;
    }else{
      return false;
    }
  }
  function _setCustomerPreference($co,$idcar,$bdd){
    if (!_testingIfPrefer($co,$idcar,$bdd)) {
      $pre = $bdd->prepare('INSERT INTO _preference (`idUser`,`idCar`) VALUES (?,?)');
      if ($pre->execute([$co,$idcar])) {
        return true;
      }
    }else return false;
  }
  function _getCustomerPreference($idcus,$bdd){
    $pre = $bdd->prepare('SELECT * FROM _preference WHERE idUser = ? LIMIT 6');
    $pre->execute(array($idcus));
    $pre = $pre->fetchAll();
    if(count($pre) > 0){
      for ($i=0; $i < count($pre) ; $i++) { 
       $product = new Product(
       $pre[$i]['id'],
       $pre[$i]['model'],
       $pre[$i]['marque'],
       $pre[$i]['description'],
       $pre[$i]['price'],
       $pre[$i]['volant'],
       $pre[$i]['portes'],  
       $pre[$i]['siege'],
       $pre[$i]['carburant'],
       $pre[$i]['coleur'],
       $pre[$i]['transmition'],
       $pre[$i]['categorie'],
       $pre[$i]['imgPricipale'],
       $pre[$i]['img1'],
       $pre[$i]['img2'],
       $pre[$i]['img3'],
       $pre[$i]['img4'],
       $pre[$i]['img5'],
       $pre[$i]['img6'],
       $pre[$i]['img7'],
       $pre[$i]['img8'],
       $pre[$i]['img9']);
         $productArray[$i] = $product;
       }
     // echo(count($pre));
     return $productArray;
     }

  }
  function _setMyRecentViewed($ck,$idcar,$bdd){
     if (!_testingIfAlreadyViewed($ck,$idcar,$bdd)) {
      $pre = $bdd->prepare('INSERT INTO _historique (`idUser`,`idCar`) VALUES (?,?)');
      if ($pre->execute([$ck,$idcar])) {
        return true;
      }
     }
  }
  function _getCustomerLatestViewed($idcus,$bdd){
    $productArray = [];
    $pre = $bdd->prepare('SELECT * FROM _historique WHERE idUser = ? ORDER BY id DESC LIMIT 6');
    $pre->execute(array($idcus));
    $pre = $pre->fetchAll();
    for($i = 0; $i < count($pre); $i++){
      $idCar = $pre[$i]['idCar'];
      $product = _onLoadSingleProduct($idCar,$bdd);
      array_push($productArray,$product);
    }
    return $productArray;
  }
  function _onQueringForAssistance($sender, $mssg, $bdd){
    $r = $bdd->prepare('INSERT INTO _needAssistance (`_message_client`,`_idClient`,`_ispending`) VALUES (?,?,?)');
    if($r->execute([$mssg,$sender,1])){
      return true;
    }else{
      return false;
    }
  }
  function _onLoadUserMssg($client,$bdd){
    $client = trim($client);
    $re = $bdd->prepare('SELECT * FROM _needAssistance WHERE _idClient = ? GROUP BY _date ORDER BY _date ASC');
    $re->execute([$client]);
    $re = $re->fetchAll();
    $mssg_box = [];
    if(count($re) > 0){
      for($i = 0; $i < count($re); $i++){
        $message = new Message(
          $re[$i]['id'],
          $re[$i]['_message_client'],
          $re[$i]['_message_ass'],
          $re[$i]['_date'],
          $re[$i]['_ispending']);
          // $re[$i]['_idClient'],
          array_push($mssg_box,$message);
      }
      return $mssg_box;
    }
  }
  function count_row($categorie,$bdd){
   $req = $bdd->prepare('SELECT COUNT(*) FROM _cars_table WHERE categorie = ?');
   $req->execute([(int)$categorie]);
   $req = $req->fetchColumn();
   return $req;
 }
 function count_row_all($bdd){
   $req = $bdd->prepare('SELECT COUNT(*) FROM _cars_table');
   $req->execute();
   $req = $req->fetchColumn();
   return $req;
 }
  function _verifIfLikedBefore($idCar,$idUser,$bdd){
    $pre = $bdd->prepare('SELECT COUNT(*) FROM _favorite WHERE idUser = ? AND _idCar = ?');
    $pre->execute([$idCar,$idUser]);
    $pre = $pre->fetchColumn();
    if($pre === 1){
      return false;
    }else return true;
  }
  function onAddToMyFavorite($idCar,$bdd){
    $ck = getUserIP();
    if (_setCustomerPreference($ck,$idCar,$bdd)) {
        _setMyRecentViewed($ck,$idcar,$bdd);
    }
  }
  function onAddToMyHisoric($idCar,$bdd){
    $ck = getUserIP();
    _setMyRecentViewed($ck,$idCar,$bdd);
    // if (_setMyRecentViewed($ck,$idCar,$bdd)) {
    // }
  }
  function loadForPaginationAll($offset,$recordPerPage,$bdd){
   #$categ = (int) $categorie ?? 95;
   $per_page = (int) $offset;
   $start = (int) $recordPerPage;
   $pre = $bdd->prepare("SELECT * FROM _cars_table ORDER BY id DESC LIMIT :limit OFFSET :offset ");
   $pre->bindValue(':limit', (int) $start, PDO::PARAM_INT);
   $pre->bindValue(':offset', (int) $per_page, PDO::PARAM_INT);
   #$pre->bindValue(':cat', (int) $categ, PDO::PARAM_INT);
   $pre->execute();
   $pre = $pre->fetchAll();
   shuffle($pre);
     if(count($pre) > 0){
                     for ($i=0; $i < count($pre) ; $i++) { 
                      $product = new Product(
                      $pre[$i]['id'],
                      $pre[$i]['model'],
                      $pre[$i]['marque'],
                      $pre[$i]['description'],
                      $pre[$i]['price'],
                      $pre[$i]['volant'],
                      $pre[$i]['portes'],
                      $pre[$i]['siege'],
                      $pre[$i]['carburant'],
                      $pre[$i]['coleur'],
                      $pre[$i]['transmition'],
                      $pre[$i]['categorie'],
                      $pre[$i]['imgPricipale'],
                      $pre[$i]['img1'],
                      $pre[$i]['img2'],
                      $pre[$i]['img3'],
                      $pre[$i]['img4'],
                      $pre[$i]['img5'],
                      $pre[$i]['img6'],
                      $pre[$i]['img7'],
                      $pre[$i]['img8'],
                      $pre[$i]['img9']);
                        $productArray[$i] = $product;
                      }
                    // echo(count($pre));
                    return $productArray;
                    }
 
 }
 function loadForPagination($offset,$recordPerPage,$categorie,$bdd){
   $categ = (int) $categorie ?? 95;
   $per_page = (int) $offset;
   $start = (int) $recordPerPage;
   $pre = $bdd->prepare("SELECT * FROM _cars_table WHERE categorie = :cat LIMIT :limit OFFSET :offset");
   $pre->bindValue(':limit', (int) $start, PDO::PARAM_INT);
   $pre->bindValue(':offset', (int) $per_page, PDO::PARAM_INT);
   $pre->bindValue(':cat', (int) $categ, PDO::PARAM_INT);
   $pre->execute();
   $pre = $pre->fetchAll();
   shuffle($pre);
     if(count($pre) > 0){
                     for ($i=0; $i < count($pre) ; $i++) { 
                      $product = new Product(
                      $pre[$i]['id'],
                      $pre[$i]['model'],
                      $pre[$i]['marque'],
                      $pre[$i]['description'],
                      $pre[$i]['price'],
                      $pre[$i]['volant'],
                      $pre[$i]['portes'],
                      $pre[$i]['siege'],
                      $pre[$i]['carburant'],
                      $pre[$i]['coleur'],
                      $pre[$i]['transmition'],
                      $pre[$i]['categorie'],
                      $pre[$i]['imgPricipale'],
                      $pre[$i]['img1'],
                      $pre[$i]['img2'],
                      $pre[$i]['img3'],
                      $pre[$i]['img4'],
                      $pre[$i]['img5'],
                      $pre[$i]['img6'],
                      $pre[$i]['img7'],
                      $pre[$i]['img8'],
                      $pre[$i]['img9']);
                        $productArray[$i] = $product;
                      }
                    // echo(count($pre));
                    return $productArray;
                    }
 
 }
function _checkTimesViewed($ip,$page,$bdd){
    $req = $bdd->prepare("SELECT * FROM _visitors WHERE _visitors._ipVisitor = ? AND _visitors._page = ?");
    $req->execute([$ip,$page]);
    $req = $req->fetch();
    if($req['_times'] >= 1){
        return $req['_times'];
    }else{
        return 0;
    }
}
function _onVerifyMeThenLogIn($tkn,$email,$idUser,$bdd){

    $req = $bdd->prepare('SELECT * FROM _customer_ WHERE _cst_id = ? AND _cst_tkn = ?  AND _cst_mail_ = ?');
    $req->execute([$idUser,$tkn,$email]);
    $req = $req->fetch();

    switch ($req['_cst_isActivated']) {
        case 0:
            if(is_numeric($req['_cst_id'])){
                $c = $bdd->prepare('UPDATE _customer_ SET _cst_isActivated = ? WHERE _cst_id = ? AND _cst_tkn = ?  AND _cst_mail_ = ?');
                if($c->execute([1,$idUser,$tkn,$email])){
                    $myCustomer = new Customer($req['_cst_id'],$req['_cst_fst_name_'],$req['_cst_lst_name_'],$req['_cst_mail_'],$req['_cst_phone_']);
                    _getMeIn($myCustomer);
                    return 200;
                }else{
                    return NULL;
                }
            }else if(empty($req['_cst_id'])){
                return 404;
            }
        break;
        case 1:
            return 300;
        break;
        
        default:
           return 404;
        break;
    }
    
}
function _onGettingCustomer($key,$bdd){
  $req = $bdd->prepare('SELECT * FROM _customer_ WHERE _cst_id = ?');
  $req->execute([$key]);
  $req = $req->fetch();
  if(!empty($req['_cst_id']) && $req['_cst_isActivated'] === '0'){
    return array($req['_cst_id'],$req['_cst_tkn'],$req['_cst_fst_name_'],$req['_cst_lst_name_'],$req['_cst_mail_']);
  }else return NULL;
}
function _conpterUser($page,$bdd){
    $ip = getUserIP();
    $times = _checkTimesViewed($ip,$page,$bdd);
    if ($times >= 1) {
        $req = $bdd->prepare("UPDATE _visitors SET _times = ? WHERE _page = ? AND _ipVisitor = ?");
        $time = $times + 1;
        $req->execute([$time,$page,$ip]);
    }else{
        $req = $bdd->prepare("INSERT INTO _visitors(_ipVisitor,_times,_page) VALUES (?,?,?)");
        $req->execute([$ip,1,$page]);
    } 
}
function _test_if_already_need_ass($bdd){
  $session = getUserIP();
  $re = $bdd->prepare("SELECT COUNT(*) FROM _assistancemessage WHERE _idUser = ?");
  $re->execute([$session]);
  $re = $re->fetchColumn();
  if($re !== 0){
    return true;
  }else{
    return false;
  }

}
 function _onLoadSingleCommand($cus,$car,$ref,$bdd){
          $pre = $bdd->prepare("SELECT * FROM _prd_commande_ WHERE _cmmd_id_cstmer_ = ? AND _cmmd_id_prd_ = ?");
          $pre->execute([$cus,$car]); #$rowCount = $pre->rowCount();
          $req = $pre->fetch();
          if($pre->rowCount() === 1){
              return new Command(
                $req['_cmmd_id_prd_'],
                $req['_cmmd_id_prd_'],
                $req['_cmmd_id_prd_'],
                $req['_cmmd_id_cstmer_'],
                $req['_cmmd_id_cstmer_'],
                $req['_cmmd_timestamp_'],
                $req['_cmmd_ctgrie_'],
                $req['_refCar']);
          }else return null;
  }
 function _testingIfRanted($idcar,$idUser,$bdd){
  $pre = $bdd->prepare("SELECT _refCar FROM _prd_commande_ WHERE _cmmd_id_prd_ = ? AND _cmmd_id_cstmer_  = ?");
  $pre->execute([$idcar,$idUser]);
  $pre = $pre->fetch();
  if(!empty($pre['_refCar']) OR $pre['_refCar'] !== ''){
    return false;
  }else return true;
 }
//  function _onBillings($tkn,$iccar,$refCar,$coupon,$bdd){
//        $eqv = _testingIfRanted($iccar,$tkn,$bdd);
//        if($eqv === true){
//          $req = $bdd->prepare("UPDATE _prd_commande_ SET _couponFile = ?,_isAct = ?,_refCar = ? WHERE _cmmd_id_prd_ = ? AND _cmmd_id_cstmer_ = ?");
//         if(!$req->execute([$coupon,1,$refCar,$iccar,$tkn])){
//             return 500;
//         }else{
//             return 200;
//         }
//        }else return 500;
//     }
 function _onNotifyOnBilling($refCar,$fname,$iccar,$bdd){
   
 }
 function count_row_by_keyword_prec($key,$bdd){
  $req = $bdd->prepare('SELECT COUNT(*) FROM _cars_table WHERE model LIKE '%$key%' ?');
  $req->execute();
  $req = $req->fetchColumn();
  return $req;
 }
 function _onLoadMostLiked($bdd){
  $productArray = [];
  $pre = $bdd->prepare("SELECT idCar FROM _historique GROUP BY idCar HAVING COUNT(idCar) > 1 ORDER BY SUM(idCar) DESC LIMIT 0,5");
  $pre->execute();
  $pre = $pre->fetchAll();
  for($i = 0; $i < count($pre); $i++){
    $idCar = $pre[$i]['idCar'];
    $product = _onLoadSingleProduct($idCar,$bdd);
    array_push($productArray,$product);
  }
  return $productArray;
  // shuffle($pre);
  //   if(count($pre) > 0){
  //     for ($i=0; $i < count($pre) ; $i++) { 
  //       $product = new Product(
  //       $pre[$i]['id'],
  //       $pre[$i]['model'],
  //       $pre[$i]['marque'],
  //       $pre[$i]['description'],
  //       $pre[$i]['price'],
  //       $pre[$i]['volant'],
  //       $pre[$i]['portes'],
  //       $pre[$i]['siege'],
  //       $pre[$i]['carburant'],
  //       $pre[$i]['coleur'],
  //       $pre[$i]['transmition'],
  //       $pre[$i]['categorie'],
  //       $pre[$i]['imgPricipale'],
  //       $pre[$i]['img1'],
  //       $pre[$i]['img2'],
  //       $pre[$i]['img3'],
  //       $pre[$i]['img4'],
  //       $pre[$i]['img5'],
  //       $pre[$i]['img6'],
  //       $pre[$i]['img7'],
  //       $pre[$i]['img8'],
  //       $pre[$i]['img9']);
  //       array_push($productArray,$product);
  //         // $productArray[$i] = $product;
  //       }
  //     // echo(count($pre));
  //     return $productArray;
  //     }
 }
 function _getCarsByMarque($offset,$no_elem_per_page,$keyword,$bdd){
  $per_page = (int) $offset;
  $start = (int) $no_elem_per_page;
  $pre = $bdd->prepare("SELECT * FROM _cars_table WHERE marque = :cat LIMIT :limit OFFSET :offset");
  $pre->bindValue(':limit', (int) $start, PDO::PARAM_INT);
  $pre->bindValue(':offset', (int) $per_page, PDO::PARAM_INT);
  $pre->bindValue(':cat',$keyword, PDO::PARAM_STR);
  $pre->execute();
  $pre = $pre->fetchAll();
  shuffle($pre);
    if(count($pre) > 0){
                    for ($i=0; $i < count($pre) ; $i++) { 
                     $product = new Product(
                     $pre[$i]['id'],
                     $pre[$i]['model'],
                     $pre[$i]['marque'],
                     $pre[$i]['description'],
                     $pre[$i]['price'],
                     $pre[$i]['volant'],
                     $pre[$i]['portes'],
                     $pre[$i]['siege'],
                     $pre[$i]['carburant'],
                     $pre[$i]['coleur'],
                     $pre[$i]['transmition'],
                     $pre[$i]['categorie'],
                     $pre[$i]['imgPricipale'],
                     $pre[$i]['img1'],
                     $pre[$i]['img2'],
                     $pre[$i]['img3'],
                     $pre[$i]['img4'],
                     $pre[$i]['img5'],
                     $pre[$i]['img6'],
                     $pre[$i]['img7'],
                     $pre[$i]['img8'],
                     $pre[$i]['img9']);
                       $productArray[$i] = $product;
                     }
                   // echo(count($pre));
                   return $productArray;
                   }else return array();
 }
 function count_row_by_keyword($key,$bdd){
  $req = $bdd->prepare('SELECT COUNT(*) FROM _cars_table WHERE marque = ?');
  $req->execute([$key]);
  $req = $req->fetchColumn();
  return $req;
 }
 function count_row_by_keyword_src($key,$bdd){
  $req = $bdd->prepare("SELECT COUNT(*) FROM _cars_table WHERE marque LIKE '%$key%' OR model LIKE '%$key%'");
  // $req->bindValue(':cat',$key, PDO::PARAM_STR);
  $req->execute();
  $req = $req->fetchColumn();
  return $req;
 }
 function _getCarsByMarque_src($offset,$no_elem_per_page,$keyword,$bdd){
  $per_page = (int) $offset;
  $start = (int) $no_elem_per_page;
  $pre = $bdd->prepare("SELECT * FROM _cars_table WHERE marque LIKE '%$keyword%' OR model LIKE '%$keyword%' LIMIT :limit OFFSET :offset");
  $pre->bindValue(':limit', (int) $start, PDO::PARAM_INT);
  $pre->bindValue(':offset', (int) $per_page, PDO::PARAM_INT);
  // $pre->bindValue(':cat',$keyword, PDO::PARAM_STR);
  $pre->execute();
  $pre = $pre->fetchAll();
  shuffle($pre);
    if(count($pre) > 0){
                    for ($i=0; $i < count($pre) ; $i++) { 
                     $product = new Product(
                     $pre[$i]['id'],
                     $pre[$i]['model'],
                     $pre[$i]['marque'],
                     $pre[$i]['description'],
                     $pre[$i]['price'],
                     $pre[$i]['volant'],
                     $pre[$i]['portes'],
                     $pre[$i]['siege'],
                     $pre[$i]['carburant'],
                     $pre[$i]['coleur'],
                     $pre[$i]['transmition'],
                     $pre[$i]['categorie'],
                     $pre[$i]['imgPricipale'],
                     $pre[$i]['img1'],
                     $pre[$i]['img2'],
                     $pre[$i]['img3'],
                     $pre[$i]['img4'],
                     $pre[$i]['img5'],
                     $pre[$i]['img6'],
                     $pre[$i]['img7'],
                     $pre[$i]['img8'],
                     $pre[$i]['img9']);
                       $productArray[$i] = $product;
                     }
                   // echo(count($pre));
                   return $productArray;
                   }else return array();
 }
 function _onVerifyMail($j,$bdd){
   $customer = _onGettingCustomer($j,$bdd);
   if($customer !== NULL){
   	    $cmpl = time();
   	    list($id,$tkn,$fstN,$lstN,$email) = $customer;
   	    $from  ='noreply@lesmilleservices.com';
            $from_ = "L1000";
            $subject = 'Vérification | Adresse mail';
            $message = '<!DOCTYPE html>
<html
<head>
    <meta charset="utf-8"> <!-- utf-8 works for most cases -->
    <meta name="viewport" content="width=device-width"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- Use the latest (edge) version of IE rendering engine -->
    <meta name="x-apple-disable-message-reformatting">  <!-- Disable auto-scale in iOS 10 Mail entirely -->
    <title></title> <!-- The title tag shows in email notifications, like Android 4.4. -->

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">

    <!-- CSS Reset : BEGIN -->
    <style>

        /* What it does: Remove spaces around the email design added by some email clients. */
        /* Beware: It can remove the padding / margin and add a background color to the compose a reply window. */
        html,

</style>

</head>

<body width="100%" style="margin: 0; padding: 0 !important; mso-line-height-rule: exactly; background-color: #222222;">
	<center style="width: 100%; background-color: #f1f1f1;">
    <div style="display: none; font-size: 1px;max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden; mso-hide: all; font-family: sans-serif;">
      &zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;
    </div>
    <div style="max-width: 600px; margin: 0 auto;" class="email-container">
    	<!-- BEGIN BODY -->
      <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin: auto;">
      	<tr>
          <td valign="top" class="bg_white" style="padding: 1em 2.5em 0 2.5em;">
          	<table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
          		<tr>
                      <td class="logo" style="text-align: center;">
                        <img src="https://lesmilleservices.com/_bx_assoc_imgs_/_bx_caroussel_/3.jpeg" style="width:200px" alt="logo mille services" class="img-class">
			            <h1><a href="#">Les Mille Services</a></h1>
			          </td>
          		</tr>
          	</table>
          </td>
	      </tr><!-- end tr -->
			<tr>
          <td valign="middle" class="hero hero-2 bg_white" style="padding: 2em 0 4em 0;">
            <table>
            	<tr>
            		<td>
            			<div class="text" style="padding: 0 2.5em; text-align: left;">
                            <h2>Votre compte a été crée</h2>
            			</div>
            		</td>
            	</tr>
            </table>
          </td>
          </tr><!-- end tr -->
          <tr>
              <td class=" bg_white">
                <div class="heading-section" style="padding: 0 2.5em; text-align: left;">
                    <h2>Bonjour, <b>'.$fstN.'&nbsp;'.$lstN.'</b></h2>
                    <p>nous avons pris en compte votre requete de démande de création de compte; Cepedant une vérification de votre adresse mail nous est d\'une importsnce capitale</p>
                    <p>Pour la vérification de votre confirmation de votre adresse mail cliquer juste sur le lien suivant 
                    <a href="https://lesmilleservices.com/?page=_verify-mail-me&tkn_='.$tkn.'&cmpl='.$cmpl.'&em='.$email.'&id_rec='.$id.'" target="_blank" rel="noopener noreferrer">href="https://lesmilleservices.com/?page=_verify-mail-me&tkn_='.$tkn.'&cmpl='.$cmpl.'&em='.$email.'&id_rec='.$id.'"</a></p>
                </div>
              </td>
          </tr>   
      </table>
	      <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin: auto;">
      	<tr>
          <td valign="middle" class="bg_white footer">
            <table width="88%">
            	<tr style="text-align: center;">
                <td valign="middle" style="padding-top: 20px; text-align: center;">
                	<h3 class="heading" style="float: left;">Contact</h3>
                </td>
              </tr>
              <tr>
                <td valign="middle" style="padding-top: 20px; text-align: left;">
                	<ul>
                		<li>+243 974 228 949</li>
                		<li>+243 815 864 596</li>
                		<li>contact@lesmilleservices.com</li> 
                	</ul>
                </td>
              </tr>
            </table>
          </td>
        </tr><!-- end: tr -->
        <tr>
          <td class="bg_light" style="text-align: center;">
          	<p>All rights reserved &copy; <a href="#" style="color: rgba(0,0,0,.8);">Les mille services </a></p>
          </td>
        </tr>
      </table>
    </div>
  </center>
</body>
</html>';
           $headers  = "MIME-Version: 1.0 \n";
	   $headers .= "Content-type: text/html; charset=iso-8859-1 \n";
	   $headers .= 'From: '.$from_.'<'.$from.'>' . "\r\n".
               	    "MIME-Version: 1.0" . "\r\n" .
                    "Content-type: text/html; charset=UTF-8" . "\r\n";
	   $headers .= "Disposition-Notification-To: $from  \n";
	   // Message de Priorité haute
	   // -------------------------
	   $headers .= "X-Priority: 1  \n";
	   $headers .= "X-MSMail-Priority: High \n";
                // 'X-Mailer: PHP/' . phpversion();
           @mail($email,$subject,$message,$headers);
   }
 }   
?>