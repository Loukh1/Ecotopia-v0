<?php
session_start();
include '../../Controller/commandeController.php';
include '../../Controller/detailcommandeController.php';
$co=new commandeController();
$com=$co ->getsCommandes($_POST['cId']); //sel du commande (id user)
$dc=new commandedetailController();
$dtc=$dc ->showdetailcommandes($_POST['cId']);//sel du detail commande idcomm

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
                    <h4 class="card-title">N: <?php echo $com['numCommande'];?></h4>
                    <h4 class="card-title">date <?php echo $com['date'];?></h4>
                    </p>
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>image:</th>
                          <th>name product:</th>
                          <th>Quantity:</th>
                          <th>price:</th>
                          <!--<th>Modify:</th>-->
                          
                          
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        foreach($dtc as $dtc)
                        {
                          $prd=$dc->getProd($dtc['id_produit'])
                          ?>
                        <tr>

                          <td><img src="<?php echo "../".$prd['urlimage'];
                          ?>" alt=""></td>
                          <td><?php echo $prd['nom'] ;
                          ?></td>
                          <td><?php echo $dtc['qty'];
                          ?></td>
                          <td><?php echo $prd['prix'];
                          ?></td>
                          
                          <!--<td><form action=""></form>
                         <input type="submit" class="btn btn-primary btn-rounded btn-fw" value='modify'>
                         </td>
                         
                          <div class="product-removal">
      
  
                          <td> <form action="" method='GET' ><input type="submit" class="btn btn-danger btn-rounded btn-fw" value="delete" >
                             <input type="hidden" name="cId" value='<?php echo $cmd['id_commande']?>'></form>
                            
                          </button></td>-->
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
              <form action="../dash/updatestatd1.php" method="post">
              <input type="submit" id="delivering" name="delivering" value="Deliver" class="btn btn-primary btn-rounded btn-fw">
              <input type="hidden" name="idcom" id="idcom" value="<?php echo $_POST['cId']?>">
                      </form>
                      <form action="../dash/updatestatd2.php" method="post">
                      <input type="submit" id="delivered" name="delivered" value="Delivered" class="btn btn-primary btn-rounded btn-fw">
                      <input type="hidden" name="idcom" value="<?php echo $_POST['cId']?>">
                      </form>
             
             
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