<?php
session_start();
if (isset($_POST["submit"])){
    $pdo = new PDO('mysql:host=localhost;dbname=clinic', 'root', '' );
    $query = $pdo->prepare('SELECT login, password, position, name_worker FROM admins WHERE login=:admin');
    $query->execute(["admin" => $_POST["login"]]);
    $admin = $query->fetch(PDO::FETCH_ASSOC);
    if ($admin){
        if ($_POST["password"] === $admin["password"]){
            $_SESSION["user"] = $_POST["login"];
            $_SESSION["position"] = $admin["position"];
            $_SESSION["name_worker"] = $admin["name_worker"];
            header("location:../index.php");
            exit;
        }
    }
    $_SESSION["error"] = "Login and/or password are incorrect";
}

header("location:../authorization.php");
exit;