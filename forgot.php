<?php
require "config2.php";
include 'Controller/articleC.php';
$articleC = new articleC();

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
	$email = $_POST['email'];
	$n= $articleC->verifEmail($email);
	if($n!=0)
	{
		$token=uniqid(md5(time()));
		$articleC->insertToken($email,$token);
		$subject= "Ecotopia: Password Reset Link!";
		$message= "Hi $email,<br> Click <a href='http://localhost/Ecotopia/reset.php?token=$token'>here</a> to reset your password. ";
		$articleC->resetmail($email,$message);
		header("location:check.html");
	}
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<link rel="icon" href="View/images/icon_tab.png">
    <link rel="stylesheet" href="View/assets/css/Login.css">
	<title>Forgot password</title>
	

</head>

<body>
	<!-- partial:index.partial.html -->
	<div class="wrapper">
		<div class="container">
			<h1>Enter your Email</h1>

			<form class="form" action="#" method="POST">
				<input type="email" placeholder="Email" name="email">
				<button type="submit" id="login-button">Send</button><br><br>
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