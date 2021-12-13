<?php
session_start();
if(isset($_SESSION["type"])){
$_SESSION["type"] = "user";
}
else{$_SESSION["type"] = "visiteur";}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home page</title>
  <link rel="stylesheet" href="view/assets/css/home.css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" />
</head>
<body>
<div class="top-bar">
    <div class="email-num">
      <div>
        <span class="mai-mail fg-primary"></span>
        <a class="mail"href="ecotopia@gmail.com">Ecotopia@gmail.com</a>
      </div>
      <div class="d-inline-block ml-2">
        <span class="mai-call fg-primary"></span>
        <a href="callus:+2165892516">+2165892516</a>
      </div>
    </div>
    <div class="col-md-4 text-right d-none d-md-block">
      <div class="social-mini-button">
        <p><i class="fab fa-facebook"></i></p>
        <p><i class="fab fa-instagram"></i></p>
        <p><i class="fab fa-snapchat-square"></i></p>
        <p><i class="fab fa-pinterest-square"></i></p>
        <p><i class="fab fa-youtube"></i></p>
      </div>
    </div>
  </div>
  <!-- .top-bar -->

  <!--barre de navigation-->
  <nav class="bar-logo">
    <h1>ECOTOPIA</h1>
    <div class="onglets">
    <?php if($_SESSION["type"] == "user"){ echo "<p class='link'> <a href='index.php' style=' color: #000000;text-decoration: none;'>Home</a> </p>";} ?>
    <?php if($_SESSION["type"] == "user"){ echo "<p class='link'> <a href='view/profil.php' style=' color: #000000;text-decoration: none;'>Profil</a> </p>";} ?>
   <?php if($_SESSION["type"] == "visiteur"){ echo "<p class='link'> <a href='log.php' style=' color: #000000;text-decoration: none;'>Login</a> </p>";} ?>
   <?php if($_SESSION["type"] == "visiteur"){ echo "<p class='link'> <a href='view/formulair dinscription.php' style=' color: #000000;text-decoration: none;'>Sign Up</a> </p>";} ?>
      <p class="link"> <a href="View/AfficherB.php" style=" color: #000000;text-decoration: none;">Blog</a> </p>
      <p class="link"> <a href="" style=" color: #000000;text-decoration: none;">Events</a> </p>
      <p class="link"> <a href="View/Afficherproduits.php" style=" color: #000000;text-decoration: none;">Shop</a> </p>
      <p class="link">About us</p>
      <form>
        <input class="search" type="search" placeholder="Search..." />
      </form>
      <p> <a href="index.php" style=" color: #000000;text-decoration: none;"><i class="fas fa-heart"></i></a> </p>
      <p><i class="fas fa-shopping-cart"></i></p>
      <?php if($_SESSION["type"] == "user"){ echo "<p> <a href='view/profil.php' style='color: #000000;text-decoration: none;'><i class='fas fa-user-circle'></i></a> </p>";} ?>
    </div>
  </nav>

  <section class="banner">
        <video loop
        muted
        autoplay
        preload="auto">
        <source src="view/assets/videos/vid.mp4" type="video/mp4">
    </video>
        <div class="testimonial">
            <div class="card">
              
               <p class="title">Welcome To Ecotopia </p>
               <p class="phrase">Plant Less Plastic &nbsp&nbspPlant More Trees </p>
            </div>
        </div>
    </section>

  
</body>
</html>