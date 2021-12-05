<?php
session_start();
include '../../Controller/commentC.php';
$commentC = new commentC();
$listeComments = $commentC->afficher();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  
  <title>Comments</title>
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
          
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">All Comments</h4>

                  </p>
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>Comment ID</th>
                        <th>Article ID</th>
                        <th>User ID</th>
                        <th>Name</th>
                        <th>Comment</th>
                        <th>Date</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      foreach ($listeComments as $comment) {
                      ?>
                        <tr>
                          <td><?php echo $comment['id']; ?></td>
                          <td><?php echo $comment['article_id']; ?></td>
                          <td><?php echo $comment['user_id']; ?></td>
                          <td><?php echo $comment['name']; ?></td>
                          <td><?php echo $comment['comment']; ?></td>
                          <td><?php echo $comment['date']; ?></td>
                          <td><button type="button" class="btn btn-danger btn-rounded btn-fw"><?php $h=$comment['id']; $l=$_SERVER['DOCUMENT_ROOT']."/ecotopia/View/suppComment.php"; echo"<a style=' color: #ffffff;text-decoration: none;' href='../suppComment.php?post_id=$h'>Delete</a>";?></button></td>
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