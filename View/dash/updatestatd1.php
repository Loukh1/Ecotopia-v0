<?php
include '../../Controller/commandeController.php';
require_once "../../../responsive-shopping-cart/php_mailer/mail.php";
$co=new commandeController();
echo $_POST['idcom'];
$co->updatecommandestated1($_POST['idcom']);

$mail->setFrom('codegreen.or@gmail.com', 'ecotopia');   // email eli bch tabath bih
$mail->addAddress('eya.mosbeh@esprit.tn');   // email leli theb tabaathloo
$mail->Subject = 'commande';
$mail->Body    = 'your commande is on route';
$mail->send();
header('Location:../dash/showC.php?state=none'); 

?>