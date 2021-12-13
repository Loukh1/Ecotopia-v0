<?php
include "../Controller/commandeController.php";
$u=new commandeController();
$u->deletCommande($_GET["cId"]);
header('Location:../View/dash/showC.php?state=none');

?>