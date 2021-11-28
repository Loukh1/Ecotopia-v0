<?php
include "../controller/panierController.php";
include "../model/panier.php";
    $panierC = new panierController();
    $panierC->updateCart($_GET['id_produit'],$_GET['qty']);
    header('Location:../views/shopping_cart.php');      

    
?>