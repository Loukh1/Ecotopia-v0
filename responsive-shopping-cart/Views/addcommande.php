<?php

include "../Model/panier.php";
include "../Controller/panierController.php";
$total=0;
$panier=new panierController;
$pn=$panier->getCart();
 $commande = new commandeController();


 foreach($pn as $pn)
 {
     $total=$total+$pn['qty'];
 }
 $pn=$panier->getCart();
    $commande->addcommande(rand(),$total);
     $cm=$commande->getsCommande();
    $dcom=new commandedetailController();
   foreach($pn as $pn)
    {
    $dcom->adddetailcommande($pn['qty'],$pn['id_produit'],$cm['id_commande']);
    } 
    $panier->deleteallCart();
    header('Location:../Views/shopping_cart.php');      

   
?>