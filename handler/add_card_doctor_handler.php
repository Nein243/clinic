<?php
if (isset($_POST["submit"])){
    $pdo = new PDO('mysql:host=localhost;dbname=clinic', 'root', '');
    $query = $pdo->prepare('SELECT * FROM `admins` WHERE `login`=:login');
    $query->execute([
        'login' => $_POST['login']
    ]);
    $result = $query->fetch(PDO::FETCH_ASSOC);

    if (!$result) {
        $query = $pdo->prepare('
INSERT INTO admins (login, password, name_worker, position, sex, date_worker, phone_worker, photo_worker)
VALUES (:login, :password, :name_worker, :position, :sex, :date_worker, :phone_worker, :photo_worker)
');
        $query->execute([
            'login' => $_POST['login'],
            'password' => $_POST['password'],
            'name_worker' => $_POST['name_worker'],
            'position' => $_POST['position'],
            'sex' => $_POST['sex'],
            'date_worker' => $_POST['date_worker'],
            'phone_worker' => $_POST['phone_worker'],
            'photo_worker' => $_POST['photo_worker']
        ]);
    } else {
        echo "Логин уже занят";
    }
}
header("location:../patient_list.php");
exit;

