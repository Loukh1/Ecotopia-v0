<?php

     session_start();
     
        
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue</title>
    <link rel="stylesheet" href="assets/css/style3user.css">
</head>
<body>
    <h1>Bienvenue ! <?php echo $_SESSION['user']; ?><h1>
    <a href="deconnexion.php" class="btn btn-danger btn-lg">Deconnexion</a>
    
    <div class="wrap">
	<div class="right-menu">
		<a  class="active" href="#profile"><i class="fa fa-user"></i><span>Profile</span></a>
		<a href="#project"><i class="fa fa-photo"></i><span>Events</span></a>
		<a  href="afficherB.php"><i class="fa fa-folder"></i><span>Blog</span></a>
	</div>
<div class="content">
<div class="profile open animated zoomIn">
	<div class="avatar">
		<img src=>
		<div class="bubble">
		<h3></h3>
		<a href="#"></a>
		</div>
	
	</div>
</div>	
<div class="project animated zoomIn">
	 	<div class="avatar">
		 
		<div class="bubble">
		<h3>Coming Soon</h3>
		<a href="#">View Details </a>
		
		</div>
	
	</div>
</div>

<div class="skills animated zoomIn">
	<div class="avatar">
		 
		<div class="bubble">
		<h3>Coming Soon</h3>
		<a href="#">View Details </a>
		
		</div>
	
	</div>
</div>
</div><!--End Content-->
 <div class="footer">
 <a href=".../" target="_blank"><i class="fa fa-link"></i><span>produits</span></a>
		<a href=".../"  target="_blank"><i class="fa fa-codepen"></i><span>Achats</span></a>
		<a href="...."  target="_blank"><i class="fa fa-twitter"></i><span>news</span></a>
		<a href="..."  target="_blank"><i class="fa fa-briefcase"></i><span>blogss</span></a>
 </div>
 </div>
    
    



</body>
</html>