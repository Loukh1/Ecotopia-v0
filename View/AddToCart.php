<?php
session_start();
include "../controller/panierController.php";
include "../model/panier.php";
    $panierC = new panierController();
    $a= $_GET["pId"];
    $b=$_GET["uid"];
    $panierC->addToCart($a,$b);
    header('Location:afficherproduits.php');      
    
?>


