<?php
session_start();
require_once 'config3.php';

if (isset($_POST['mailconnect']) && isset($_POST['mdpconnect'])) {
    $mailconnect = htmlspecialchars($_POST['mailconnect']);
    $mdpconnect = htmlspecialchars($_POST['mdpconnect']);
    $pdo = config::getConnexion();
    $check = $pdo->prepare('SELECT fname, email, password,id_role,status FROM utilisateurs WHERE email= ? ');
    $check->execute(array($mailconnect));
    $data = $check->fetch();
    $row = $check->rowCount();

    if ($row == 1) {

        $mdpconnect = hash('sha256', $mdpconnect);
        if ($data['password'] === $mdpconnect) {
            $_SESSION['user'] = $data['email'];
            $_SESSION["id"] = $data["id"];
            if ($data['id_role'] == "ROLE_USER" && $data['status'] == "0") {
                $_SESSION["type"] = "user";
                header('Location:View/landing.php');
            } else if ($data['id_role'] == "ROLE_USER" && $data['status'] == "1") {
                $_SESSION["type"] = "user";
                echo "vous etes bloque par l'admin du site";
            } else if ($data['id_role'] == "ROLE_ADMIN") {
                $_SESSION["type"] = "admin";
                header('Location:View/index.php');
            }
        } else header('Location:index.php?login_err=mdpconnect');
    } else header('Location:index.php?login_err=already');
} else header('Location:index.php');
