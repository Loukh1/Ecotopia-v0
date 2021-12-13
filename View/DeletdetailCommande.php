<?php
include "../Controller/detailcommandeController.php";
$u=new detailcommandeController();
$u->deletCommande($_GET["dId"]);
header('Location:../View/dash/showC.php');