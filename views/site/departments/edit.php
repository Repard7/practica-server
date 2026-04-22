<h2>Редактирование кафедры</h2>

<form method="post">
    <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
    <input type="hidden" name="id" value="<?= $department->department_id ?>">
    <label>Название кафедры <input type="text" name="name" value="<?= $department->department_name ?>" required></label>
    <button>Сохранить</button>
    <a href="<?= app()->route->getUrl('/departments') ?>">Отмена</a>
</form>