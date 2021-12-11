<?php
  
    // Connect to database 
    $con=mysqli_connect("localhost","louay","010607.Lk","yessin");
  
    // Check if lname is set or not, if true,
    // toggle else simply go back to the page
    if (isset($_GET['lname'])){
  
        // Store the value from get to 
        // a local variable "course_lname"
        $course_lname=$_GET['lname'];
  
        // SQL query that sets the status to
        // 0 to indicate deactivation.
        $sql="UPDATE `utilisateurs` SET 
            `status`=0 WHERE lname='$course_lname'";
  
        // Execute the query
        mysqli_query($con,$sql);
    }
  
    // Go back to course-page.php
    header('location: dash/showM.php');
?>
