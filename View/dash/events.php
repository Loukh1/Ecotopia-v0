<?php
session_start();
include_once '../../Controller/eventc.php';
	$eventC=new eventC();
	$listeevent=$eventC->afficherevent(); 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <title>Show Events</title>
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
                          <th>Id</th>
                          <th>Nom</th>
                          <th>Gover</th>
                          <th>Code postal</th>
                          <th>Ville</th>
                          <th>lieu</th>
                          <th>Adress</th>
                          <th>Description</th>
                          <th>Modify</th>
                          <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                      foreach ($listeevent as $article) {
                      ?>
                        <tr>
                          <td><?php echo $article['id_e']; ?></td>
                          <td><?php echo $article['nom_e']; ?></td>
                          <td><?php echo $article['gov_e']; ?></td>
                          <td><?php echo $article['cp_e']; ?></td>
                          <td><?php echo $article['ville_e']; ?></td>
                          <td><?php echo $article['lieu_e']; ?></td>
                          <td><?php echo $article['adresse_e']; ?></td>
                          <td><?php echo $article['desc_e']; ?></td>
                         
                          <td><button type="button" class="btn btn-primary btn-rounded btn-fw"><?php $h=$article['id_e']; echo"<a style=' color: #ffffff;text-decoration: none;'  href='ModifyE.php?id=$h'>Modifier</a>";?></button></td>
                          <td><button type="button" class="btn btn-danger btn-rounded btn-fw"><?php $h=$article['id_e'];  echo"<a style=' color: #ffffff;text-decoration: none;' href='../SupprimerE.php?id=$h'>Delete</a>";?></button></td>
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
          <?php include "segments/footer.php"; ?>
  </body>
</html>