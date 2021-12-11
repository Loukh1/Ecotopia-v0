<?php
    include_once '../Model/user.php';
    include_once '../Controller/userC.php';

    $error = "";

    // create adherent
    $user = null;

    // create an instance of the controller
    $userC = new userC();
    if (
        isset($_POST["fname"]) &&
		    isset($_POST["lname"]) &&		
        isset($_POST["email"]) &&
		    isset($_POST["user"])&& 
       isset($_POST["password"])&&
        isset($_POST["confirm"])&&
        isset($_POST["birthday"])&&
        isset($_POST["ville"])&&
        isset($_POST["adressee"])&&
        isset($_POST["codee"])&&
        isset($_POST["telephonee"])&&
        isset($_POST["question"])&&
        isset($_POST["questionn"])

    ) {
        if (
            !empty($_POST["fname"]) && 
			      !empty($_POST['lname']) &&
            !empty($_POST["email"]) &&
            !empty($_POST["user"]) &&
		    	  !empty($_POST["password"]) &&
            !empty($_POST["confirm"]) &&
            !empty($_POST["birthday"]) &&
            !empty($_POST["ville"]) &&
            !empty($_POST["adressee"]) &&
            !empty($_POST["codee"]) &&
            !empty($_POST["telephonee"]) &&
            !empty($_POST["question"]) &&
            !empty($_POST["questionn"]) 
            
            
        ) {
            $user = new user(
                $_POST['fname'],
				        $_POST['lname'],
                $_POST['email'], 
                $_POST['user'],
				      $_POST['password'],
                $_POST['confirm'],
                $_POST['birthday'],
                $_POST['ville'],
                $_POST['adressee'],
                $_POST['codee'],
                $_POST['telephonee'],
                $_POST['question'],
                $_POST['questionn'],
                $_POST['status']
                
               
            );
            $userC->ajouteruser($user);
             header('Location:../index.php');
        }
        else
            $error = "Missing information";
    }

    
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Formulaire dinscription</title>
  <link rel="stylesheet" href="assets/css/style2inscri.css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" />
  <script src="assets/js/controle.js">
   
  </script>
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
    <p class="link">login</p> 
    <p class="link">s'inscrire</p>
      <p class="link">groups</p>
      <p class="link">events</p>
      <p class="link">shop</p>
      <p class="link">about us</p>
      <form>
        <input class="search" type="search" placeholder="research" />
      </form>
      <p><i class="fas fa-heart"></i></p>
      <p><i class="fas fa-shopping-cart"></i></p>
    </div>
  </nav>
  <!---FORMULAIRE-->
  <div class="test">
    <form name="F"  method="post">
      <h1><strong> bienvenue veuillez remplir ce formulaire</strong></h1>
      <label>Nom</label>
      <br>
      <input type="text" size="50" id="name" name="fname" >
      <br>
      <label>prenom</label>
      <br>
      <input type="text" size="50" id="prenom" name="lname">
      <br>
      <label>Email</label>
      <br>
      <input type="email" placeholder="contact@exemple.com" name="email" size="50" id="mail">
      <br>
      <label>Username</label>
      <br>
      <input type="text" id="user" name="user" minlength="6" maxlength="15" title="au moins 6 caracteres"
        size="50">
      <br>
      <label>Mot de passe </label>
      <br>
      <input type="password" id="password" name="password" size="50">
      <br>
      <label>Confirmer mot de passe </label>
      <br>
      <input type="password" id="confirm" name="confirm" size="50">
      <br>

      <label>Date de naissance</label>
      <br>
      <input type="date" size="50" id="birthday" name="birthday">
      <br>
      <label for="ville ">Ville</label>
      <br>
      <select Ville id="ville" name="ville">
        <option>choisir</option>
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


      </select>
      <br>

      <label>Adresse</label>
      <br>
      <textarea id="adressee" name="adressee"></textarea>
      <br>
      <label>code postal</label>
      <br>
      <input type="number" id="codee" name="codee" maxlength="4">
      <br>
      <label>telephone</label>
      <br>
      <input type="number" id="telephonee" name="telephonee">
      <br>
      <br>
      <label> Avez vous participer à des evenements de nettoyage ?</label>
      <br>
      <input type="radio" name="question" value="o">oui <br> <input type="radio" name="question" value="n">non<br>
      <br>

      <label> vous appartenez à des associations qui s'interessent à l'environnement ?</label>
      <br>
      <input type="radio" name="questionn" value="x">oui <br> <input type="radio" name="questionn" value="y">non
      <br>
      <br>
      <input type="submit" name="submit" value="Submit" onclick="return verrif();"><input type="reset" name="reset" value="Reset">
    </form>
  </div>

  <!-- FOOTER -->
  <div class="footer">
    <div class="footer-container">
      <div class="footer-top">
        <h1>Ecotopia</h1>
        <ul class="link-list">
          <li>Home</li>
          <li>Groups</li>
          <li>Events</li>
          <li>Shop</li>
          <li>About</li>
        </ul>
        <div class="social-media-footer">
          <p><i class="fab fa-facebook"></i></p>
          <p><i class="fab fa-instagram"></i></p>
          <p><i class="fab fa-snapchat-square"></i></p>
          <p><i class="fab fa-pinterest-square"></i></p>
          <p><i class="fab fa-youtube"></i></p>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="footer-copyright-left">
          Created by Group 6
        </div>
        <div class="footer-copyright-right">
          &copy; 2021-2022
        </div>
      </div>
    </div>
  </div>
  <!-- /FOOTER -->

</body>

</html>