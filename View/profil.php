<?php
session_start();
include_once '../Controller/userC.php';
include_once '../Model/user.php';
$user = NULL;
$userC = new userC();
$user = $userC->recupereruser($_SESSION['id']);
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  $user2 =new user($_POST["fname"],$_POST["lname"],$_POST["email"],NULL,NULL,NULL,NULL,$_POST["ville"],$_POST["adress"],$_POST["zip"],$_POST["phone"],NULL,NULL,NULL);
  $userC->modifieruser($user2,$_SESSION["id"]);
  header("location:profil.php");
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Profil</title>
  <link rel="stylesheet" href="assets/css/profil2.css" />
  <link rel="stylesheet" href="assets/css/profil.css" />

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" />
  <link rel="script" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js" />
  <link rel="script" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" />

</head>

<body>
  <div class="top-bar">
    <div class="email-num">
      <div>
        <span class="mai-mail fg-primary"></span>
        <a href="ecotopia@gamil.com">ecotopia@gamil.com</a>
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
    <?php if ($_SESSION["type"] == "user") {
        echo "<p class='link'> <a href='../index.php' style=' color: #000000;text-decoration: none;'>Home</a> </p>";
      } ?>
      <?php if ($_SESSION["type"] == "user") {
        echo "<p class='link'> <a href='profil.php' style=' color: #000000;text-decoration: none;'>Profil</a> </p>";
      } ?>
      <?php if ($_SESSION["type"] == "visiteur") {
        echo "<p class='link'> <a href='../log.php' style=' color: #000000;text-decoration: none;'>Login</a> </p>";
      } ?>
      <?php if ($_SESSION["type"] == "visiteur") {
        echo "<p class='link'> <a href='formulair dinscription.php' style=' color: #000000;text-decoration: none;'>Sign Up</a> </p>";
      } ?>
      <p class="link"> <a href="AfficherB.php" style=" color: #000000;text-decoration: none;">Blog</a> </p>
      <p class="link"> <a href="" style=" color: #000000;text-decoration: none;">Events</a> </p>
      <p class="link"> <a href="Afficherproduits.php" style=" color: #000000;text-decoration: none;">Shop</a> </p>
      <p class="link">About us</p>
      <form>
        <input class="search" type="search" placeholder="research" />
      </form>
      <p> <a href="index.php" style=" color: #000000;text-decoration: none;"><i class="fas fa-heart"></i></a> </p>
      <p><i class="fas fa-shopping-cart"></i></p>
      <?php if ($_SESSION["type"] == "user") {
        echo "<p> <a href='view/profil.php' style='color: #000000;text-decoration: none;'><i class='fas fa-user-circle'></i></a> </p>";
      } ?>
    </div>
  </nav>

  <center>
    <h1>Welcome: <?php echo $_SESSION["name"]; ?></h1>
  </center>
  <div class="wrapper bg-white mt-sm-5">
    <h4 class="pb-4 border-bottom">Account Details</h4>
    <div class="d-flex align-items-start py-3 border-bottom"> <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/User_icon_2.svg/2048px-User_icon_2.svg.png" class="img" alt="">
      <div class="pl-sm-4 pl-2" id="img-section"> <b>ID:<?php echo $_SESSION["id"]; ?></b><br><b><?php echo $_SESSION["name"]; ?></b>
        <p><?php echo $_SESSION["user"]; ?></p>
      </div>
    </div>
    <form action="" method="POST">
    <div class="py-2">
      <div class="row py-2">
        <div class="col-md-6"> <label for="firstname">First Name</label> <input name="fname" type="text" class="bg-light form-control" value=<?php echo $user["fname"]; ?>> </div>
        <div class="col-md-6 pt-md-0 pt-3"> <label for="lastname">Last Name</label> <input name="lname" type="text" class="bg-light form-control" value=<?php echo $user["lname"]; ?>> </div>
      </div>
      <div class="row py-2">
        <div class="col-md-6"> <label for="email">Email Address</label> <input name="email" type="text" class="bg-light form-control" value=<?php echo $user["email"]; ?>> </div>
        <div class="col-md-6 pt-md-0 pt-3"> <label for="phone">Phone Number</label> <input name="phone" type="tel" class="bg-light form-control" value=<?php echo $user["telephonee"]; ?>> </div>
      </div>
      <div class="row py-2">
        <div class="col-md-6 pt-md-0 pt-3"> <label for="phone">Adresse</label> <input name="adress" type="tel" class="bg-light form-control" value=<?php echo $user["adressee"]; ?>> </div>
        <div class="col-md-6"> <label for="email">Zip Code</label> <input name="zip" type="text" class="bg-light form-control" value=<?php echo $user["codee"]; ?>> </div>
      </div>
      <div class="row py-2">
        <div class="col-md-6"> <label for="country">Governaut</label> <select name="ville" id="country" class="bg-light">
            <option ><?php echo $user["ville"]; ?></option>
            <option>Tunis</option>
            <option>Ben arous</option>
            <option>Ariana</option>
            <option>Manouba</option>
            <option>Nabeul</option>
            <option>Bizerte</option>
            <option>Sousse</option>
            <option>Kasserine</option>
            <option>Monastir</option>
            <option>Sfax</option>
            <option>Zaghouene</option>
            <option>Kbeli</option>
            <option>gafssa</option>
            <option>Beja</option>
            <option>Jendouba</option>
            <option>Kairaouan</option>
            <option>Kef</option>
            <option>Mahdia</option>
            <option>Siliana</option>
            <option>Sidi bouzid</option>
            <option>Medenine</option>
            <option>Tozeur</option>
            <option>Gabes</option>
            <option>Tataouine</option>
          </select> </div>
        
      </div>
      <div class="py-3 pb-4 border-bottom"> <button  type="submit" class="btn btn-primary mr-3">Save Changes</button> <button class="btn border button">Cancel</button> </div>
      </form>
      <div class="d-sm-flex align-items-center pt-3" id="deactivate">
        <div> <b>Deactivate your account</b>
          <p> <a style="color: #000000;text-decoration: none;" href="">Forgot your password?</a></p>
        </div>
        <div class="ml-auto"> <button class="btn danger"><a href='../logout.php' style="color: #FF0000;text-decoration: none;">Log out</a></button> </div>
      </div>
    </div>


</body>

</html>