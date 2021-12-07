<?php
include '../../Controller/commandeController.php';
require_once "../../../responsive-shopping-cart/php_mailer/mail.php";
$co=new commandeController();
$co->updatecommandestated2($_POST['idcom']);
$mail->setFrom('codegreen.or@gmail.com', 'ecotopia');   // email eli bch tabath bih
$mail->addAddress('eya.mosbeh@esprit.tn');   // email leli theb tabaathloo
$mail->Subject = 'commande';
$mail->Body    = 'your commande was delivered';
$mail->send();
header('Location:../dash/showC.php?state=none'); 
?>