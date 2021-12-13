<?php
include "../controller/panierController.php";
$u=new panierController();
$u->deleteCart($_GET["pId"],$_GET["idcl"]);
header('Location:shopping_cart.php');