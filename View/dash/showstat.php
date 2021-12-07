<?php
session_start();
include '../../Model/commande.php';
include '../../Controller/commandeController.php';

$co=new commandeController();
$listecom=$co->calcul();
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
                  
        
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>statistic:</th>
                    
                        </tr>
                      </thead>
                      <tbody>
                         <!-- stat -->
	<div align="center">
  <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
            <br>
            <h4>Statistics</h4> 
              <div class="table-responsive p-0">
           <div class="wrap-table100">
    <table class="table align-items-center mb-0"> 
		<th  class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps">delivered</th>
        <th  class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps">delivering</th>
        <th  class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps">pending</th>
		<th  class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps">total</th>
    <?php 
  
  foreach($listecom as $row){
    	 print"<tr>";
	      if($row['state']=="delivered")
          {
            echo"<td>".$row['state']."</td>"; 
            echo"<td></td>";
            echo"<td></td>";
            echo"<td>".$row['total']."</td>";
          }
          else	      if($row['state']=="delivering")
          {
            echo"<td></td>"; 
            echo"<td>".$row['state']."</td>";
            echo"<td></td>";
            echo"<td>".$row['total']."</td>";
          }
          else if($row['state']=="pending")
          {
            echo"<td></td>"; 
            echo"<td></td>";
            echo"<td>".$row['state']."</td>";
            echo"<td>".$row['total']."</td>";
          }


  $dataPoints = array(
	array("label"=> "total state", "y"=>$row['total']),
	array("label"=> "delivered", "y"=> $row['state']),
    array("label"=> "delivering", "y"=> $row['state']),
    array("label"=> "pending", "y"=> $row['state']),);
}?> 
<br>
</table>
</div>
<br><br>
<div id="chartContainer" style="height: 300px; width: 100%;"></div>
<br></div></div></div></div></div>
<!-- end stat -->



<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <script>
window.onload = function () {
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	exportEnabled: true,
	data: [{
		type: "pie",
		showInLegend: "true",
		legendText: "{label}",
		indexLabelFontSize: 16,
		indexLabel: "{label} - #percent%",
		yValueFormatString: "฿#,##0",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
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