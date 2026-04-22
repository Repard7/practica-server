<h2>➕ Добавление дисциплины</h2>

<form method="post">
    <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
    <label>Название дисциплины <input type="text" name="name" required></label>

    <label>Кафедра
        <select name="department_id">
            <option value="">— Без кафедры —</option>
            <?php foreach ($departments as $dep): ?>
                <option value="<?= $dep->department_id ?>"><?= $dep->department_name ?></option>
            <?php endforeach; ?>
        </select>
    </label>

    <button>Добавить</button>
    <a href="<?= app()->route->getUrl('/disciplines') ?>">Отмена</a>
</form>