<?php
$pdo = new PDO('mysql:host=localhost;dbname=clinic', 'root', '');
$query = $pdo->prepare('SELECT * FROM `patients`');
$query->execute();
$result = $query->fetchAll((PDO::FETCH_ASSOC));
?>
<?php foreach ($result as $item):?>
    <div class="add-form">
        <div class="card-form card-form_columns">
            <div class="card-form_row card-form_row_image">
                <div class="patient_image">
                    <img src="images/ivan_ivanov.avif" alt="Ivan Ivanov">
                </div>
            </div>
            <div class="card-form_row">
                <div class="card-form_header">Full name:</div>
                <div class="card-form_text"><?= $item["name"]?></div>
            </div>
            <div class="card-form_row">
                <div class="card-form_header">Sex:</div>
                <div class="card-form_text"><?= $item["sex"]?></div>
            </div>
            <div class="card-form_row">
                <div class="card-form_header">Birth date:</div>
                <div class="card-form_text"><?= $item["birth_date"]?></div>
            </div>
            <div class="card-form_row">
                <div class="card-form_header">Blood type:</div>
                <div class="card-form_text"><?= $item["blood_type"]?></div>
            </div>
            <div class="card-form_row">
                <div class="card-form_header">Phone number:</div>
                <div class="card-form_text"><?= $item["phone_number"]?></div>
            </div>
            <div class="card-form_row">
                <div class="card-form_header">Address:</div>
                <div class="card-form_text"><?= $item["address"]?></div>
            </div>
            <div class="card-form_row">
                <div class="card-form_header">Patient status:</div>
                <div class="card-form_text"><?= $item["status"]?></div>
            </div>
        </div>
    </div>
<?php endforeach;?>
