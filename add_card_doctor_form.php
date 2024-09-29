<div class="add-form">
    <form action="handler/add_card_doctor_handler.php" method="post">
        <fieldset class="card-form">
            <div class="card-form_row">
                <label for="login">Login</label>
                <input id="login" name="login" type="text" pattern="[a-zA-Z][a-zA-Z0-9-_.]{5,20}" required>
            </div>
            <div class="card-form_row">
                <label for="password">Password</label>
                <input id="password" name="password" type="password" required>
            </div>
            <div class="card-form_row">
                <label for="name_worker">Full name:</label>
                <input id="name_worker" name="name_worker" type="text">
            </div>
            <div class="card-form_row">
                <label for="position">Position:</label>
                <select name="position" id="position">
                    <option value="doctor">Doctor</option>
                    <option value="moder">Moderator</option>
                </select>
            </div>
            <div class="card-form_row card-form_radio">
                <legend>Пол:</legend>
                <input  id="worker_sex_male" value="male" name="sex" type="radio">
                <label for="worker_sex_male">Male</label>
                <input id="worker_sex_female" value="female" name="sex" type="radio">
                <label for="worker_sex_female">Female</label>
            </div>
            <div class="card-form_row">
                <label for="date_worker">Birth date:</label>
                <input id="date_worker" name="date_worker" type="date">
            </div>
            <div class="card-form_row">
                <label for="phone_worker">Phone number:</label>
                <input id="phone_worker" name="phone_worker" type="tel" pattern="[0-9,+]{10,13}"  placeholder="(+1)-000-00-00">
            </div>
            <div class="card-form_row">
                <label for="photo_worker">Upload photo:</label>
                <input id="photo" name="photo_worker" type="file" accept="image/*">
            </div>
            <div class="card-form_row card-form_submit">
                <input id="submit" name="submit" type="submit" value="Send">
            </div>
        </fieldset>
    </form>
</div>