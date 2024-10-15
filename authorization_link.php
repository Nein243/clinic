<?php
require_once "env.php";
?>
<div class="main-header_user">
    <?php if (isset($_SESSION["user"])): ?>
        <span><?= $_SESSION["user"] ?>[<?= $positionLabel[$_SESSION["position"]] ?>]</span>
        <a href="logout.php" class="singup_link">Log out</a>
    <?php else: ?>
        <a href="authorization.php" class="singup_link">Log in</a>
    <?php endif; ?>
</div>



