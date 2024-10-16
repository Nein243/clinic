<?php session_start();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Clinic</title>
</head>
<body>
<section>
    <?php
    require_once "nav.php";
    ?>
    <main>
        <?php if(isset($_SESSION["error"])): ?>
        <div class="alert error">
            <?= $_SESSION["error"]; ?>
            <?php unset($_SESSION["error"]); ?>
        </div>
        <?php endif; ?>