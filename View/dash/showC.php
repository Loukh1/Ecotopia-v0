<?php
session_start();
include '../../Controller/commandeController.php';
$co=new commandeController();
$com=$co ->getCommande(); //affichage du commande


?>
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
   <title>Show Commands</title>
    <!-- plugins:css -->
    <?php include "segments/plugin.php"; ?> 
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_navbar.html -->
      <?php include "segments/header.php"; ?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <?php include "segments/side_bar.php"; ?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Basic Tables </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Tables</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Basic tables</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Striped Table</h4>
                    
                    </p>
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Commande N:</th>
                          <th>User:</th>
                          <th>Quantity:</th>
                          <th>Date:</th>
                          <th>Modify:</th>
                          <th>Delete:</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        foreach($com as $cmd)
                        {
                          ?>
                        <tr>

                          <td><?php echo $cmd['numCommande'];
                          ?></td>
                          <td><?php echo $cmd['id_client'];
                          ?></td>
                          <td><?php echo $cmd['quantite_total'];
                          ?></td>
                          <td><?php echo $cmd['date'];
                          ?></td>
                          
                          <td><form action="showk.php" method='POST'>
                            <input type="submit" class="btn btn-primary btn-rounded btn-fw"value='modify'>
                            <input type="hidden" id='cId' name="cId" value='<?php echo $cmd['id_commande']?>'>
                        </form>
                         
          


                         </td>
                         
                          <div class="product-removal">
      
  
                          <td> <form action="../DeletCommande.php" method='GET' ><input type="submit" class="btn btn-danger btn-rounded btn-fw" value="delete" >
                             <input type="hidden" name="cId" value='<?php echo $cmd['id_commande']?>'></form>
                            
                          </button></td>
                        </div>
                        </tr>
                       

                      <?php
                        }
                      ?>


                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
             
             
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <footer class="footer">
            <div class="footer-inner-wraper">
              <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © Ecotopia 2020</span>
                
              </div>
            </div>
            <?php include "segments/footer.php"; ?>
</html>