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
$a=$_GET['id'];
$b=$_GET['post_id'];

$articleC = new articleC();
if (isset($_GET['post_id'])) {
    $article = $articleC->recupererArticle($_GET['post_id']);
    $c = $commentC->recuperercomment($a);
    $listeComments = $commentC->afficherComments($_GET['post_id']);
}
if (!empty($_POST["comment"])) {
    $comment = new comment(null, $_GET['post_id'], $_SESSION["id"], $_SESSION["user"], $_POST['comment'], date("Y-m-d"));
    $commentC->modifiercomment($comment, $_GET['id']);
    header("location:specificB.php?post_id=$b");
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
    <link rel="stylesheet" href="assets/css/blog.css">
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
        <a href="index.html">
            <img alt="logo" src="images/icon_tab.png" class="im">
        </a>
        <h1 class="e">ECOTOPIA</h1>
        <div class="onglets">
            <p class="link">Home</p>
            <p class="link">Events</p>
            <p class="link">Blog</p>
            <p class="link">Shop</p>
            <p class="link">About us</p>
            <form>
                <input class="search" type="search" placeholder="research" />
            </form>
            <p><i class="fas fa-heart"></i></p>
            <p><i class="fas fa-shopping-cart"></i></p>
        </div>
    </nav>

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
                                
                                    <input type="text" name="comment" value='<?php if ($c['id'] == $_GET['id']) {echo $c['comment']; } ?>'>
                               
                                <button type="submit" class="btn btn-default">Modify</button>
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