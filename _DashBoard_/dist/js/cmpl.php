<?php

function _count_unread_message($bdd){
      $re = $bdd->prepare('SELECT COUNT(*) FROM  _assistancemessage WHERE _ispending = 1');
      $re->execute();
      $re = $re->fetchColumn();
      return $re;
  }
function _count_all_message($bdd){
    $re = $bdd->prepare('SELECT COUNT(*) FROM  _assistancemessage WHERE 1');
    $re->execute();
    $re = $re->fetchColumn();
    return $re;
}
function _count_del_message($bdd){
    $re = $bdd->prepare('SELECT COUNT(*) FROM  _assistancemessage WHERE _del = 1');
    $re->execute();
    $re = $re->fetchColumn();
    return $re;
}
function _get_all_unread_message($bdd){
    $re = $bdd->prepare('SELECT * FROM  _assistancemessage WHERE _ispending = 1');
    $re->execute(); 
    $re = $re->fetchAll();
    if(count($re) > 0){
        $boxmessage = [];
        for($i = 0; $i < count($re); $i++){
            $message = new Message(
            $re[$i]['id'],
            $re[$i]['_name'],
            $re[$i]['_addmail'],
            $re[$i]['_phone'],
            $re[$i]['_content'],
            $re[$i]['_response'],
            $re[$i]['_date']);
            array_push($boxmessage,$message);
        }
        return $boxmessage;
    }else return null;
}
function _deleteMessage($item,$bdd){
    $re = $bdd->prepare('DELETE FROM _assistancemessage WHERE id = ?');
    if($re->execute(array($item))){
        return true;
    }else return false;
}
function _get_single_mssg($item,$bdd){
    $r = $bdd->prepare('SELECT * FROM _assistancemessage WHERE id = ?');
    if($r->execute(array($item))){
    $r = $r->fetch();
    if(!empty($r)){
        return $message = new Message($r['id'],$r['_name'],$r['_addmail'],$r['_phone'],$r['_content'],$r['_response'],$r['_date']);
    }else return null;
    }else return null;
}
function _on_responding_customer($item,$content,$bdd){
    $re = $bdd->prepare('UPDATE _assistancemessage SET _response = ?,_ispending = 0 WHERE id = ?');
    // $re->execute([$content,$item]);
    if($re->execute([$content,$item])){
        return true;
    }else return false;
    
}
function _get_latest_message($bdd){
    $re = $bdd->prepare('SELECT * FROM _assistancemessage WHERE _ispending = 1 ORDER BY id DESC LIMIT 0,4');
    $re->execute();
    $re = $re->fetchAll();
    if(count($re) > 0){
        $boxmessage = [];
        for($i = 0; $i < count($re); $i++){
            $message = new Message(
            $re[$i]['id'],
            $re[$i]['_name'],
            $re[$i]['_addmail'],
            $re[$i]['_phone'],
            $re[$i]['_content'],
            $re[$i]['_response'],
            $re[$i]['_date']);
            array_push($boxmessage,$message);
        }
        return $boxmessage;
    }else return null;
}
function _respond_customer($customer,$content,$bdd){
    // $customer = _onGettingCustomer($j,$bdd);
    if($customer !== NULL){
    $cmpl = time();
    list($nom,$telephone,$email) = $customer;
    $from  ='contact@lesmilleservices.com';
    $from_ = "L1000";
    $subject = 'Service Client | Assistance';
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
                         <h1><a href="https://lesmillesevices.com">Les Mille Services</a></h1>
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
                             <h2>Réponse à votre <strong>Démande d\assistance</strong></h2>
                         </div>
                     </td>
                 </tr>
             </table>
           </td>
           </tr><!-- end tr -->
           <tr>
               <td class=" bg_white">
                 <div class="heading-section" style="padding: 0 2.5em; text-align: left;">
                     <h2>Bonjour, <b>'.$nom.'</b></h2>
                     <p>'.$content.'</p>
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