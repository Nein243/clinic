<?php
require_once "header.php";

if($_SESSION["position"] <> "admin"){
    header("location:../index.php");
    exit;
}

$pdo = new PDO('mysql:host=localhost;dbname=clinic', 'root', '');
$query = $pdo->prepare(' SELECT * FROM `doctor_positions`');
$query->execute();
$result = $query->fetchAll(PDO::FETCH_ASSOC);
?>
    <div class="main-header">
        <h1>Doctor positions</h1>
    </div>
    <div class="add-form">
        <fieldset class="card-form">
            <form action="handler/add_position.php" method="post">
                <div class="card-form_row">
                    <label for="position">Enter position</label>
                    <input type="text" id="position" name="position">
                </div>
                <div class="card-form_row card-form_submit">
                    <input type="submit" id="submit_signup" name="submit" value="Send">
                </div>
            </form>
        </fieldset>
    </div>
<?php foreach ($result as $item):?>
    <div class=""><?= $item['position']?></div>
<?php endforeach;?>

<?php
require_once "footer.php"
?>