<?php
require_once "header.php";
?>
<div class="main-header">
    <h1>List of moderators:</h1>
    <?php
    require_once "authorization_link.php";
    ?>
</div>
<div class="main-list">
    <?php
    require_once "moderator_card.php";
    ?>
</div>
<?php
require_once "footer.php";
?>

