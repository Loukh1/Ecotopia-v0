<?php
session_start();

include $_SERVER['DOCUMENT_ROOT'] .'/tache_yessine/Controller/userC.php';
$userC = new userC();
$listeuser = $userC->afficheruser();


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <title>Show Members</title>
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
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>email</th>
                        <th>statut</th>
                        <th>bloquer</th>
                        <th>Delete</th>


                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <?php
                        foreach ($listeuser as $user) {
                        ?>
                      <tr>
                        <td><?php echo $user['fname']; ?></td>
                        <td><?php echo $user['lname']; ?></td>
                        <td><?php echo $user['email']; ?></td>
                        <td><?php
                            // Usage of if-else statement to translate the 
                            // tinyint status value into some common terms
                            // 1-Inactive
                            // 0-Active
                            if ($user['status'] == "0")
                              echo "Active";
                            else
                              echo "Inactive";
                            ?> </td>
                        <td> <?php
                              if ($user['status'] == "0" && $user['id_role'] != "ROLE_ADMIN")

                                // if a user$user is active i.e. status is 0 
                                // the toggle button must be able to deactivate 
                                // we echo the hyperlink to the page "deactivate.php"
                                // in order to make it look like a button
                                // we use the appropriate css
                                // red-deactivate
                                // green- activate
                                echo
                                "<a class='btn btn-danger' href=../desactiver.php?lname=" . $user['lname'] . " >Desactiver</a>";
                              else if ($user['id_role'] != "ROLE_ADMIN")
                                echo
                                "<a class='btn btn-success' href=../activer.php?lname=" . $user['lname'] . " >Activer</a>";
                              ?></td>
                        <td><button type="button" class="btn btn-danger btn-rounded btn-fw">

                            <a href="../supprimeruser.php?email=<?php echo $user['email']; ?> ">supprimer</a>
                        </td></button>



                      </tr>

                    <?php } ?>
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

</body>

</html>