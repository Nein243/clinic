<?php
require_once "header.php";
if($_SESSION["position"] <> "admin"||$_SESSION["position"] <> "moder"  ){
    header("location:../index.php");
    exit;
}
?>
<div class="main-header">
    <h1>Add a worker</h1>
    <?php
    require_once "authorization_link.php";
    ?>
</div>
<?php
require_once "add_card_doctor_form.php";
?>
<?php
require_once "footer.php";
?>

