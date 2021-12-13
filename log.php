<?php
session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="View/assets/css/style1log.css">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>shop ECOTOPIA</title>
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.13.0/css/all.css"
    />
</head>
<body>
<div class="top-bar">
    <div class="email-num">
      <div>
        <span class="mai-mail fg-primary"></span>
        <a href="ecotopia@gmail.com">Ecotopia@gmail.com</a>
      </div>
      <div class="d-inline-block ml-2">
        <span class="mai-call fg-primary"></span>
       
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
    <div class="login-form">
    <?php
            if(isset($_GET['login_err']))
            {
                $err =htmlspecialchars($_GET['login_err']);

                switch($err)
                {

                    case 'mdpconnect':
                    ?>
                       <div class="alert alert-danger">
                            <strong>Erreur:</strong> mot de passe incorrect
                       </div>
                    <?php
                    break;

                    case 'mailconnect':
                        ?>
                           <div class="alert alert-danger">
                                <strong>Erreur:</strong> email incorrect
                           </div>
                     <?php
                    break;

                    case 'already':
                        ?>
                           <div class="alert alert-danger">
                                <strong>Erreur:</strong> compte non existant
                           </div>
                    <?php
                    break;




                }
            }
            ?>
    <form action="connexion.php" method="post"> 
        <h1 class="login">Login</h1>
        <br><br>
        <div class="form-group">
              <input type="email" placeholder="mail" name="mailconnect" class="form-control">
        </div>
        
        <div class="form-group">
           <input type="password" placeholder="Mot de passe " name="mdpconnect" class="form-control">
        </div>
        <div class="form-group">
        <button type="submit" class="btn" name="formconnect"> Login</button>
        </div>
        <p class="text-center" ><a style='color:white;' href="View/forgot.php">Forgot_password?</a></p>
    
    </form>
 <a style='color:white;top:550px;left:620px;position:absolute;'href="View/formulair dinscription.php">Sign Up</a>
    
    
</body>
</html>