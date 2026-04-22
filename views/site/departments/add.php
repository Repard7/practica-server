<h2>Добавление кафедры</h2>

<form method="post">
    <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
    <label>Название кафедры <input type="text" name="name" required></label>
    <button>Добавить</button>
    <a href="<?= app()->route->getUrl('/departments') ?>">Отмена</a>
</form>