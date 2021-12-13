<?php
	include '../Controller/eventC.php';
	$articleC=new eventC();
	$articleC->supprimerevent($_GET["id"]);
	header('Location:dash/events.php');
?>