<?php 
    require './_function.php';
    if(isset($_POST['assval'])){
        $sender = $_POST['client'] ?? getUserIp();
        $mssg = wordwrap($_POST['assval'], 100);
        if(_onQueringForAssistance($sender, $mssg, $bdd)){
            echo(200);
        }else{
            echo(501);
        }
    }
    if(isset($_POST['nomass'])){
        list($nom,$email,$phone,$text) = $_POST;
        echo($nom);
    }
    if(isset($_POST['emForSubs']) && !empty($_POST['emForSubs'])){
        if(onSubscribe(trim($_POST['emForSubs']),$bdd) === true){
            echo('seccess');
        }
    }
    if(isset($_POST['username'])){
        if(!empty($_POST['username']) && !empty($_POST['pass'])){
        $us = onConnectCustomer(trim($_POST['username']),trim($_POST['pass']),$bdd);
            if($us !== null){
		if($us === 0){
		  echo(202020);
		}else{            
                 _getMeIn($us);
                echo(200);
		}
            }else{
                echo(404);
            }
        }else{
            echo(300);
        }
    }
    if(isset($_POST['username_h'])){
        if(!empty($_POST['username_h']) && !empty($_POST['pass_h'])){
            $us = onConnectCustomer(trim($_POST['username_h']),trim($_POST['pass_h']),$bdd);
            if($us !== null){
                if($us === 0){
                echo(202020);
                }else{            
                    _getMeIn($us);
                    echo(200);
                }
            }else{
                echo(404);
            }
        }else{
            echo(300);
        }
    }
    if(isset($_POST['cmm_i'])){
        if(!empty($_POST['cmm_i']) && !empty($_POST['cmm_e']) && !empty($_POST['cmm_t'])){
            if(_onLeaveComment(trim($_POST['cmm_i']),trim($_POST['cmm_e']),trim($_POST['cmm_t']),$bdd) === true){
                echo(http_response_code());
            }else{
                echo('error');
            }
        }else{
            echo('les champs ne doivent pas etre vides');
        }
    }
    if (isset($_POST['name1']) && !empty($_POST['name1'])) {
        
	$rand = md5('dav.me'.$_POST['name1']);
        $me = _onAddNewCustomer_(
            trim($_POST['name1']),
            trim($_POST['name2']),
            trim($_POST['email_']),
            trim($_POST['phonenum']),
            md5($_POST['pass_1']),
            trim($rand),
            $bdd
            );
        switch($me) {
	  case 200:
	  
	  echo(200);
	  break;
	  case 501:
	  echo(501);
	  break;
        }
    }
   if(isset($_POST['customer']) && isset($_FILES['exampleInputFile'])) {
        if(!empty($_FILES['exampleInputFile']['name'])){
            $fname = basename($_FILES['exampleInputFile']['name']);
            $direc = '../_bx_assoc_imgs_/_bx_bilings_/'.$fname;
            $tmpname = $_FILES['exampleInputFile']['tmp_name'];
            if(move_uploaded_file($tmpname,$direc)){
             $tkn = trim($_POST['customer']);
             $iccar = trim($_POST['car']);
             $refCar = trim($_POST['refCar']);
		$case = _onBillings($tkn,$iccar,$refCar,$fname,$bdd);
		#echo($case);
                switch ($case) {
                case 200:
                    # code...
                    echo('200');
                    return 200;
                break;
                case 500:
                    echo('500');
                    return 500;
                break;
                // case 
                default:
                    echo('000');
                    return 000;
                break;
            	}
            }else{
              echo('david le fichier n a pas ete down');
            }

        }
    }
    if(isset($_GET['favorite'])){
     echo(100000000000000000000);
    }
    #echo('il n ya rien qui a ete recu jusque lq david je sais');

    ?>