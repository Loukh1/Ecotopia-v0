<?php
session_start();
include_once '../Model/article.php';
include_once '../Controller/articleC.php';
include_once '../Controller/commentC.php';
include_once '../Model/comment.php';
$article = NULL;
$articleC = new articleC();
$listeArticles = $articleC->afficherArticles();
$comment = NULL;
$commentC = new commentC();


$articleC = new articleC();
if (isset($_GET['post_id'])) {
    $article = $articleC->recupererArticle($_GET['post_id']);
    $listeComments = $commentC->afficherComments($_GET['post_id']);
}

if (!empty($_POST["comment"])){
    $comment = new comment( null,$_GET['post_id'],$_SESSION["id"],$_SESSION["name"], $_POST['comment'], date("Y-m-d"));
    $commentC->ajouterComment($comment);
    header('refresh: 1');
  }
  


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="images/icon_tab.png">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Article: <?php echo $article['title']; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font awesome icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/css/shop.css">
    <link rel="icon" href="images/icon_tab.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/specific.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


</head>

<body>
    <!-- header -->
    <div class="top-bar">
    <div class="email-num">
      <div>
        <span class="mai-mail fg-primary"></span>
        <a href="ecotopia@gmail.com">Ecotopia@gmail.com</a>
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
      
      <h1 class="ecotopia">ECOTOPIA</h1>

      <div class="onglets">
      <p class="link"> <a href="../index.php" style=" color: #000000;text-decoration: none;">Home</a> </p>
      <?php if($_SESSION["type"] == "user"){ echo "<p class='link'> <a href='profil.php' style=' color: #000000;text-decoration: none;'>Profil</a> </p>";} ?>
      <p class="link"> <a href="AfficherB.php" style=" color: #000000;text-decoration: none;">Blog</a> </p>
      <p class="link"> <a href="" style=" color: #000000;text-decoration: none;">Events</a> </p>
      <p class="link"> <a href="Afficherproduits.php" style=" color: #000000;text-decoration: none;">Shop</a> </p>
      <p class="link">About us</p>
        <form>
         
        </form>
        <p><i class="fas fa-heart"></i></p>
        <p> <a href="shopping_cart.php" style='color:black;'><i class="fas fa-shopping-cart"></i></a> </p>
        <?php if($_SESSION["type"] == "user"){ echo "<p> <a href='view/profil.php' style='color: #000000;text-decoration: none;'><i class='fas fa-user-circle'></i></a> </p>";} ?>

      </div>
       <input class="search" type="search" size="10" placeholder="Search..." />
    </nav>
    <div class="ff">

    <!-- end of header -->

    <?php
    if (isset($_GET['post_id'])) {
        $article = $articleC->recupererArticle($_GET['post_id']);
    ?>
        <center>
            <h1><?php echo $article['title']; ?></h1>
        </center>
        <center>
            <h4><?php echo $article['author']; ?>|<?php echo $article['datep']; ?></h4>
        </center>
        <center>
            <h5><?php echo $article['descr']; ?></h5>
        </center><br><br>
        <center>
            <div class="eee"><?php echo $article['body']; ?></div>
        </center>
    <?php
    }
    ?>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="comments">
                    <div class="comments-details">
                        <span class="total-comments comments-sort"></span>
                      <!--  <span class="dropdown">
                            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">Sort By <span class="caret"></span></button>
                            <div class="dropdown-menu">
                                <a href="#" class="dropdown-item">Top Comments</a>
                                <a href="#" class="dropdown-item">Newest First</a>
                            </div>
                        </span>-->
                    </div>
                    <div class="comment-box add-comment">
                        <span class="commenter-pic">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/User_icon_2.svg/2048px-User_icon_2.svg.png" class="img-fluid">
                        </span>
                        <form class="" method="POST">
                        <span class="commenter-name">
                            <input type="text" placeholder="Add a public comment" name="comment">
                            <button type="submit" class="btn btn-default">Comment</button>
                            <button type="reset" class="btn btn-default">Cancel</button>
                        </span>
                        </form>
                    </div>
                    <?php
        foreach ($listeComments as $com) {
        ?>
                    <div class="comment-box">
                        <span class="commenter-pic">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/User_icon_2.svg/2048px-User_icon_2.svg.png" class="img-fluid">
                        </span>
                        <span class="commenter-name">
                            <a href="#"><?php echo $com['name']; ?></a> <span class="comment-time"></span>
                        </span>
                        <p class="comment-txt more"><?php echo $com['comment']; ?></p>
                        <span><?PHP $h=$com['id'];$p=$article['post_id']; if($_SESSION["id"] == $com['user_id'] ){ echo "<button type='submit' class='btn btn-default' style='background: #03a9f4;color: white;'><a style='color: #ffffff;text-decoration: none;' href='ModifierComment.php?id=$h&post_id=$p'>MODIFY</a></button>";}?></span>
                        <span><?PHP $h=$com['id'];$p=$article['post_id']; if($_SESSION["id"] == $com['user_id'] ){ echo "<button type='submit' class='btn btn-default' style='background: red;color: white;'><a style='color: #ffffff;text-decoration: none;' href='SuppComment2.php?id=$h&post_id=$p'>DELETE</a></button>";}?></span>
                    </div>
                    <?php
        }
        ?>
                    
                    
                   
                </div>
            </div>
        </div>
    </div>
    <!-- footer -->

</body>

</html>