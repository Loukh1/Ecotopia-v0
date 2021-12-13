<?php
session_start();
require_once "../php_mailer/mail.php";
include "../Model/panier.php";
include "../Controller/panierController.php";
$panier=new panierController;
$commande = new commandeController();
$dcom=new commandedetailController();
$total=0;
$pn=$panier->getCart();

    foreach($pn as $pn)
    {if($pn['id_client']==$_SESSION['id']){
        $total=$total+$pn['qty'];
    }}
    $pn=$panier->getCart();
    if($total!=0 ){
        $totalprix=0;
        $commande->addcommande(rand(),$total,$_SESSION['id']);
         $cm=$commande->getCommandes($_SESSION['id']);
         $mail->Body= 'thank you for your purchase';
         $mail->Body.= '\nproduct name quantity price/unit';
       foreach($pn as $pn)
        {
            if($pn['id_client']==$_SESSION['id']){
            $prod=$panier->getProd($pn['id_produit']);
            $totalprix+=$prod['prix']*$pn['qty'];
            $mail->Body.= '\n'.$prod['nom'].' '.$pn['qty'].' '.$prod['prix'];
        $dcom->adddetailcommande($pn['qty'],$pn['id_produit'],$cm['id_commande']);
        $panier->deleteCart($pn["id_produit"],$_SESSION['id']);
        } }
        $mail->Body.= "\nTotal: ".$totalprix."dt";
     

     $mail->setFrom('codegreen.information@gmail.com','ecotopia');   // email eli bch tabath bih
     $mail->addAddress($_SESSION['user']);   // email leli theb tabaathloo
     $mail->Subject = 'ecotopia shop';
     
     $mail->send();
 }
header('Location:shopping_cart.php'); 
?>