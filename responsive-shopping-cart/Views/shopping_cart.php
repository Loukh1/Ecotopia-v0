<?php 
include "header.php";
include_once '../Controller/panierController.php';

$pn=new panierController();
$panier=$pn ->getCart();

?>
<body>
<!-- partial:index.partial.html -->
<h1>Shopping Cart</h1>

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
foreach($panier as $pan){
  $prod=$pn->getProd($pan['id_produit']);

?>
  <div class="product">
    <div class="product-image">
      <img src="<?php echo $prod['urlimage']?>">
    </div>
    <div class="product-details">
      <div class="product-title"><?php echo $prod['nom']?></div>
      <p class="product-description"><?php echo $prod['description']?></p>
    </div>
    <div class="product-price"><?php echo $prod['prix']?></div>
    <div class="product-quantity">   
      <form action="UpdateCart.php" method="GET">
      <input type="number" id="qty" name="qty" value="<?php echo $pan['qty'];?>" min="1">
      <input type="hidden" id="id_produit" name="id_produit" value="<?php echo $pan['id_produit']?>">
      <button class="remove-product">
      <input type="submit" value="+">
      </button>
      </form> 
    </div>
    <div class="product-removal">
      <button class="remove-product">
      <a href="DeleteCart.php?pId=<?PHP echo $pan['id_produit']; ?>" >remove</a>
      </button>
    </div>
    <div class="product-line-price"><?php echo $prod['prix']*$pan['qty']; ?></div>
  </div>
  </div>
  <?php 
    $totalprix+=$prod['prix']*$pan['qty'];
    ?>
  <?php }?>

  <div class="totals">
    <div class="totals-item">
      <label>total</label>

      <div class="totals-value" id="cart-subtotal">
        <?php 
        
        echo $totalprix;
        ?>
        </div>
    </div>
  </div>
      
      <button class="checkout"><a href="addcommande.php">checkout</a>
      </button>


</div>
<!-- partial -->


</body>

</html>
