<div class="add-form">
    <form action="" >
        <fieldset class="card-form">
            <div class="card-form_row">
                <label for="name">Ф.И.О.:</label>
                <input id="name" type="text"  required placeholder="Введите Ф. И. О. пациента">
            </div>
            <div class="card-form_row card-form_radio">
                <legend>Пол:</legend>
                <input required id="sex_male" name="sex" type="radio">
                <label for="sex_male">Мужской</label>
                <input id="sex_female" name="sex" type="radio">
                <label for="sex_female">Женский</label>
            </div>
            <div class="card-form_row">
                <label for="date">Дата рождения:</label>
                <input id="date" type="date" required>
            </div>
             <div class="card-form_row">
                <label for="status">Статус пациента:</label>
                <select name="status" id="status">
                    <option value="unknown" required>--Введите статус пациента--</option>
                    <option value="employed">Трудоустроенный</option>
                    <option value="student">Студент</option>
                    <option value="retired">Пенсионер</option>
                    <option value="unemployed">Безработный</option>
                </select>
            </div>
            <div class="card-form_row ">
                <label for="blood-type">Группа крови:</label>
                <select required name="blood-type" id="blood-type">
                    <option value="unknown" >-Введите группу крови пациента--</option>
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
                <label for="address">Адрес:</label>
                <input id="address" type="text" required placeholder="Введите адрес пациента">
            </div>
            <div class="card-form_row">
                <label for="phone">Номер телефона:</label>
                <input id="phone" type="tel" pattern="[0-9,+]{10,13}" required placeholder="(+1)-000-00-00">
            </div>
            <div class="card-form_row">
                <label for="photo">Загрузите фото пациента:</label>
                <input id="photo" type="file" accept="image/*">
            </div>
            <div class="card-form_row card-form_submit">
                <input type="submit" value="Зарегистрировать пациента">
            </div>
        </fieldset>
    </form>
</div>