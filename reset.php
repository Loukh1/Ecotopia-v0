<?php
require "config2.php";
include 'Controller/articleC.php';
$articleC = new articleC();
$db = config::getConnexion();

if(isset($_GET['token']))
{
	$token=$_GET['token'];
	$query=$articleC->checkToken($token);
	if($query->rowCount()!=0)
	{
		$row=$query->fetch();
		$token=$row['token'];
		$email=$row['email'];
	}
}
else
{
	header('location:index.php');
}
if ($_SERVER["REQUEST_METHOD"] == "POST")  {

	$pass=$_POST['pass1'];
	$pass2=$_POST['pass2'];
	if($pass==$pass2)
	{
		$articleC->updatePass($pass,$email);
	}

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<link rel="icon" href="View/images/icon_tab.png">
  <link rel="stylesheet" href="View/assets/css/Login.css">
	<title>Ecotopia: New Password</title>
	

</head>

<body>
	<!-- partial:index.partial.html -->
	<div class="wrapper">
		<div class="container">
			<h1>New Pasword</h1>

			<form class="form" action="" method="POST">
				<input type="text" placeholder="Password" name="pass1">
				<input type="password" placeholder="Confirm Password" name="pass2">
				<button type="submit" id="login-button">Save</button><br><br>
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