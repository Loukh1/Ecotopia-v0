<?php
function connexionUser ($email, $password) {
$sql="SELECT * FROM Utilisateur WHERE email='" .$email. "' and password = '". $password."'";
$db = config::getConnexion () ;
try{
    $query=$db->prepare ($sql) ;
    $query->execute ();
    $count=$query->rowCount();
    if($count==0) {
        $message= "pseudo ou le mot de passe est incorrect " ;
}else {
        $x=$query->fetch ();
     //   $message = $x['role'];
}}
catch (Exception $e){
    $message= " ".$e->getMessage () ;
}
return $message;
}