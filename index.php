<?php
require "config.php";
session_start();
$db = config::getConnexion();
if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$name = $_POST['name'];
	$password = $_POST['password'];
	$hash= password_hash($password, PASSWORD_DEFAULT);
	$sql = "SELECT * from user where name='". $name ."'";
	try {
		$query = $db->prepare($sql);
		$query->execute();
		$user = $query->fetch();
		$hashh=$user['password'];
		$verif = password_verify($password, $hash);
		if ($verif==1) {
			$_SESSION["type"] = $user["type"];
			$_SESSION["user"] = $name;
			$_SESSION["id"] = $user["id"];
			if ($user["type"] == "admin") {
				header("location:View/index.php");
			}
			if ($user["type"] == "user") {
				header("location:View/afficherB.php");
			}
		}
	} catch (Exception $e) {
		die('Erreur: ' . $e->getMessage());
	}
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<link rel="icon" href="View/images/icon_tab.png">
	<link rel="stylesheet" href="View/assets/css/Login.css">
	<title>Ecotopia: Log in</title>


</head>

<body>
	<!-- partial:index.partial.html -->
	<div class="wrapper">
		<div class="container">
			<h1>Log in</h1>

			<form class="form" action="#" method="POST">
				<input type="text" placeholder="Username" name="name">
				<input type="password" placeholder="Password" name="password">
				<button type="submit" id="login-button">Login</button><br><br>
				<a href="forgot.php" style="text-decoration: none;">forgot password?</a>

			</form>
		</div>


		<ul class="bg-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
	<!-- partial -->
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
</body>

</html>