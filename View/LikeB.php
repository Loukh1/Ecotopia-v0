<?php
session_start();
include "../config2.php";
$post_id = $_GET['post_id'];
$user_id = $_SESSION["id"];
if ($_SESSION["type"] == "user") {
    $sql = "SELECT * from likes where post_id='".$post_id."' AND user_id='".$user_id."'";
    $db = config2::getConnexion();
    try {
        $query = $db->prepare($sql);
        $query->execute();
        $post = $query->fetch();
        if ($query->rowCount() > 0) {
            $sql = "DELETE from likes where post_id=$post_id AND user_id=$user_id";
            $query1= $db->prepare($sql);
            $query1->execute();
            $sql="UPDATE articles set likes = likes-1 where post_id=$post_id AND likes > 0";
            $query3 = $db->prepare($sql);
            $query3->execute();
           header("location:afficherb.php");
        } else {
            $sql="INSERT INTO likes (user_id,post_id) VALUES ($user_id,$post_id)";
            $query2 = $db->prepare($sql);
            $query2->execute();
            $sql="UPDATE articles set likes = likes+1 where post_id=$post_id";
            $query3 = $db->prepare($sql);
            $query3->execute();
            header("location:afficherb.php");
        }
    } catch (Exception $e) {
        echo 'Erreur: ' . $e->getMessage();
    }
}
