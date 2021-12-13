<?php
session_start();
include_once '../../Model/event.php';
include_once '../../Controller/eventc.php';
$error = "";
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
    $eventC->ajouterevent($event);
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

              <form class="forms-sample" method="POST">
                <div class="form-group">
                  <label for="exampleInputName1">Name</label>
                  <input name="nom" type="text" class="form-control" id="exampleInputName1" placeholder="Title">
                </div>
                <div class="form-group">
                  <label for="exampleTextarea1">Date of Beginning</label>
                  <input name="dateB" type="date" class="form-control" id="exampleInputName1" placeholder="">
                </div>

                <div class="form-group">
                  <label for="exampleInputCity1">Date of Ending</label>
                  <input name="dateE" type="date" class="form-control" id="exampleInputCity1" placeholder="">
                </div>
                <div class="form-group">
                  <label for="exampleInputCity1">Governent</label>
                  <input name="gov" type="text" class="form-control" id="exampleInputCity1" placeholder="Governant">
                </div>
                <div class="form-group">
                  <label for="exampleInputCity1">ville</label>
                  <input name="ville" type="text" class="form-control" id="exampleInputCity1" placeholder="Ville">
                </div>
                <div class="form-group">
                  <label for="exampleInputCity1">Place</label>
                  <input name="lieu" type="text" class="form-control" id="exampleInputCity1" placeholder="Place">
                </div>
                <div class="form-group">
                  <label for="exampleInputCity1">Adress</label>
                  <input name="adress" type="text" class="form-control" id="exampleInputCity1" placeholder="Adress">
                </div>
                <div class="form-group">
                  <label for="exampleInputCity1">Zip Code</label>
                  <input name="zip" type="number" class="form-control" id="exampleInputCity1" placeholder="Zip Code">
                </div>
                <div class="form-group">
                  <label for="exampleTextarea1">Description</label>
                  <textarea name="desc" class="form-control" id="exampleTextarea1" rows="4"></textarea>
                </div>

                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <button class="btn btn-light">Cancel</button>
              </form>
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