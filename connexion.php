<?php
session_start();
require_once 'config4.php';

if (isset($_POST['mailconnect']) && isset($_POST['mdpconnect'])) {
    $mailconnect = htmlspecialchars($_POST['mailconnect']);
    $mdpconnect = htmlspecialchars($_POST['mdpconnect']);
    $pdo = config::getConnexion();
    $check = $pdo->prepare('SELECT * FROM utilisateurs WHERE email= ? ');
    $check->execute(array($mailconnect));
    $data = $check->fetch();
    $row = $check->rowCount();

    if ($row == 1) {

        $mdpconnect = hash('sha256', $mdpconnect);
        if ($data['password'] === $mdpconnect) {
            $_SESSION['user'] = $data['email'];
            $_SESSION["id"] = $data["id"];
            $_SESSION["name"] = $data["user"];
            var_dump($data);
            if ($data['id_role'] == "user" && $data['status'] == "0") {
                $_SESSION["type"] = "user";
                header('Location:index.php');
            } else if ($data['id_role'] == "user" && $data['status'] == "1") {
                $_SESSION["type"] = "user";
                header('Location:view/blocked.php');
            } else if ($data['id_role'] == "admin") {
                $_SESSION["type"] = "admin";
                header('Location:View/index.php');
            }
        } else header('Location:log.php?login_err=mdpconnect');
    } else header('Location:log.php?login_err=already');
} else header('Location:log.php');
