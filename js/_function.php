<?php
      session_start(); //starting my session
      $z = rand(1,time());
      if(!isset($_SESSION['_userId_']) && !isset($_COOKIE['INDENTL'])){
        setcookie('INDENTL',md5($z));
      }
      include 'Customer.php';
      include 'Product.php';
      include 'Bata.php';
      include 'Command.php';
      include 'Message.php';
      #include 'Comptor.php';
      // global 
          global $bdd;
          $myCustomer = null;
          $product = null;
          global $productArray;
          $productArray = [];
          global $product_mixed;
          $product_mixed = [];
          // setcookie('visitor_L1000_dvd_dev',md5(time().'davme_'.date('Ymd')));

      try 
      {
        // $bdd = new PDO('mysql:host=185.98.131.90;dbname=lesmi935861_113zbvl','lesmi935861_113zbvl','184995dav');
        $bdd = new PDO('mysql:host=localhost;dbname=lesmi935861_113zbvl','root','');
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       // $bdd = new PDO('mysql:host=localhost;dbname=lesmi935861_113zbvl','root','');
        if($bdd != null){
            include 'Comptor.php';
	// on conneect customer to the database
            function onConnectCustomer($customerN,$customerP,$bdd)
            {
		    $req = $bdd->prepare('SELECT * FROM _customer_ WHERE _customer_._cst_password_ = ? AND _customer_._cst_mail_ = ?');
                    $req->execute([md5($customerP),trim($customerN)]);
                    $req = $req->fetch();
                    #$der = $req->fetchColumn();
                    if (!empty($req)) {
                        switch((int)$req['_cst_isActivated']){
                            case 1:
                            $myCustomer = new Customer($req['_cst_id'],$req['_cst_fst_name_'],$req['_cst_lst_name_'],$req['_cst_mail_'],$req['_cst_phone_']);
                            return $myCustomer;
                            break;
                            case 0:
                            _onVerifyMail((int)trim($req['_cst_id']),$bdd);
                            return 0;
                        }
                    }else return null;  
            }
// on subscribe user to newsletter
                    
            function onSubscribe($mailto,$bdd)
            {
                $req = $bdd->prepare('INSERT INTO _news_letter_ (`_cst_mail_`) VALUES (:em)');
                // $req->execute(["em"=>$mailto]);
                if(!$req->execute(["em"=>$mailto])){
                  return false;
                }else{
                  $from   ='noreply@lesmilleservices.com';
                  $from_ = 'Les Mille Services';
                  #$subject .= '-- Votre demande a été traité --';
                  $subject = 'Souscription réussie';
                 $message = '
<html>
<head>
  <title>Souscription réussie</title>
  <style type="text/css" data-hse-inline-css="true">
  	.outer-div {
           padding: 30px;
       }
     .inner-div {
        margin: 0 auto;
        width: 100px; 
	}
      table{
        #border: 1px solid #3498db;
      }
      td {
         font-family: Arial, sans-serif;
      }
      .btn{
      	padding:0;
      	margin:0;
      	width: 350px;
      	height:45px;
      	font-weight:bold;
      	color:white;
      }
      button{
      	background: #3498db;
      }
 </style>
</head>
<body>
  <div class="padding: 30px;width:100%;">
    <div class=" margin: 0 auto;width: 100px;">
        
    
       <img src="https://lesmilleservices.com/_bx_assoc_imgs_/_bx_caroussel_/3.jpeg" style="width:150px"/>
  <h1>Votre souscription a réussie</h1>
  <h4>Merci d\'avoir souscrit à notre newsletter.</h4>
  <p>Votre souscription a été pris en compte, Toutes les informations relatives à nos serices,<br>
  Ainsi que les promotions vous seront directement envoyées.
  </p>
  <table>
    <tr>
      <th>Merci de votre Confiance!</th>
    </tr>
    <tr>
      <td></td>
    </tr>
    <tr>
     <a href="https://lesmilleservices.com" style="background:#3498db;padding:3px 10px;color:white;font-size:25px;font-weight:bold;border:none;border-radius:5px;">
    	Retourner sur le site
    </a>
    </tr>
  </table>
    
    </div>
  </div>
</body>
</html>
';
                  $headers  = "MIME-Version: 1.0 \n";
	          $headers .= "Content-type: text/html; charset=iso-8859-1 \n";
	          $headers .= "From: $from_ <$from>\r\n".
               		      "MIME-Version: 1.0" . "\r\n" .
              		      "Content-type: text/html; charset=UTF-8" . "\r\n";
	          $headers .= "Disposition-Notification-To: $from_  \n";
	          $message = wordwrap($message, 70, "\r\n");
	          $to_ = $mailto;
	          // Message de Priorité haute
	          // -------------------------
	          $headers .= "X-Priority: 1  \n";
	          $headers .= "X-MSMail-Priority: High \n";
                // 'X-Mailer: PHP/' . phpversion();
                  if(@mail($to_,$subject,$message,$headers)){ return true;}  
                }
            }
// function casting and convert product
            function _convertToProduct(Product $pr)
            {
              return $pr->get_name();
            }

// function get me in
            function _getMeIn(Customer $cab)
            {
              if($cab != null){
                $_SESSION['_userId_'] = md5($cab->get_id());
                $_SESSION['_userN_'] = $cab->get_fstName();
                $_SESSION['_userP_'] = $cab->get_lastName();
                $_SESSION['_userEm_'] = $cab->get_addMail();
                $_SESSION['_userPh_'] = $cab->get_phoneNum();
                // var_dump($_SESSION);
               }
            }
            function _onLoadProductSuggestion($kab,$bdd){
                global $product,$productArray;
                $pre = $bdd->prepare('SELECT * FROM _cars_table GROUP BY id DESC LIMIT 6');
                $pre->execute();
                    
                    $pre = $pre->fetchAll();
                    // global $product;
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
            function _onLoadProduct($limit,$offset,$bdd)
            {
               global $product,$productArray;
                $pre = $bdd->prepare('SELECT * FROM _cars_table GROUP BY id DESC');
                $pre->execute();
                    
                    $pre = $pre->fetchAll();
                    // global $product;
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
            function _onLoadProduct_($flt,$bdd)
            {
               global $product,$productArray;
                $pre = $bdd->prepare('SELECT * FROM _cars_table GROUP BY id DESC LIMIT 16');
                $pre->execute();
                    
                    $pre = $pre->fetchAll();
                    shuffle($pre);
                    // global $product;
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
            function _onLoadProductOnSale($flt,$bdd){
    global $product,$productArray;
                $pre = $bdd->prepare('SELECT * FROM _cars_table WHERE categorie = ? GROUP BY id DESC');
                $pre->execute([95]);
                    
                    $pre = $pre->fetchAll();
                    // global $product;
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
            function _onInserting($prd,$bdd)
            {
            	$pre = $bdd->prepare("INSERT INTO _bataTable_cars ('model','marque','description',
            	'carInterchangeable','volant','portes','siege',
            	'carburant','coleur','imgPricipale','img1','img2','img3','img4','img5','img6','img7','img8','img9') 
            	 VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
            	if($pre->execute($prd)){
            	   return 200;
            	}else{
            	  return 500;
            	}        	
            	
            }
            function _loadBataPrd($id,$bdd){
              $pre = $bdd->prepare("SELECT * FROM _bataTable_cars WHERE id = ?");
              $pre->execute([$id]);
              if($pre = $pre->fetch()){
                return new Bata(
                      $pre['id'],
                      $pre['model'],
                      $pre['marque'],
                      $pre['description'],
                      $pre['carInterchangeable'],
                      $pre['volant'],
                      $pre['portes'],
                      $pre['siege'],
                      $pre['carburant'],
                      $pre['coleur'],
                      $pre['transmition'],
                      $pre['imgPricipale'],
                      $pre['img1'],
                      $pre['img2'],
                      $pre['img3'],
                      $pre['img4'],
                      $pre['img5'],
                      $pre['img6'],
                      $pre['img7'],
                      $pre['img8'],
                      $pre['img9']
                    );
              }
        
            }
          /*  function _onLoadProductBata($bdd){
            
            } */
            function _onLoadProductBata($bdd){
            
              
              global $product,$productArray;
              $productArray = [];
              $pre = $bdd->prepare('SELECT * FROM _bataTable_cars GROUP BY _bataTable_cars.id DESC');
              $pre->execute();
                  
                  $pre = $pre->fetchAll();
                  // global $product;
                    for ($i=0; $i < count($pre) ; $i++) { 
                      $product = new Bata(
                      $pre[$i]['id'],
                      $pre[$i]['model'],
                      $pre[$i]['marque'],
                      $pre[$i]['description'],
                      $pre[$i]['carInterchangeable'],
                      $pre[$i]['volant'],
                      $pre[$i]['portes'],
                      $pre[$i]['siege'],
                      $pre[$i]['carburant'],
                      $pre[$i]['coleur'],
                      $pre[$i]['transmition'],
                      $pre[$i]['imgPricipale'],
                      $pre[$i]['img1'],
                      $pre[$i]['img2'],
                      $pre[$i]['img3'],
                      $pre[$i]['img4'],
                      $pre[$i]['img5'],
                      $pre[$i]['img6'],
                      $pre[$i]['img7'],
                      $pre[$i]['img8'],
                      $pre[$i]['img9']
                    );
                     array_push($productArray,$product);
                    }
                  #print_r($productArray);
                  return $productArray;
            }
            function _onLoadProductOnLease($flt,$bdd){
             global $product,$productArray;
                $pre = $bdd->prepare('SELECT * FROM _cars_table WHERE categorie = ? GROUP BY id DESC');
                #$pre = bindValue(':id',84);
                $pre->execute([84]);
                    
                    $pre = $pre->fetchAll(PDO::FETCH_ASSOC);
                    // global $product;
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
                      array_push($productArray,$product);
                       # $productArray[$i] = $product;
                      }
                    // echo(count($pre));
                    return $productArray;
                    }
            }
// function get_user_session
            function get_user_session()
            {
              if(isset($_SESSION['_userId_'])){
                $int_l = substr($_SESSION['_userN_'],0,1);
                $int_r = substr($_SESSION['_userP_'],0,1);
                global $initial;
                      $initial = $int_l.$int_r;
                return $initial;
              }else{return null;}
            }
// on leaving a comment 
            function _onLeaveComment($name,$email,$comments,$bdd)
            {
              $req = $bdd->prepare('INSERT INTO _cst_lve_comment_(`_name_cst_`,`_mail_cst_`,`_comment_cst_`) VALUES (:n,:e,:cm)');
              if(!$req->execute(["n"=>$name,"e"=>$email,"cm"=>$comments])){return false;}else{
               	  $from   = $email;
               
                  $subject = 'Commentaire';
               /*   $message = 'le milles services vous remercie pour votre confiance';
                  $message .= ' Nous vous tiendrons toujours au courant des nouveautés des nos produits';
                  $message .= ' les mille services, En voiture, On assure'; */
                  $headers  = "MIME-Version: 1.0 \n";
	          $headers .= "Content-type: text/html; charset=iso-8859-1 \n";
	          $headers .= "From: $from \n".$from;
	          $headers .= "Disposition-Notification-To: $from  \n";
	          $message = wordwrap($comments, 70, "\r\n");
	          $to_ = 'mcinegena@lesmilleservices.com';
	          // Message de Priorité haute
	          // -------------------------
	          $headers .= "X-Priority: 1  \n";
	          $headers .= "X-MSMail-Priority: High \n";
                // 'X-Mailer: PHP/' . phpversion();
                  if(@mail($to_,$subject,$message,$headers)){ return true;} 
              	
              }
            }
// on logout customer
            function _onLogout()
            {
              if(isset($_SESSION['_userId_']) && $_SESSION['_userId_'] != null){
                unset($_SESSION);
                return true;
              }else{
                return false;
              }
            }
// on load a single product
            function _onLoadSingleProduct($key,$bdd){
              if(!empty($key)){
              $pre = $bdd->prepare("SELECT * FROM _cars_table WHERE id = ?");
              $pre->execute([$key]);
              if($pre = $pre->fetch()){
                return new Product(
                      $pre['id'],
                      $pre['model'],
                      $pre['marque'],
                      $pre['description'],
                      $pre['price'],
                      $pre['volant'],
                      $pre['portes'],
                      $pre['siege'],
                      $pre['carburant'],
                      $pre['coleur'],
                      $pre['transmition'],
                      $pre['categorie'],
                      $pre['imgPricipale'],
                      $pre['img1'],
                      $pre['img2'],
                      $pre['img3'],
                      $pre['img4'],
                      $pre['img5'],
                      $pre['img6'],
                      $pre['img7'],
                      $pre['img8'],
                      $pre['img9']);
              }
              }
            }
            function _onLookingAt($keySearch,$bdd){ 
 		global $product,$productArray;
                if(strstr($keySearch,"LM1000") && strstr($keySearch,"G4W")){
                $key = substr($keySearch,strrpos($keySearch,"L")+1);
                   $pre = $bdd->prepare("SELECT * FROM _cars_table WHERE id = ?");
                 $pre->execute(array($key));
                 $pre = $pre->fetchAll(PDO::FETCH_ASSOC);
                    // global $product;
                    if(!empty($pre)){
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
                      array_push($productArray,$product);
                       # $productArray[$i] = $product;
                      }
                    // echo(count($pre));
                    return $productArray;
                    }
                }else{
                 $pre = $bdd->prepare("SELECT * FROM _cars_table WHERE model LIKE '%$keySearch%' OR marque LIKE '%$keySearch%' LIMIT 5 ");
                 $pre->execute();
                 $pre = $pre->fetchAll(PDO::FETCH_ASSOC);
                    // global $product;
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
                      array_push($productArray,$product);
                       # $productArray[$i] = $product;
                      }
                    // echo(count($pre));
                    return $productArray;
                    }
                }
                #$pre = bindValue(':id',84);
             
            }
            function _onLookingAtAll($keySearch,$bdd){
		global $product,$productArray;
                if(strstr($keySearch,"LM1000") && strstr($keySearch,"G4W")){
                $key = substr($keySearch,strrpos($keySearch,"L")+1);
                   $pre = $bdd->prepare("SELECT * FROM _cars_table WHERE id = ?");
                 $pre->execute(array($key));
                 $pre = $pre->fetchAll(PDO::FETCH_ASSOC);
                    // global $product;
                    if(!empty($pre)){
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
                      array_push($productArray,$product);
                       # $productArray[$i] = $product;
                      }
                    // echo(count($pre));
                    return $productArray;
                    }
                }else{
                 $pre = $bdd->prepare("SELECT * FROM _cars_table WHERE model LIKE '%$keySearch%' OR marque LIKE '%$keySearch%'");
                 $pre->execute();
                 $pre = $pre->fetchAll(PDO::FETCH_ASSOC);
                    // global $product;
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
                      array_push($productArray,$product);
                       # $productArray[$i] = $product;
                      }
                    // echo(count($pre));
                    return $productArray;
                    }
                }
                #$pre = bindValue(':id',84);
             
            }
          function _onLoadNewProduct($bdd){

            global $product;
            $pre = $bdd->prepare("SELECT * FROM _product_lease_  "); //GROUP BY _product_lease_._prd_id_ DESC
            $pre->execute();
            $pr_e = $bdd->prepare("SELECT * FROM _product_sales_ "); //GROUP BY _product_lease_._prd_id_ DESC
            $pr_e->execute();
                
                $pre = $pre->fetchAll();
                $pr_e = $pr_e->fetchAll();
                $product_mixed = [];$array_shuffle;
                  for ($i=0; $i < count($pre) ; $i++) { 
                    $product = new Product($pre[$i]['_prd_id_'],
                    $pre[$i]['_prd_name_'],
                    $pre[$i]['_prd_description_'],
                    $pre[$i]['_prd_color_'],
                    $pre[$i]['_prd_price_'],
                    $pre[$i]['_prd_marque_'],
                    $pre[$i]['_prd_src_'],
                    $pre[$i]['_prd_ctgrie_']
                  );
                    $productArray[$i] = $product;
                    array_push($product_mixed,$product);
                  }
                  for ($i=0; $i < count($pr_e) ; $i++) { 
                    $product = new Product($pr_e[$i]['_prd_id_'],
                    $pr_e[$i]['_prd_name_'],
                    $pr_e[$i]['_prd_description_'],
                    $pr_e[$i]['_prd_color_'],
                    $pr_e[$i]['_prd_price_'],
                    $pr_e[$i]['_prd_marque_'],
                    $pr_e[$i]['_prd_src_'],
                    $pr_e[$i]['_prd_ctgrie_']
                  );
                    $productArray[$i] = $product;
                    array_push($product_mixed,$product);
                  }
                //  $array_shuffle = array_rand($product_mixed,2);
                //  $website = $productArray[mt_rand(0, count($productArray) - 1)];
                // echo(count($pre));
                return $product_mixed;
          } 
          function _onLoadProdctInformation($key,$catme,$bdd){
	      if(!empty($key)){
              $pre = $bdd->prepare("SELECT * FROM _cars_table WHERE id = ?");
              $pre->execute([$key]);
              if($pre = $pre->fetch()){
                return new Product(
                      $pre['id'],
                      $pre['model'],
                      $pre['marque'],
                      $pre['description'],
                      $pre['price'],
                      $pre['volant'],
                      $pre['portes'],
                      $pre['siege'],
                      $pre['carburant'],
                      $pre['coleur'],
                      $pre['transmition'],
                      $pre['categorie'],
                      $pre['imgPricipale'],
                      $pre['img1'],
                      $pre['img2'],
                      $pre['img3'],
                      $pre['img4'],
                      $pre['img5'],
                      $pre['img6'],
                      $pre['img7'],
                      $pre['img8'],
                      $pre['img9']);
              }
              }
           
          } 
          function _testIfCmmAlredy($u,$pf,$c,$v){
            $p = $v->prepare("SELECT *  FROM _prd_commande_ WHERE _cmmd_id_prd_=:idpr AND _cmmd_id_cstmer_=:cst");
            $p->execute(["idpr"=>$pf,"cst"=>$u]);
            $p = $p->fetch();
            if ($p['_cmmd_ctgrie_']==$c) {
              return true;
            }
          }
           function _onNotifyCustomer($to,$it,$his,$bdd){
            $categorie = "";
            $car = _onLoadSingleProduct($it,$bdd);
            define("lm_m",trim($car->model)[0]);
 	    define("lm_q",trim($car->marque)[0]);
 	    define("key",trim($car->id));
 	    define("pref","-LM1000-".key."-G4W-L");
	    #echo(lm_m.lm_q.pref.key);
	    #define("refCar",lm_m.lm_q.pref.key);
	    $refCar = lm_m.lm_q.pref.key;
            switch($car->categorie){case '84': $categorie = "de Location"; break; case '95': $categorie = "d'achat";break; default : break;}
            $from      ='contact@lesmilleservices.com';
            $from_ = "LES MILLE SERVICES";
            $subject = '-- Votre demande a été traité --';
            $subject = 'Demande de confirmation';
            $message = '
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
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
body {
    margin: 0 auto !important;
    padding: 0 !important;
    height: 100% !important;
    width: 100% !important;
    background: #f1f1f1;
}

/* What it does: Stops email clients resizing small text. */
* {
    -ms-text-size-adjust: 100%;
    -webkit-text-size-adjust: 100%;
}

/* What it does: Centers email on Android 4.4 */
div[style*="margin: 16px 0"] {
    margin: 0 !important;
}

/* What it does: Stops Outlook from adding extra spacing to tables. */
table,
td {
    mso-table-lspace: 0pt !important;
    mso-table-rspace: 0pt !important;
}

/* What it does: Fixes webkit padding issue. */
table {
    border-spacing: 0 !important;
    border-collapse: collapse !important;
    table-layout: fixed !important;
    margin: 0 auto !important;
}

/* What it does: Uses a better rendering method when resizing images in IE. */
img {
    -ms-interpolation-mode:bicubic;
}

/* What it does: Prevents Windows 10 Mail from underlining links despite inline CSS. Styles for underlined links should be inline. */
a {
    text-decoration: none;
}

/* What it does: A work-around for email clients meddling in triggered links. */
*[x-apple-data-detectors],  /* iOS */
.unstyle-auto-detected-links *,
.aBn {
    border-bottom: 0 !important;
    cursor: default !important;
    color: inherit !important;
    text-decoration: none !important;
    font-size: inherit !important;
    font-family: inherit !important;
    font-weight: inherit !important;
    line-height: inherit !important;
}

/* What it does: Prevents Gmail from displaying a download button on large, non-linked images. */
.a6S {
    display: none !important;
    opacity: 0.01 !important;
}

/* What it does: Prevents Gmail from changing the text color in conversation threads. */
.im {
    color: inherit !important;
}

img.g-img + div {
    display: none !important;
}


/* iPhone 4, 4S, 5, 5S, 5C, and 5SE */
@media only screen and (min-device-width: 320px) and (max-device-width: 374px) {
    u ~ div .email-container {
        min-width: 320px !important;
    }
}
/* iPhone 6, 6S, 7, 8, and X */
@media only screen and (min-device-width: 375px) and (max-device-width: 413px) {
    u ~ div .email-container {
        min-width: 375px !important;
    }
}
/* iPhone 6+, 7+, and 8+ */
@media only screen and (min-device-width: 414px) {
    u ~ div .email-container {
        min-width: 414px !important;
    }
}

    </style>

    <!-- CSS Reset : END -->

    <!-- Progressive Enhancements : BEGIN -->
    <style>

	    .primary{
	background: #f85e9f;
}
.bg_white{
	background: #ffffff;
}
.bg_light{
	background: #fafafa;
}
.bg_black{
	background: #000000;
}
.bg_dark{
	background: rgba(0,0,0,.8);
}
.email-section{
	padding:2.5em;
}

/*BUTTON*/
.btn{
	padding: 5px 15px;
	display: inline-block;
}
.badge{
    padding:2px 2px;
    border-radius: 3px;
    font-weight: bold;
    color:white;
    background-color: red;
}
.btn.btn-primary{
	border-radius: 5px;
	background: #3498db;
	color: #ffffff;
}
.btn.btn-white{
	border-radius: 5px;
	background: #ffffff;
	color: #000000;
}
.btn.btn-white-outline{
	border-radius: 5px;
	background: transparent;
	border: 1px solid #fff;
	color: #fff;
}
.btn.btn-black-outline{
	border-radius: 0px;
	background: transparent;
	border: 2px solid #000;
	color: #000;
	font-weight: 700;
}

h1,h2,h3,h4,h5,h6{
	font-family: "Lato", sans-serif;
	color: #000000;
	margin-top: 0;
	font-weight: 400;
}

body{
	font-family: "Lato", sans-serif;
	font-weight: 400;
	font-size: 15px;
	line-height: 1.8;
	color: rgba(0,0,0,.4);
}

a{
	color: #f85e9f;
}

table{
}
/*LOGO*/

.logo h1{
	margin: 0;
}
.logo h1 a{
	color: #000000;
	font-size: 20px;
	font-weight: 700;
	text-transform: uppercase;
	font-family: "Lato", sans-serif;
	border: 2px solid #000;
	padding: .2em 1em;
}

.navigation{
	padding: 0;
	padding: 1em 0;
	/*background: rgba(0,0,0,1);*/
	border-top: 1px solid rgba(0,0,0,.05);
	border-bottom: 1px solid rgba(0,0,0,.05);
}
.navigation li{
	list-style: none;
	display: inline-block;;
	margin-left: 5px;
	margin-right: 5px;
	font-size: 13px;
	font-weight: 500;
	text-transform: uppercase;
	letter-spacing: 2px;
}
.navigation li a{
	color: rgba(0,0,0,1);
}

/*HERO*/
.hero{
	position: relative;
	z-index: 0;
}

.hero .text{
	color: rgba(0,0,0,.3);
}
.hero .text h2{
	color: #000;
	font-size: 30px;
	margin-bottom: 0;
	font-weight: 300;
}
.hero .text h2 span{
	font-weight: 600;
	color: #f85e9f;
}


/*HEADING SECTION*/
.heading-section{
}
.heading-section h2{
	color: #000000;
	font-size: 28px;
	margin-top: 0;
	line-height: 1.4;
	font-weight: 400;
}
.heading-section .subheading{
	margin-bottom: 20px !important;
	display: inline-block;
	font-size: 13px;
	text-transform: uppercase;
	letter-spacing: 2px;
	color: rgba(0,0,0,.4);
	position: relative;
}
.heading-section .subheading::after{
	position: absolute;
	left: 0;
	right: 0;
	bottom: -10px;
	content: "";
	width: 100%;
	height: 2px;
	background: #f85e9f;
	margin: 0 auto;
}

.heading-section-white{
	color: rgba(255,255,255,.8);
}
.heading-section-white h2{
	font-family: ;
	line-height: 1;
	padding-bottom: 0;
}
.heading-section-white h2{
	color: #ffffff;
}
.heading-section-white .subheading{
	margin-bottom: 0;
	display: inline-block;
	font-size: 13px;
	text-transform: uppercase;
	letter-spacing: 2px;
	color: rgba(255,255,255,.4);
}


ul.social{
	padding: 0;
}
ul.social li{
	display: inline-block;
	margin-right: 10px;
}

/*FOOTER*/

.footer{
	border-top: 1px solid rgba(0,0,0,.05);
	color: rgba(0,0,0,.5);
}
.img-class{
    width: 200px;
}
.footer .heading{
	color: #000;
	font-size: 20px;
}
.footer ul{
	margin: 0;
	padding: 0;
}
.footer ul li{
	list-style: none;
	margin-bottom: 10px;
}
.footer ul li a{
	color: rgba(0,0,0,1);
}


@media screen and (max-width: 500px) {


}


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
                            <h2>Requete de commande reçue</h2>
            			</div>
            		</td>
            	</tr>
            </table>
          </td>
          </tr><!-- end tr -->
          <tr>
              <td class=" bg_white">
                <div class="heading-section" style="padding: 0 2.5em; text-align: left;">
                    <h2>Bonjour, <b>'.ucfirst($_SESSION["_userN_"]).'&nbsp;'.ucfirst($_SESSION["_userP_"]).'</b></h2>
                    <p>nous avons pris en compte votre requete de démande '.$categorie.' du véhicule dont les informations sont les suivantes :</p>
                </div>
              </td>
          </tr>
          <tr>
              <td class="bg_white">
                <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
                    <tr>
              <td valign="middle" width="50%">
                <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                  <tr>
                    <td class="text-services" style="text-align: left; padding: 20px 30px;">
                        <div class="heading-section">
                            <h2 style="font-size: 22px;">Informations du véhicule</h2>
                            <p><span class="badge">NOTE</span>: Si ces informations ne correspondent pas au véhicule commandé veillez contacter nos services client</p>
                            <table class="table table-bordered" style="position: relative;float: left; width: 100%; padding-bottom: 15px;margin-bottom: 15px">
                            <thead>
                                <tr bgcolor="#cccc">
                                <th scope="col">Info véhicule<span class="glyphicon glyphicon-glyphicon-inbox"></span></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr style="background:#cccc">
                                <th scope="row">Modèle</th>
                                <td>'.($car->model).'</td>
                                <td rowspan="4"><img src="https://lesmilleservices.com/_bx_assoc_imgs_/_bx_assoc_imgs_/'.($car->imgPrcl).'" alt="Image véhicule" style="width:100%"/></td>
                                </tr>
                                <tr style="background:#cccc">
                                    <th scope="row">Référence</th>
                                    <td>'.($refCar).'</td>
                                    
                                </tr>
                                <tr style="background:#cccc">
                                <th scope="row">Marque</th>
                                <td>'.($car->marque).'</td>
                                
                                </tr>
                                <tr style="background:#cccc">
                                <th scope="row">Categorie</th>
                                <td>'.$categorie.'</td>
                                
                                </tr>
                                <tr style="background:#cccc">
                                    <th scope="row">Volant</th>
                                    <td>'.($car->volant).'</td>
                                    
                                </tr>
                                <tr style="background:#cccc">
                                    <th scope="row">Transmission</th>
                                    <td>'.($car->transmission).'</td>
                                    
                                </tr>
                                <tr style="background:#cccc">
                                    <th scope="row">Nombre des sièges</th>
                                    <td>'.($car->siege).'</td>
                                    
                                </tr>
                                <tr style="background:#cccc">
                                    <th scope="row">Nombre des portes</th>
                                    <td>'.($car->porte).'</td>
                                    
                                </tr>
                                <tr style="background:#cccc">
                                <th scope="row">Prix</th>
                                <th>$'.($car->price).'</th>
                                
                                </tr>
                            </tbody>
                            </table>
                                          
                        </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-services" style="text-align: left; padding: 20px 30px;">
                        <div class="heading-section" style="margin-bottom: 20px;">
                            <h2 style="font-size: 22px;">Coordonnées bancaire</h2>
                            
                            <table class="table table-bordered" style="position: relative;float: left; width: 100%; padding-bottom: 15px;margin-bottom: 15px">
                            <thead>
                                <tr bgcolor="#cccc">
                                <th scope="col">Infos BANK<span class="glyphicon glyphicon-glyphicon-inbox"></span></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <td scope="row">Nom de la banque</td>
                                <th>TRUST MERCHANT BANK SA</th>
                        
                                </tr>
                                <tr>
                                <th scope="row">Swift Code</th>
                                <th>TRMSCD3L</th>
                                
                                </tr>
                                <tr>
                                <th scope="row">Bénéficiaire</th>
                                <th>Les mille services SARL</th>
                                
                                </tr>
                                <tr>
                                <th scope="row">Numéro du compte</th>
                                <th>00017280002347595000119</th>
                                
                                </tr>
                            </tbody>
                            </table>
                           
                        </div>
                        <div class="heading-section">

                            <p><span class="badge">NOTE</span>: Après avoir effectuer le depot sur notre compte bancaire repris en marge ci-haut nous vous prions de 
                                pouvoir envoyé une image ou un fichié texte à cette addresse dans et coller le numero de référence du véhicule <a href="http://lesmilleservices.com/?page=_account-me&_tkn='.$_SESSION['_userId_'].'&ref='.($refCar).'&_recRef='.($car->id).'" target="_blank" rel="noopener noreferrer">https://lesmilleservices.com/index.php?page=_account-me</a></p>           
                            <p><a href="https://lesmilleservices.com" class="btn btn-primary" style="margin-top: 20px;background:#3498db;color:#ffff;padding:3px 3px;border-radius:5px">Retourner sur le site</a></p>
                        </div>
                    </td>
                  </tr>
                </table>
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
</html>
';
           $headers  = "MIME-Version: 1.0 \n";
	   $headers .= "Content-type: text/html; charset=iso-8859-1 \n";
	   $headers .= "From: $from_ <$from>\r\n".
               	    "MIME-Version: 1.0" . "\r\n" .
                    "Content-type: text/html; charset=UTF-8" . "\r\n";
	   $headers .= "Disposition-Notification-To: $from  \n";
	   $to_ = 'davidmened@gmail.com';
	   // Message de Priorité haute
	   // -------------------------
	   $headers .= "X-Priority: 1  \n";
	   $headers .= "X-MSMail-Priority: High \n";
                // 'X-Mailer: PHP/' . phpversion();
              @mail($to,$subject,$message,$headers);
          }
           function _onNotifyL100($his,$it,$bdd){
            $categorie = "";
            $car = _onLoadSingleProduct($it,$bdd);
            switch($car->categorie){case '84': $categorie = "de Location"; break; case '95': $categorie = "d'achat";break; default : break;}
            $from      ='les1000services@lesmilleservices.com';
            $from_= 'LES MILLE SERVICES';
            $subject = '-- Votre demande a été traité --';
            $subject = 'Demande de confirmation';
            $message = '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://lesmilleservices.com/css/bootstrap.min.css" type="text/css">
    <title>Les Mille Infos </title>
</head>
<body>
    <div class="container">
        <h3>Service commercial Mille services</h3>
        <h6>Avis de requete</h6>
        <div class="card">
            <div class="card-header">
                <img src="https://lesmilleservices.com/_bx_assoc_imgs_/_bx_caroussel_/3.jpeg" style="width:150px"/>
                <h5>Les Mille services</h5>
            </div>
            <div class="card-body">
                <p>
                    Bonjour,
                </p>
                <p>Une requete a été effectué de démande '.$categorie.' du véhicule dont les informations sont les suivantes :</p>
                <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">Détail du véhicule<span class="glyphicon glyphicon-glyphicon-inbox"></span></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">Modèle</th>
                        <td>'.($car->model).'</td>
                        <td rowspan="4"><img src="https://lesmilleservices.com/_bx_assoc_imgs_/_bx_assoc_imgs_/'.($car->imgPrcl).'" style="width:200px"/></td>
                      </tr>
                      <tr>
                        <th scope="row">Marque</th>
                        <td>'.($car->marque).'</td>
                        
                      </tr>
                      <tr>
                        <th scope="row">Categorie</th>
                        <td><span class="badge badge-default">'.$categorie.'</span></td>
                      
                      </tr>
                      <tr>
                     <th scope="row">Prix</th>
                        <th>$'.($car->price).'</th>
                      
                      </tr>
                    </tbody>
                  </table>
                  <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Informations relatives du Client</th>
                        </tr>
                    </thead>    
                     <tbody>
                        <tr>
                            <th scope="row">Nom complet</th>
                            <th>'.ucfirst($_SESSION["_userN_"]).'&nbsp;'.ucfirst($_SESSION["_userP_"]).'</th>
                          </tr>
                          <tr>
                              <th scope="row">Numero de téléphone:</th>
                              <th>'.$_SESSION["_userPh_"].'</th>
                          </tr>
                          <tr>
                              <th scope="row">Adresse mail:</th>
                              <th>'.$_SESSION["_userEm_"].'</th>
                          </tr>
                     </tbody>
                  </table>
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col-xs-6">
                        <h5>Les Mille services</h5>
                        <span>&copy;les mille services 2020</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
';
           $headers  = "MIME-Version: 1.0 \n";
	   $headers .= "Content-type: text/html; charset=iso-8859-1 \n";
	   $headers .= "From: $from_ <$from>\r\n".
               "MIME-Version: 1.0" . "\r\n" .
               "Content-type: text/html; charset=UTF-8" . "\r\n";
	   $headers .= "Disposition-Notification-To: $from  \n";
	   $to_ = ' jmutabesha@lesmilleservices.com,davidmened@gmail.com,mcinegena@lesmilleservices.com';
	   // Message de Priorité haute
	   // -------------------------
	   $headers .= "X-Priority: 1  \n";
	   $headers .= "X-MSMail-Priority: High \n";
                // 'X-Mailer: PHP/' . phpversion();
              @mail($to_,$subject,$message,$headers);
           
           }
           function _onAddToMyCard($me,$it,$his,$mail,$catPayment,$bdd){

            // $ps = $p[0];
            if(_testIfCmmAlredy($me,$it,$his,$bdd)){
              return 'deja';
            }else{
              $pret = $bdd->prepare("INSERT INTO _prd_commande_ (`_cmmd_id_prd_`,`_cmmd_ctgrie_`,`_cmmd_id_cstmer_`) 
              VALUES (:idprd,:prdcat,:idCust)");
                if($pret->execute(["idprd"=>$it,"prdcat"=>$his,"idCust"=>$me])){
                  _onNotifyCustomer($mail,$it,$his,$bdd);
                  _onNotifyL100($his,$it,$bdd);
                return 'added';
                } else{
                return 'error';
                }
            } 
          }
          function _onAddNewCustomer_($name_1,$name_2,$email_,$phone_,$pass,$rand,$bdd){
            $rt = $bdd->prepare('INSERT INTO _customer_ (`_cst_fst_name_`,`_cst_lst_name_`,`_cst_mail_`,`_cst_phone_`,`_cst_password_`,`_cst_tkn`,`_cst_isActivated`) 
          VALUES (:na,:lsn,:em,:ph,:pwd,:tkn,:pnd)');
        try{
         if($rt->execute(["na"=>$name_1,"lsn"=>$name_2,"em"=>$email_,"ph"=>$phone_,"pwd"=>$pass,"tkn"=>$rand,":pnd"=>0])){
           # onConnectCustomer($email_,$pass,$bdd);
           $vor = $bdd->prepare('SELECT _cst_id FROM _customer_ WHERE _customer_._cst_mail_ = ?');
           $vor->execute([$email_]);
           $vor = $vor->fetch();
           _onVerifyMail((int)trim($vor['_cst_id']),$bdd);
           return 200;
         }
          return 501;
         }catch(PDOException $ex){
           return 501;
         }
        }
          function _onLoadMesCommandes($bdd){
              $ar_commd = array();
            if (isset($_SESSION['_userId_'])) {
              $d_me = trim($_SESSION['_userId_']);
              $rf = $bdd->prepare('SELECT * FROM _prd_commande_  JOIN _cars_table ON  _prd_commande_._cmmd_id_prd_=_cars_table.id  WHERE _cmmd_id_cstmer_ =:sd');
              $rf->execute(["sd"=>$d_me]); 
              $rf = $rf->fetchAll();
              #$ar_commd = $rf;
              for($i = 0; $i < count($rf); $i++){
              	$command = new Command(
              		$rf[$i]['_cmmd_id_prd_'],
              		$rf[$i]['model'],
              		$rf[$i]['imgPricipale'],
              		$rf[$i]['price'],
              		$rf[$i]['categorie'],
              		$rf[$i]['_cmmd_timestamp_'],
              		$rf[$i]['marque']);
              	array_push($ar_commd,$command);	
              
              }

              return $ar_commd;
            }
          }

            // ------------------------------   david don't go beyond this line   ----------------------------------------- //
        }
      }  
      catch(PDOException $ex)
      { 
        die('
            <div class="container-fluid">
              <div class="navbar navbar-default"></div>
              <div class="alert alert-danger">
                  <b>Il y a eu une erreure lors de la tentative de connection a\' 
                  la :::BANK DES DONNEES ::: Veillez contacter l\'admin +243 970 284 772</b>
              </div>
              <div class="alert alert-danger">
                '.$ex.'
              </div>
            </div>'     
        );
      }

?>