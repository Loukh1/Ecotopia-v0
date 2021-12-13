<?php
session_start();
include_once '../../Model/event.php';
include_once '../../Controller/eventc.php';
$error = "";
$id = $_GET['id'];
$event = NULL;
$eventC = new eventC();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $event = new event(
      $_POST['nom'],
      $_POST['dateB'],
      $_POST['dateE'],
      $_POST['gov'],
      $_POST['lieu'],
      $_POST['adress'],
      $_POST['zip'],
      $_POST['ville'],
      $_POST['desc']
    );
    $eventC->modifierevent($event, $id);
    header('Location:events.php');
} 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <title>Add New Event</title>
  <!-- plugins:css -->
  <?php include "segments/plugin.php"; ?>
  <script src="https://cdn.tiny.cloud/1/4avatqxpxn93pmv0nn2v5rsgo6xv2ysad25jn86kv7sulge6/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>
    tinymce.init({
      selector: '#myEditor',
      branding: false,
      plugins: 'link image table',
      contextmenu: 'link image table',
      draggable_modal: true,
    });
  </script>
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


        <div class="col-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Add Event</h4>
              <?php
              if (isset($_GET['id'])) {
                $event = $eventC->recupererevent($_GET['id']);
              ?>
              <form class="forms-sample" method="POST">
                <div class="form-group">
                  <label for="exampleInputName1">Name</label>
                  <input name="nom" type="text" class="form-control" id="exampleInputName1" value=<?php echo $event["nom_e"];?>>
                </div>
                <div class="form-group">
                  <label for="exampleTextarea1">Date of Beginning</label>
                  <input name="dateB" type="date" class="form-control" id="exampleInputName1" value=<?php echo $event["dated_e"];?>>
                </div>

                <div class="form-group">
                  <label for="exampleInputCity1">Date of Ending</label>
                  <input name="dateE" type="date" class="form-control" id="exampleInputCity1" value=<?php echo $event["datef_e"];?>>
                </div>
                <div class="form-group">
                  <label for="exampleInputCity1">Governent</label>
                  <input name="gov" type="text" class="form-control" id="exampleInputCity1" value=<?php echo $event["gov_e"];?>>
                </div>
                <div class="form-group">
                  <label for="exampleInputCity1">ville</label>
                  <input name="ville" type="text" class="form-control" id="exampleInputCity1" value=<?php echo $event["ville_e"];?>>
                </div>
                <div class="form-group">
                  <label for="exampleInputCity1">Place</label>
                  <input name="lieu" type="text" class="form-control" id="exampleInputCity1" value=<?php echo $event["lieu_e"];?>>
                </div>
                <div class="form-group">
                  <label for="exampleInputCity1">Adress</label>
                  <input name="adress" type="text" class="form-control" id="exampleInputCity1" value=<?php echo $event["adresse_e"];?>>
                </div>
                <div class="form-group">
                  <label for="exampleInputCity1">Zip Code</label>
                  <input name="zip" type="number" class="form-control" id="exampleInputCity1" value=<?php echo $event["cp_e"];?>>
                </div>
                <div class="form-group">
                  <label for="exampleTextarea1">Description</label>
                  <textarea name="desc" class="form-control" id="exampleTextarea1" rows="4"><?php echo $event["desc_e"];?></textarea>
                </div>
                
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <button class="btn btn-light">Cancel</button>
              </form>
              <?php } ?>
            </div>
          </div>
        </div>

      </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:../../partials/_footer.html -->
    <?php include "segments/footer.php"; ?>
    <!-- End custom js for this page -->
</body>

</html>