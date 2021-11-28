<?php 
include_once '../Controller/panierController.php';
$pn=new panierController();
$prod=$pn ->showProd();

?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>shop</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'><link rel="stylesheet" href="sh.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="container text-center">
  <h1>Ma boutique !</h1>
  
  <div class="row">
    <div class="col-xs-8">
      <div class="panel panel-default">
        <div class="panel-heading">
          Les produits
        </div>
        <div class="panel-body">
          <?php 
          foreach ($prod as $pan){
          ?>
          <div class="col-xs-4">
            <div class="panel panel-default" id="produit-1">
              <div class="panel-body text-center">
                <h3><?php echo $pan['nom']?></h3>
                <img src="<?php echo $pan['urlimage']?>" alt="" class="img-responsive" />
                <p><?php echo $pan['description']?></p>
                <span class="prix"><?php echo $pan['prix']?></span>
                <a href="./AddToCart.php?pId=<?PHP echo $pan['id']; ?>" class="btn btn-block btn-primary add" >
                  Ajouter
                </a>
                <input type="hidden" value=<?PHP echo $pan['id']; ?> name="pId">
              </div>
            </div>
          </div>
          <?php }?>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- partial -->
  <script  src="./script.js"></script>

</body>
</html>
