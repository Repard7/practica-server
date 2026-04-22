<h2>✏️ Редактирование сотрудника</h2>

<?php $user = $employee->users->first(); ?>

<form method="post">
    <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
    <input type="hidden" name="id" value="<?= $employee->employee_id ?>">

    <label>Фамилия <input type="text" name="lastname" value="<?= $employee->last_name ?>" required></label>
    <label>Имя <input type="text" name="firstname" value="<?= $employee->first_name ?>" required></label>
    <label>Отчество <input type="text" name="middlename" value="<?= $employee->patronymic ?>"></label>

    <label>Пол
        <select name="gender" required>
            <option value="male" <?= $employee->gender === 'М' ? 'selected' : '' ?>>Мужской</option>
            <option value="female" <?= $employee->gender === 'Ж' ? 'selected' : '' ?>>Женский</option>
        </select>
    </label>

    <label>Дата рождения <input type="date" name="birthdate" value="<?= $employee->birth_date ?>" required></label>
    <label>Адрес <input type="text" name="address" value="<?= $employee->registration_address ?>" required></label>
    <label>Логин <input type="text" name="login" value="<?= $user->login ?? '' ?>" required></label>
    <label>Новый пароль <input type="password" name="password" placeholder="Оставьте пустым, чтобы не менять"></label>

    <label>Кафедра
        <select name="department_id">
            <option value="">— Без кафедры —</option>
            <?php foreach ($departments as $dep): ?>
                <option value="<?= $dep->department_id ?>" <?= ($user && $user->department_id == $dep->department_id) ? 'selected' : '' ?>>
                    <?= $dep->department_name ?>
                </option>
            <?php endforeach; ?>
        </select>
    </label>

    <button>Сохранить</button>
    <a href="<?= app()->route->getUrl('/employees') ?>">Отмена</a>
</form>