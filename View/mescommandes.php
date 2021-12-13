<?php 
session_start();
include "header.php";
include_once '../Controller/panierController.php';
$cn=new commandeController();
$cmd=$cn->getCommande();

echo '<body>
<!-- partial:index.partial.html -->
<h1>Mes commandes</h1>';

    foreach($cmd as $cmd){
        if($_SESSION['id']==$cmd['id_client']){
  echo '<div>
      <h1>N: '.$cmd['numCommande'].'</h1>
      <br>
      total quantity: '.$cmd['quantite_total'].'
      <br>
      date: '.$cmd['date'].'
      <br>
      state: '.$cmd['state'].'
  </div>';

 echo '<iframe src="listcommande.php?idcom='; echo $cmd['id_commande']; echo '" frameborder="0" width="1500" height="300"></iframe>';
        }
    }
echo '<!-- partial -->


</body>

</html>';
?>
