<?php
session_start();
include '../Controller/articleC.php';

$articleC = new articleC();
$listeArticles = $articleC->MostLikedArticles();
$listeArticles2 = $articleC->afficherArticles();
if (isset($_GET['search_box'])) {
  $search = $articleC->recupererArticle2($_GET['search_box']);
$h = $search['post_id'];
  header("location:specificB.php?post_id=$h");
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Ecotopia-Blog</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font awesome icon -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  <link rel="stylesheet" href="assets/css/blog.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="">
  <link rel="icon" href="images/icon_tab.png">

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
    
    <div class="onglets">
      <br>
      <p class="link">Home</p>
      <p class="link">Events</p>
      <p class="link">Blog</p>
      <p class="link">Shop</p>
      <p class="link">About us</p>
      <form method="POST">
        <input class="search" type="text" placeholder="search" name="search-box" />
      </form>
      <p><i class="fas fa-heart"></i></p>
      <p><i class="fas fa-shopping-cart"></i></p>
    </div>
  </nav>
  <!-- end of header -->
  <div class="ff">
    <label><?php $a = $_SESSION['type'];
            $b = $_SESSION['user'];
            echo "$a: $b"; ?></label><br>
    <?php if ($_SESSION['type'] == "admin") {
      echo "<button ><a  href='Add.php'>Add Article</a></button><br>";
    } ?>
    <button><a href='../logout.php'>Log out</a></button>

    <div class="container">
      <h2 class="text-center mt-4 mb-4">Search for an article</h2>
      <div class="row mt-5 mb-5">
        <div class="col col-sm-2">&nbsp;</div>
        <div class="col col-sm-8">
          <div class="dropdown">
            <form method="GET">
              <input type="text" name="search_box" class="form-control form-control-lg" placeholder="Type Here..." id="search_box" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onkeyup="javascript:load_data(this.value)" onfocus="javascript:load_search_history()" />
            </form>
            <span id="search_result"></span>
          </div>
        </div>
      </div>
    </div>
    <!-- design -->
    <section class="design" id="design">
      <div class="container">
        <div class="title">
          <h2>Most Liked Articles</h2>
          <p>Our events and the progress we made</p>
        </div>

        <div class="design-content">

          <!-- item -->
          <?php
          foreach ($listeArticles as $article) {
          ?>
          <div style='border: 4px solid lightgreen'>
            <div class="design-item">
              <div class="design-img">
                <?php $h = $article['img'];
                echo "<img src='$h'>"; ?>
                <span><i class="far fa-heart"></i> <?php echo $article['likes']; ?></span>
                <span></span>
              </div>
              <div class="design-title">
                <a href="#"><?php echo $article['title']; ?></a>
                <br>
                <p><?php echo $article['descr']; ?></p>
              </div>
            </div>
            </div>
          <?php
          }
          ?>
          <!-- end of item -->
        </div>
      </div>
    </section>
    <!-- end of design -->


    <!-- blog -->
    <section class="blog" id="blog">
      <div class="container">
        <div class="title">
          <h2>Our Blog</h2>
          <p>Latest Events, Work And Articles</p>
        </div>
        <div class="blog-content">
          <!-- item -->
          <?php
          foreach ($listeArticles2 as $article) {
          ?>
            <div <?php if ($article['likes'] > 10) {
                    echo "style='border: 4px solid lightgreen'";
                  } else {
                    echo "style='border: 4px solid black'";
                  } ?>>
              <div class="blog-item">
                <div class="blog-img">
                  <?php $h = $article['img'];
                  echo "<img src='$h'>"; ?>
                  <span><i class="far fa-heart"></i><?php echo $article['likes']; ?></span>
                </div>
                <div class="blog-text">
                  <span><?php echo $article['datep']; ?></span>
                  <h2><?php echo $article['title']; ?></h2>
                  <p><?php echo $article['descr']; ?></p>
                  <!--<a href = "#">Read More</a>-->
                  <?php $h = $article['post_id'];
                  echo "<button><a href='specificB.php?post_id=$h'>Read More</a></button>";  ?>
                  <?php $h = $article['post_id'];
                  if ($_SESSION["type"] == "user") {
                    echo "<button><a href='likeB.php?post_id=$h'>Like</a></button>";
                  } ?>
                  <?php $h = $article['post_id'];
                  if ($_SESSION["type"] == "admin") {
                    echo "<button><a href='ModifierB.php?post_id=$h'>Modifier</a></button>";
                  } ?>
                  <?php $h = $article['post_id'];
                  if ($_SESSION["type"] == "admin") {
                    echo "<button style='color: green;'><a href='SupprimerB.php?post_id=$h'>Supprimer</a></button>";
                  } ?>
                </div>
              </div>
            </div>
          <?php
          }
          ?>
        </div>
      </div>
    </section>

    <!-- end of blog -->

    <!-- about -->

    <!-- end of about -->

    <!-- footer -->
    <div class="footer">
      <div class="footer-container">
        <div class="footer-top">
          <h1>Ecotopia</h1>
          <ul class="link-list">

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
    <!-- end of footer -->


</body>

</html>
<script>
  function load_search_history() {
    var search_query = document.getElementsByName('search_box')[0].value;

    if (search_query == '') {

      fetch("process_data.php", {

        method: "POST",

        body: JSON.stringify({
          action: 'fetch'
        }),

        headers: {
          'Content-type': 'application/json; charset=UTF-8'
        }

      }).then(function(response) {

        return response.json();

      }).then(function(responseData) {

        if (responseData.length > 0) {

          var html = '<ul class="list-group">';

          html += '<li class="list-group-item d-flex justify-content-between align-items-center"><b class="text-primary"><i>Your Recent Searches</i></b></li>';

          for (var count = 0; count < responseData.length; count++) {

            html += '<li class="list-group-item text-muted" style="cursor:pointer"><i class="fas fa-history mr-3"></i><span onclick="get_text(this)">' + responseData[count].search_query + '</span> <i class="far fa-trash-alt float-right mt-1" onclick="delete_search_history(' + responseData[count].id + ')"></i></li>';

          }

          html += '</ul>';

          document.getElementById('search_result').innerHTML = html;

        }

      });

    }
  }

  function get_text(event) {
    var string = event.textContent;

    document.getElementsByName('search_box')[0].value = string;

    document.getElementById('search_result').innerHTML = '';
  }

  function load_data(query) {
    if (query.length > 2) {
      var form_data = new FormData();

      form_data.append('query', query);

      var ajax_request = new XMLHttpRequest();

      ajax_request.open('POST', 'process_data.php');

      ajax_request.send(form_data);

      ajax_request.onreadystatechange = function() {
        if (ajax_request.readyState == 4 && ajax_request.status == 200) {
          var response = JSON.parse(ajax_request.responseText);

          var html = '<div class="list-group">';

          if (response.length > 0) {
            for (var count = 0; count < response.length; count++) {
              html += '<a href="#" class="list-group-item list-group-item-action" onclick="get_text(this)">' + response[count].title + '</a>';
            }
          } else {
            html += '<a href="#" class="list-group-item list-group-item-action disabled">No Data Found</a>';
          }

          html += '</div>';

          document.getElementById('search_result').innerHTML = html;
        }
      }
    } else {
      document.getElementById('search_result').innerHTML = '';
    }
  }
</script>