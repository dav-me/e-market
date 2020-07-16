<?php
    session_start();
    include 'Message.php';
    include 'Product.php';
    include 'cmpl.php';
    
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=lesmi935861_113zbvl','root','');
        // $bdd = new PDO('mysql:host=185.98.131.90;dbname=lesmi935861_113zbvl','lesmi935861_113zbvl','184995dav');
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        if($bdd){
            function _insertNewProductForLease($namepr,$mrq,$srcimg,$desc,$price,$clr,$arrayOfView,$bdd){
                $pre = $bdd->prepare('INSERT INTO _product_lease_ 
                (`_prd_name_`,`_prd_state_`,`_prd_marque_`,`_prd_src_`,`_prd_description_`,`_prd_price_`,`_prd_color_`,`_prd_ctgrie_`) 
                VALUES
                (:nm,:etat,:mrq,:src,:descr,:price,:clr,:catme)');
        //  zero signifie que le produit est encore a jour
                if ($pre->execute(["nm"=>$namepr,"etat"=>0,"mrq"=>$mrq,"src"=>$srcimg,"descr"=>$desc,"price"=>$price,"clr"=>$clr,"catme"=>84])) {
                   $req = $bdd->prepare('SELECT MAX(_prd_id_) FROM _product_lease_');
                   $req->execute();
                   $req = $req->fetch();
                
                    if (_onAddingFAceToProduct($req[0],$arrayOfView,84,$bdd)) {
                    # code...
                    	return true;
                    }else{
                        return false;
                    }
                }
            }
            function _insertNewProductForLease_edt($namepr,$mrq,$srcimg,$desc,$price,$clr,$arrayOfView,$bdd){
                $pre = $bdd->prepare('UPDATE _product_lease_ SET 
                (`_prd_name_`,`_prd_state_`,`_prd_marque_`,`_prd_src_`,`_prd_description_`,`_prd_price_`,`_prd_color_`,`_prd_ctgrie_`) 
                VALUES
                (:nm,:etat,:mrq,:src,:descr,:price,:clr,:catme)');
        //  zero signifie que le produit est encore a jour
                if ($pre->execute(["nm"=>$namepr,"etat"=>0,"mrq"=>$mrq,"src"=>$srcimg,"descr"=>$desc,"price"=>$price,"clr"=>$clr,"catme"=>84])) {
                   $req = $bdd->prepare('SELECT MAX(_prd_id_) FROM _product_lease_');
                   $req->execute();
                   $req = $req->fetch();
                
                    if (_onAddingFAceToProduct($req[0],$arrayOfView,84,$bdd)) {
                    # code...
                    return true;
                    }else{
                        return false;
                    }
                }
            }
             function _insertingNewCar($d,$bdd){
	     try{
	     	
                $req = $bdd->prepare('INSERT INTO _cars_table (model,marque,
                description,price,volant,
                portes,siege,carburant,coleur,transmition,categorie,imgPricipale,img1,img2,img3,img4,img5,img6,img7,img8,img9) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)');
                 #$req->execute($d);
		  
		  $req->execute($d);
		  return true;
		}catch(PDOException $ex){
	          die($ex);
		}
            } 
           function _insertingBataPrd($d,$bdd){
	     try{
	     	
                $req = $bdd->prepare('INSERT INTO _bataTable_cars (model,marque,
                description,carInterchangeable,volant,
                portes,siege,carburant,coleur,transmition,imgPricipale,img1,img2,img3,img4,img5,img6,img7,img8,img9) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)');
                 #$req->execute($d);
		  
		  $req->execute($d);
		  return true;
		}catch(PDOException $ex){
	          die($ex);
		}
            } 
            function _insertNewProductForSale($namepr,$mrq,$srcimg,$desc,$price,$clr,$arrayOfView,$bdd){
                $pre = $bdd->prepare('INSERT INTO _product_sales_ 
                (`_prd_name_`,`_prd_state_`,`_prd_marque_`,`_prd_src_`,`_prd_description_`,`_prd_price_`,`_prd_color_`,`_prd_ctgrie_`) 
                VALUES
                (:nm,:etat,:mrq,:src,:descr,:price,:clr,:catme)');
        //  zero signifie que le produit est encore a jour
                if ($pre->execute(["nm"=>$namepr,"etat"=>0,"mrq"=>$mrq,"src"=>$srcimg,"descr"=>$desc,"price"=>$price,"clr"=>$clr,"catme"=>95])) {
                    $req = $bdd->prepare('SELECT MAX(_prd_id_) FROM _product_sales_');
                    $req->execute();
                    $req = $req->fetch();
                
                    if (_onAddingFAceToProduct($req[0],$arrayOfView,95,$bdd)) {
                        # code...
                        return true;
                    }else{
                        return false;
                    }
                }
            }
            function _insertNewProductForSale_edt($namepr,$mrq,$srcimg,$desc,$price,$clr,$arrayOfView,$bdd){
                $pre = $bdd->prepare('INSERT INTO _product_sales_ 
                (`_prd_name_`,`_prd_state_`,`_prd_marque_`,`_prd_src_`,`_prd_description_`,`_prd_price_`,`_prd_color_`,`_prd_ctgrie_`) 
                VALUES
                (:nm,:etat,:mrq,:src,:descr,:price,:clr,:catme)');
        //  zero signifie que le produit est encore a jour
                if ($pre->execute(["nm"=>$namepr,"etat"=>0,"mrq"=>$mrq,"src"=>$srcimg,"descr"=>$desc,"price"=>$price,"clr"=>$clr,"catme"=>95])) {
                    $req = $bdd->prepare('SELECT MAX(_prd_id_) FROM _product_sales_');
                    $req->execute();
                    $req = $req->fetch();
                
                    if (_onAddingFAceToProduct($req[0],$arrayOfView,95,$bdd)) {
                        # code...
                        return true;
                    }else{
                        return false;
                    }
                }
            }
            //
            function _onAddingFAceToProduct($to,$thisViews,$_emp_,$bdd){
                $_face_1 = $thisViews[0];
                $_face_2 = $thisViews[1];
                $_face_3 = $thisViews[2];
                $_face_4 = $thisViews[3];
                switch ($_emp_) {
                    case 84: // to lease table i guess
                        $requ = $bdd->prepare('INSERT INTO _prd_detail_ (`_id_produit`,`_face_1`,`_face_2`,`_face_3`,`_face_4`,`_prd_categorie_`) 
                        VALUES (:id,:f1,:f2,:f3,:f4,:cat)');
                        // cat = 0 mean that tap is according to leasing table 
                        if ($requ->execute(["id"=>$to,"f1"=>$_face_1,"f2"=>$_face_2,"f3"=>$_face_3,"f4"=>$_face_4,"cat"=>1])) {
                            # code...
                            return true;
                        }else{
                            return false;
                        }
                    break;
                    case 95: // to lease table i guess
                        $requs = $bdd->prepare('INSERT INTO _prd_detail_ (`_id_produit`,`_face_1`,`_face_2`,`_face_3`,`_face_4`,`_prd_categorie_`) 
                        VALUES (:id,:f1,:f2,:f3,:f4,:cat)');
                        // cat = 1 mean that tap is according to sales table 
                        if ($requs->execute(["id"=>$to,"f1"=>$_face_1,"f2"=>$_face_2,"f3"=>$_face_3,"f4"=>$_face_4,"cat"=>0])) {
                            # code...
                            return true;
                        }else{
                            return false;
                        }
                    break;
                    default:
                        echo('nothing to do for the moment');
                        return null;
                        break;
                }
            }
            function _insertnewAdmin($fstn,$lstn,$phn,$email,$pwd,$bdd){
                $req = $bdd->prepare('INSERT INTO _administrator_ 
                (`_adm_fst_name_`,`_adm_lst_name_`,`_adm_phone_`,`_adm_mail_`,`_adm_psswrd_`)
                VALUES (:fsn,:lsn,:ph,:em,:pwd)');
                $req->execute(array("fsn"=>$fstn,"lsn"=>$lstn,"ph"=>$phn,"em"=>$email,"pwd"=>md5($pwd)));
            }
            function _connectAdministrator($param,$pwd,$bdd){
                // _adm_fst_name_,_adm_lst_name_,_adm_phone_,_adm_mail__adm_fst_name_,_adm_lst_name_,_adm_psswrd_
                $pre = $bdd->prepare('SELECT _adm_id_,_adm_fst_name_,_adm_lst_name_,_adm_phone_ FROM _administrator_ WHERE _adm_phone_ = :pck AND _adm_psswrd_ = :pwwd LIMIT 1');
                $pre->execute(["pck"=>$param,"pwwd"=>md5($pwd)]);
                $pre = $pre->fetchAll();
                // $pre->closeCursor();

                if (count($pre) != 0) {
                    $_SESSION['_getmeinplzdv_'] = md5($pre[0]['_adm_id_']);
                    $_SESSION['_cab_nick_f'] = $pre[0]['_adm_fst_name_'];
                    $_SESSION['_cab_nick_l'] = $pre[0]['_adm_lst_name_'];
                    $_SESSION['_cab_em_'] = $pre[0]['_adm_phone_'];
                    // $_SESSION['pwd_form'] = md5($pwd);
                    return true;
                }else{
                    return false;
                }
            }
            function _onLoadProductForLease($bdd){
                global $product,$productArray;
                $pre = $bdd->prepare('SELECT * FROM _cars_table WHERE categorie = ? GROUP BY id DESC');
                $pre->execute([84]);
                    
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
            function _onLoadProductForSale($bdd){
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
            function _countMeCarForLease($bdd){
                $req = $bdd->prepare("SELECT * FROM _cars_table WHERE categorie = ?");
                $req->execute([84]);
                $req = $req->fetchAll();
                
                return count($req);
            }
            function _countMeCarForSales($bdd){
                $req = $bdd->prepare("SELECT * FROM  _cars_table WHERE categorie = ?");
                $req->execute([95]);
                $req = $req->fetchAll();
                
                return count($req);
            }
            function _countMeAddedtoChart($bdd){
                $req = $bdd->prepare("SELECT * FROM _prd_commande_");
                $req->execute();
                $req = $req->fetchAll();
                
                return count($req);
            }
            function _countMeAllMember($bdd){
                $req = $bdd->prepare("SELECT * FROM _customer_");
                $req->execute();
                $req = $req->fetchAll();
                
                return count($req);
            }
            function _getMyfullSessionName(){
                if (isset($_SESSION['_cab_nick_f'])) {
                    echo(ucfirst($_SESSION['_cab_nick_f']).'&nbsp;'.ucfirst($_SESSION['_cab_nick_l']));
                }
            }
            function _getInitialOfFullName(){
                if(isset($_SESSION['_cab_nick_f'])){
                    $int_l = substr($_SESSION['_cab_nick_f'],0,1);
                    $int_r = substr($_SESSION['_cab_nick_l'],0,1);
                    // global $initial;
                    $initial = $int_l.$int_r;
                    echo($initial);
                  }
            }
            function _onDeleting($id,$cat,$bdd){
               $pre=$bdd->prepare("DELETE FROM _cars_table WHERE id = ?");
               if( $pre->execute([$id])){
               	return true;
               }else{
               	return false;
               }
               
            }
        }
    } catch (\Throwable $th) {
        //throw $th;
        die($th->getMessage());
    }
?>
