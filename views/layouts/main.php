<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>📚 EduManager - Система управления учебным заведением</title>
    <link rel="stylesheet" href="/css/styles.css">
    <style>
        .active {
            background-color: #3b82f6 !important;
            color: white !important;
        }
        .btn-link {
            color: #e2e8f0;
            text-decoration: none;
            padding: 0.5rem 1rem;
            border-radius: 0.5rem;
        }
        .btn-link:hover {
            background-color: #334155;
        }
        .visually-hidden {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
        }
        .checkbox-label {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            cursor: pointer;
        }
        .table-responsive {
            overflow-x: auto;
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="nav-container">
            <div class="nav-brand">
                <span class="nav-brand-text">📚 EduManager</span>
            </div>
            <?php if (app()->auth::check()): ?>
            <ul class="nav-links">
                <li><a href="/employees" class="<?= str_contains($_SERVER['REQUEST_URI'] ?? '', '/employees') ? 'active' : '' ?>">Сотрудники</a></li>
                <li><a href="/disciplines" class="<?= str_contains($_SERVER['REQUEST_URI'] ?? '', '/disciplines') ? 'active' : '' ?>">Дисциплины</a></li>
                <li><a href="/departments" class="<?= str_contains($_SERVER['REQUEST_URI'] ?? '', '/departments') ? 'active' : '' ?>">Кафедры</a></li>
            </ul>
            <?php endif; ?>
            <div class="nav-auth">
                <?php if (app()->auth::check()): ?>
                    <span style="color: white; margin-right: 1rem;">👤 <?= htmlspecialchars(app()->auth::user()->login) ?></span>
                    <a href="/logout" class="btn btn-primary">Выход</a>
                <?php else: ?>
                    <a href="/login" class="btn btn-primary">Вход</a>
                <?php endif; ?>
            </div>
        </div>
    </nav>

    <main class="page-container">
        <?= $content ?? '<p>Содержимое страницы не найдено</p>' ?>
    </main>
</body>
</html>