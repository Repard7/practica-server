<h2>✏️ Редактирование дисциплины</h2>

<form method="post">
    <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
    <input type="hidden" name="id" value="<?= $discipline->discipline_id ?>">
    <label>Название дисциплины <input type="text" name="name" value="<?= $discipline->discipline_name ?>" required></label>

    <label>Кафедра
        <select name="department_id">
            <option value="">— Без кафедры —</option>
            <?php foreach ($departments as $dep): ?>
                <option value="<?= $dep->department_id ?>" <?= $discipline->departments->contains($dep->department_id) ? 'selected' : '' ?>>
                    <?= $dep->department_name ?>
                </option>
            <?php endforeach; ?>
        </select>
    </label>

    <button>Сохранить</button>
    <a href="<?= app()->route->getUrl('/disciplines') ?>">Отмена</a>
</form>