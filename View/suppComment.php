<?php
	include '../Controller/commentC.php';
	$commentC=new commentC();
	$commentC->supprimerC($_GET["post_id"]);
	header('Location:dash/showComments.php');
?>