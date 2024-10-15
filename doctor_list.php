<?php
require_once "header.php";
if($_SESSION["position"] <> "admin"||$_SESSION["position"] <> "moder"  ){
    header("location:../index.php");
    exit;
}
?>
<div class="main-header">
    <h1>List of doctors:</h1>
    <?php
    require_once "authorization_link.php";
    ?>
</div>
<div class="main-list">
    <?php
    require_once "doctor_card.php";
    ?>
</div>

<?php
require_once "footer.php";
?>
