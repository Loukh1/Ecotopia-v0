<?php 
include "header.php";
include "../Model/panier.php";
include_once '../Controller/panierController.php';
$cn=new commandeController();
$dc=new commandedetailController();
$prod=new panierController();
?>
<body>
<!-- partial:index.partial.html -->
<h1>Mes commandes</h1>

<div class="shopping-cart">

  <div class="column-labels">
    <label class="product-image">Image</label>
    <label class="product-details">Product</label>
    <label class="product-price">Price</label>
    <label class="product-quantity">Quantity</label>
    <label class="product-removal">Remove</label>
    <label class="product-line-price">Total</label>
  </div>
  <?php 
    $totalprix=0;
    $cmd=$cn->getCommandes(1);
    echo $cmd['id_commande'];
    foreach($cmd as $cmd){

      $dcmd=$dc->showdetailscommande($cmd['id_commande']);
    
  echo'<div>
      <label for="numcommande">N:</label>
      <label for="qtytotal">qty:</label>
      <label for="date">date</label>
  </div>
  <div>';
     echo '<p name="numcommande" id="numcommande">'.$cmd["numCommande"].'</p>';
    echo   '<p name="qtytotal" id="qtytotal">'.$cmd["quantite_total"].'</p>';
     echo  '<p name="date" id="date">'.$cmd["date"].'</p>
  </div>';
      foreach($dcmd as $dcmd){
        $pr=$prod->getProd($dcmd['id_produit']);
  echo '<div class="product">
      <div class="product-image">
        <img src="'.$pr['urlimage'].'">
      </div>
      <div class="product-details">
        <div class="product-title">'.$pr['nom'].'</div>
        <p class="product-description">'.$pr['description'].'</p>
      </div>
      <div class="product-price">'.$pr['prix'].'</div>
        <div class="product-quantity">   
        '.$dcmd['qty'].' 
        </div>
        <div class="product-line-price">'.$pr['prix']*$dcmd['qty'].'</div>
      </div>
  </div>';
    $totalprix+=$pr['prix']*$dcmd['qty'];
  
  }

  echo '<div class="totals">
    <div class="totals-item">
      <label>total</label>
      <div class="totals-value" id="cart-subtotal">
        <?php 
        '.$totalprix.'
        </div>
    </div>
  </div>';
      
  }?>

</div>
<!-- partial -->


</body>

</html>
