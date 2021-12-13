<?php
	include '../Controller/commentC.php';
	$commentC=new commentC();
	$a=$_GET['id'];
$b=$_GET['post_id'];
	$commentC->supprimerC($a);
	header("Location:specificB.php?post_id=$b");
?>