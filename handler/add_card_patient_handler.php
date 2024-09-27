<?php
if (isset($_POST["submit"])){
    $pdo = new PDO('mysql:host=localhost;dbname=clinic', 'root', '');
    $query = $pdo->prepare('
    INSERT INTO patients(name, sex, birth_date, status, blood_type, address, phone_number, photo)
    VALUES (:name, :sex, :birth_date, :status, :blood_type, :address, :phone_number, :photo)
    ');
    $query->execute([
        'name' => $_POST['name'],
        'sex' => $_POST['sex'],
        'birth_date' => $_POST['birth_date'],
        'status' => $_POST['status'],
        'blood_type' => $_POST['blood_type'],
        'address' => $_POST['address'],
        'phone_number' => $_POST['phone_number'],
        'photo' => $_POST['photo']
    ]);
}
header("location:../patient_list.php");
exit;
