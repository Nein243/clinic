<?php
require_once "header.php";
?>
<div class="main-header">
    <h1>Log in</h1>
</div>
<div class="add-form">
    <fieldset class="card-form">
        <form action="handler/login_handler.php" method="post">
            <div class="card-form_row">
                <label for="login">Enter your login</label>
                <input id="login" name="login" type="text" pattern="[a-zA-Z][a-zA-Z0-9-_.]{5,20}" required>
            </div>
            <div class="card-form_row">
                <label for="password">Enter your password</label>
                <input id="password" name="password" type="password" required>
            </div>
            <div class="card-form_row card-form_submit">
                <input id="submit_signup" type="submit" name="submit" value="Log in">
            </div>
        </form>
    </fieldset>

</div>
<?php
require_once "footer.php";
?>
