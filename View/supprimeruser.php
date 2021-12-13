<?php
    include '../Controller/userC.php';
    $userC=new userC();
    $userC->supprimeruser($_GET["email"]);
    header('Location:dash/showM.php');
   
?>