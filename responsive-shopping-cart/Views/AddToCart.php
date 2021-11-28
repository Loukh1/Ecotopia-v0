<?php
include "../controller/panierController.php";
include "../model/panier.php";
    $panierC = new panierController();
    $panierC->addToCart($_GET["pId"]);
    header('Location:../views/shop.php');      

    
?>