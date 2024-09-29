<div class="add-form">
    <form action="handler/add_card_patient_handler.php" method="post" >
        <fieldset class="card-form">
            <div class="card-form_row">
                <label for="name">Full name:</label>
                <input id="name" name="name" type="text"  required placeholder="Введите Ф. И. О. пациента">
            </div>
            <div class="card-form_row card-form_radio">
                <legend>Пол:</legend>
                <input required id="sex_male" name="sex" value="male" type="radio">
                <label for="sex_male">Male</label>
                <input id="sex_female" name="sex" value="female" type="radio">
                <label for="sex_female">Female</label>
            </div>
            <div class="card-form_row">
                <label for="birth_date">Birth date:</label>
                <input id="birth_date" type="date" name="birth_date" required>
            </div>
             <div class="card-form_row">
                <label for="status">Patient status:</label>
                <select name="status" id="status">
                    <option value="unknown" required>--Enter patient status--</option>
                    <option value="employed">Employed</option>
                    <option value="student">Student</option>
                    <option value="retired">Pensioner</option>
                    <option value="unemployed">Unemployed</option>
                </select>
            </div>
            <div class="card-form_row ">
                <label for="blood_type">Blood type:</label>
                <select required name="blood_type" id="blood_type">
                    <option value="unknown" >-Enter blood type--</option>
                    <option value="0-">0-</option>
                    <option value="0+">0+</option>
                    <option value="a-">A-</option>
                    <option value="a+">A+</option>
                    <option value="b-">B-</option>
                    <option value="b">B+</option>
                    <option value="ab-">AB-</option>
                    <option value="ab">AB+</option>
                </select>
            </div>
            <div class="card-form_row">
                <label for="address">Address:</label>
                <input id="address" name="address" type="text" required placeholder="Введите адрес пациента">
            </div>
            <div class="card-form_row">
                <label for="phone_number">Phone number:</label>
                <input id="phone_number" name="phone_number" type="tel" pattern="[0-9,+]{10,13}" required placeholder="(+1)-000-00-00">
            </div>
            <div class="card-form_row">
                <label for="photo">Upload a photo of patient:</label>
                <input id="photo" name="photo" type="file" accept="image/*">
            </div>
            <div class="card-form_row card-form_submit">
                <input type="submit" name="submit" value="Register patient">
            </div>
        </fieldset>
    </form>
</div>