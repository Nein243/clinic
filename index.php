<?php
require_once "header.php";
require_once "env.php";
if(!isset($_SESSION["user"])){
    $_SESSION["error"] = "Only authorizated users";
    header("location:authorization.php");
    exit;
}
?>
<div class="main-header">
    <h1>Home page</h1>
    <?php
    require_once "authorization_link.php";
    ?>
</div>
<div class="main">
    <div class="main_greeting">
        <?php
        if(isset($_SESSION["user"])){
            echo $_SESSION["greeting"] = "Welcome, ".$positionLabel[$_SESSION["position"]]." ".$_SESSION["name_worker"]."!";
        }
        ?>
    </div>
</div>

<?php
require_once "footer.php";
?>