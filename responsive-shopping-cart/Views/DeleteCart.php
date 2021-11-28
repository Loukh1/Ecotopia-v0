<?php
include "../controller/panierController.php";
$u=new panierController();
$u->deleteCart($_GET["pId"]);
header('Location:../views/shopping_cart.php');