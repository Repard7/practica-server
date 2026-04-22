<h2>Добавление сотрудника</h2>

<form method="post">
    <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>

    <label>Фамилия <input type="text" name="lastname" required></label>
    <label>Имя <input type="text" name="firstname" required></label>
    <label>Отчество <input type="text" name="middlename"></label>

    <label>Пол
        <select name="gender" required>
            <option value="male">Мужской</option>
            <option value="female">Женский</option>
        </select>
    </label>

    <label>Дата рождения <input type="date" name="birthdate" required></label>
    <label>Адрес <input type="text" name="address" required></label>
    <label>Логин <input type="text" name="login" required></label>
    <label>Пароль <input type="password" name="password" required></label>

    <label>Кафедра
        <select name="department_id">
            <option value="">— Без кафедры —</option>
            <?php foreach ($departments as $dep): ?>
                <option value="<?= $dep->department_id ?>"><?= $dep->department_name ?></option>
            <?php endforeach; ?>
        </select>
    </label>

    <button>Добавить</button>
    <a href="<?= app()->route->getUrl('/employees') ?>">Отмена</a>
</form>