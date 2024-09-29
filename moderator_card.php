<?php
$pdo = new PDO('mysql:host=localhost;dbname=clinic', 'root', '');
$query = $pdo->prepare('SELECT * FROM `admins` WHERE position="moder"');
$query->execute();
$result = $query->fetchAll(PDO::FETCH_ASSOC);
?>
<?php foreach ($result as $item): ?>
    <div class="add-form">
        <div class="card-form card-form_columns">
            <div class="card-form_column">
                <div class="card-form_row">
                    <div class="worker_image">
                        <img src="images/ivan_ivanov.avif" alt="Ivan Ivanov">
                    </div>
                </div>
            </div>
            <div class="card-form_column">
                <div class="card-form_row">
                    <div class="card-form_header">Full name:</div>
                    <div class="card-form_text"><?= $item["name_worker"]?></div>
                </div>
                <div class="card-form_row">
                    <div class="card-form_header">Birth date:</div>
                    <div class="card-form_text"><?= $item["date_worker"]?></div>
                </div>
                <div class="card-form_row">
                    <div class="card-form_header">Phone number:</div>
                    <div class="card-form_text"><?= $item["phone_worker"]?></div>
                </div>
                <div class="card-form_row">
                    <div class="card-form_header">Position:</div>
                    <div class="card-form_text"><?= $item["position"]?></div>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
