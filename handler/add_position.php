<?php
session_start();
if (isset($_POST["submit"])){
    $pdo = new PDO('mysql:host=localhost;dbname=clinic', "root", "");
    $query = $pdo->prepare('
SELECT * FROM doctor_positions WHERE position=:position
');
    $query->execute([
        'position' => $_POST['position']
    ]);
    $result = $query->fetch(PDO::FETCH_ASSOC);
    if ($result === false){
        $query = $pdo->prepare('
    INSERT INTO doctor_positions (position) VALUES (:position)
    ');
        $query->execute([
            'position' => $_POST['position']
        ]);
        header("location: ../doctor_positions.php");
        $_SESSION['error'] = 'Position has been added';
        exit;
    }
    $_SESSION['error'] = "Position already exists";
}

header("location: ../doctor_positions.php");
exit;

