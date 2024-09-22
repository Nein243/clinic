<?php
require_once "header.php";
?>
<div class="main-header">
    <h1>Ввойти в аккаунт</h1>
</div>
<div class="add-form">
    <fieldset class="card-form">
        <form action="">
            <div class="card-form_row">
                <label for="login">Введите логин</label>
                <input id="login" type="text" pattern="[a-zA-Z][a-zA-Z0-9-_.]{5,20}" required>
            </div>
            <div class="card-form_row">
                <label for="password">Введите пароль</label>
                <input id="password" type="password" required>
            </div>
            <div class="card-form_row card-form_submit">
                <input id="submit_signup" type="submit">
            </div>
        </form>
    </fieldset>

</div>
<?php
require_once "footer.php";
?>
