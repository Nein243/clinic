<?php
$pdo = new PDO('mysql:host=localhost;dbname=clinic', 'root', '');
$query = $pdo->prepare('SELECT * FROM `admins` WHERE position="doctor"');
$query->execute();
$result = $query->fetchAll(PDO::FETCH_ASSOC);
echo "<pre>";
print_r($result);
echo "</pre>";
?>

<?php foreach ($result as $item):?>
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
                    <div class="card-form_header">Дата рождения:</div>
                    <div class="card-form_text"><?= $item["date_worker"]?></div>
                </div>
                <div class="card-form_row">
                    <div class="card-form_header">Ф.И.О. сотрудника:</div>
                    <div class="card-form_text">Данилов Данилов</div>
                </div>
                <div class="card-form_row">
                    <div class="card-form_header">Пол сотрудника:</div>
                    <div class="card-form_text">мужской</div>
                </div>
                <div class="card-form_row">
                    <div class="card-form_header">Должность сотрудника:</div>
                    <div class="card-form_text">Врач-терапевт</div>
                </div>
            </div>
        </div>
    </div>
<?php endforeach;?>
