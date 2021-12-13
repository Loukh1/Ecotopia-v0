<?php
session_start();
include "../controller/panierController.php";
include "../model/panier.php";
    $panierC = new panierController();
    $panierC->updateCart($_GET['id_produit'],$_GET['qty'],$_GET['idcl']);
    header('Location:shopping_cart.php');      

    
?>