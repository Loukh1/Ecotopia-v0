<?php
session_start();
include '../Controller/produitC.php';
$produitC = new produitC();
$listeproduits = $produitC->afficherproduits();
if (isset($_REQUEST['search_box']))
$listerecherche= $produitC->rechercheproduit($_REQUEST['search_box']);


?>
<!DOCTYPE html>
<html lang="en">
  <head>
  
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>shop ECOTOPIA</title>
    <link rel="stylesheet" href="assets/css/shop.css" />
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
  
  <?php if($_SESSION['type']== "admin"){ echo"<button ><a  href='dash/AddP.php'>Add Produits</a></button><br>";}?>
  <button class="boutonlog" ><a style='color:black;text-decoration:none;'  href='../logout.php'>Log out</a></button>
  </div>
    <!-- header-->
   
    <!-- <p><i class="fas fa-store"></i></p> -->
    <!--header-->
    <div class="container">
      <h2 class="text-center mt-4 mb-4">Search for a product</h2>
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
    <!-- content -->
    <div class="content-afficher">
      <div class="top-content">
     
        
      </div>
      <div class="main-content">
      <?php
      if (isset($_REQUEST['search_box']))
      $liste=$listerecherche;
      else
      $liste=$listeproduits;
     foreach($liste as $produit){
   
         ?>
                     <div class='card'>
                         <a href=<?php echo "/Ecotopia/View/specificP.php?id=".$produit["id"] ?>>
     
            <img src=<?php echo $produit["urlimage"] ?> class='image-produit'/>  </a>
            <p><?php echo $produit["nom"]; ?></p>
            <button  class='card-btn'><?php echo $_SESSION["id"]."dt";?></button>
            <button  class='card-btn'> <?php $h=$produit["id"];$h2=$_SESSION["id"]; echo"<a href='Addtocart.php?pId=$h&uid=$h2'>Ajouter</a>";?></button>
            </div> 
           <?php } ?>     
            
            
        

      
     
        
      </div>
     
    </div>
    
    <!-- /content -->
   
     
       <!-- FOOTER -->
    <div class="footer">
      <div class="footer-container">
        <div class="footer-top">
        <h1>Ecotopia</h1>
        <ul class="link-list">
        <p class="link"> <a href="../home.php" style=" color: #000000;text-decoration: none;">Home</a> </p>
      <?php if($_SESSION["type"] == "user"){ echo "<p class='link'> <a href='profil.php' style=' color: #000000;text-decoration: none;'>Profil</a> </p>";} ?>
      <p class="link"> <a href="AfficherB.php" style=" color: #000000;text-decoration: none;">Blog</a> </p>
      <p class="link"> <a href="" style=" color: #000000;text-decoration: none;">Events</a> </p>
      <p class="link"> <a href="Afficherproduits.php" style=" color: #000000;text-decoration: none;">Shop</a> </p>
      <p class="link">About us</p>
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
            &copy;  2021-2022
          </div>
        </div>
      </div>
    </div>
    <!-- /FOOTER -->
    </body>
</html>
<script>
  function load_search_history() {
    var search_query = document.getElementsByName('search_box')[0].value;

    if (search_query == '') {

      fetch("process_data2.php", {

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

      ajax_request.open('POST', 'process_data2.php');

      ajax_request.send(form_data);

      ajax_request.onreadystatechange = function() {
        if (ajax_request.readyState == 4 && ajax_request.status == 200) {
          var response = JSON.parse(ajax_request.responseText);

          var html = '<div class="list-group">';

          if (response.length > 0) {
            for (var count = 0; count < response.length; count++) {
              html += '<a href="#" class="list-group-item list-group-item-action" style="color:black;" onclick="get_text(this)">' + response[count].nom + '</a>';
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