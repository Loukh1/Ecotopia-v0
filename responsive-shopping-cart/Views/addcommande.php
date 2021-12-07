<?php
require_once "../php_mailer/mail.php";
include "../Model/panier.php";
include "../Controller/panierController.php";
$total=0;
$panier=new panierController;
$pn=$panier->getCart();
 $commande = new commandeController();
 $dcom=new commandedetailController();


    
    if($_POST['11']==0){       

        foreach($pn as $pn)
        {
            $total=$total+$pn['qty'];
        }
        $totalprix=0;
        $pn=$panier->getCart();
        if($total!=0){
           $commande->addcommande(rand(),$total);
            $cm=$commande->getsCommande();
            $mail->Body= "thank you for your purchase";
            $mail->Body.= "\nproduct name quantity price/unit";
          foreach($pn as $pn)
           {
               $prod=$panier->getProd($pn['id_produit']);
               $totalprix+=$prod['prix']*$pn['qty'];
               $mail->Body.= "\n".$prod['nom']." ".$pn['qty']." ".$prod['prix'];
           $dcom->adddetailcommande($pn['qty'],$pn['id_produit'],$cm['id_commande']);
           } 
           $mail->Body.= "\n delivery fee 7dt  ";
           $totalprix=$totalprix+7;
           $mail->Body.= "\nTotal: ".$totalprix." dt";
        

        $mail->setFrom('codegreen.or@gmail.com','ecotopia');   // email eli bch tabath bih
        $mail->addAddress('eya.mosbeh@esprit.tn');   // email leli theb tabaathloo
        $mail->Subject = 'ecotopia shop';
        
        $mail->send();
        $panier->deleteallCart();
    }
        
        header('Location:../Views/shopping_cart.php'); 

    }
    else if($_POST['11']==1){
        header('Location:../Views/payment.php');
    }
     
?>
