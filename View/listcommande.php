<?php 
include '../Controller/panierController.php';
$cl=new commandedetailController();
$pn= new panierController();
$dcmd=$cl->showdetailcommande();
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title></title>
    </head>
    <body>
    <div class="shopping-cart">
  <div class="column-labels">
    <label class="product-image">Image</label>
    <label class="product-details">Product</label>
    <label class="product-price">Price</label>
    <label class="product-quantity">Quantity</label>
    <label class="product-line-price">Total</label>
  </div>
  <?php 
      $totalprix=0;
      //var_dump($dcmd);
      //print_r ($dcmd["id_produit"]) ;
      foreach ($dcmd as $dcmd){
          if($dcmd['idcommande']==$_GET['idcom']){
    $pr=$pn->getProd($dcmd["id_produit"])
    //var_dump($pr);
    ?>
<div class="product">
      <div class="product-image">
        <img src="<?php echo $pr['urlimage']?>">
      </div>
      <div class="product-details">
        <div class="product-title"><?php echo $pr['nom']?></div>
        <p class="product-description"><?php echo $pr['description']?></p>
      </div>
      <div class="product-price"><?php echo $pr['prix']?></div>
        <div class="product-quantity">   
        <?php echo $dcmd['qty']?>
        </div>
        <div class="product-line-price"><?php echo $pr['prix']*$dcmd['qty']?></div>
      </div>
  </div>
  <?php $totalprix+=$pr['prix']*$dcmd['qty']; ?>
    
  <?php }} ?> 

 <div class="totals">
    <div class="totals-item">
      <label>total</label>
      <div class="totals-value" id="cart-subtotal">
        <?php 
        echo $totalprix?>
        </div>
    </div>
  </div>
</div>
    </body>
    </html>

