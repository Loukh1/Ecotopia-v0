<?php 
include "header.php";
include_once '../Controller/panierController.php';

$cn=new commandeController();
$dc=new commandedetailController();
$cmd=$cn ->getCommandes(1); //commande de lutilisateur 
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
foreach($cmd as $c){
    $dcmd=$dc->showdetailscommande($c['id_commande']);
    foreach($dcmd as $dcmd){
        $pr=$prod->getProd($dcmd['id_produit']);
?>
<div>
    <label for="num commande">N:</label>
    <label for="qtytotal">qty:</label>
    <label for="date">date</label>
</div>
<div>
    <p name='num commande'><?php echo $c['numCommande']?></p>
    <p name='qtytotal'><?php echo $c['quantite_total']?></p>
    <p name='date'><?php echo $c['date']?></p>
</div>
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
      
    <?php echo $cmd['quantite_total'];?>
     
      </form> 
    </div>
    <div class="product-removal">
      <button class="remove-product">
      <a href="DeleteCart.php?pId=<?PHP echo $pr['id_produit']; ?>" >remove</a>
      </button>
    </div>
    <div class="product-line-price"><?php echo $pr['prix']*$dcmd['qty']; ?></div>
  </div>
  </div>
  <?php 
    $totalprix+=$pr['prix']*$dcmd['qty'];
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
      
<?php }?>

</div>
<!-- partial -->


</body>

</html>
