<?php
//Test de la fonction mail();

// *** A configurer par vos soins

$to = "davidmened@gmail.com"; // Mettez l'email de réception
$from = "contact@lesmilleservices.com"; // Adresse email du destinataire de l'envoi, celui rattaché à votre domaine LWS.

// Ne pas modifier les lignes ci-dessous

$JOUR = date("Y-m-d");  // Jour de l'envoi de l'email
$HEURE = date("H:i"); // Heure d'envoi de l'email

$Subject = "Test Mail - $JOUR $HEURE";
$mail_Data = "";
$mail_Data .= " \n";
$mail_Data .= " \n";
$mail_Data .= " \n";
$mail_Data .= " \n";
$mail_Data .= " \n";

$mail_data .= "Mail HTML Simple : $Subject
\n";
$mail_Data .= "
\n";
$mail_Data .= "Ceci est un email de test de la fonction mail de PHP
\n";
$mail_Data .= "Etc.
\n";
$mail_Data .= " \n";
$mail_Data .= " \n";
$headers  = "MIME-Version: 1.0 \n";
   $headers .= "Content-type: text/html; charset=iso-8859-1 \n";
   $headers .= "From: $from  \n";
   $headers .= "Disposition-Notification-To: le mille services  \n";

   // Message de Priorité haute
   // -------------------------
   $headers .= "X-Priority: 1  \n";
   $headers .= "X-MSMail-Priority: High \n";

   $CR_Mail = TRUE;

   $CR_Mail = @mail ($to, $Subject, $mail_Data, $headers);
 
   if ($CR_Mail === FALSE)   echo " ### CR_Mail=$CR_Mail - Erreur envoi mail 
 \n";
   else                      echo " *** CR_Mail=$CR_Mail - Mail envoyé
 \n";  
?>