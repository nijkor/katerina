<?php
require $_SERVER['DOCUMENT_ROOT']."/src/config.php";
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$_SERVER['SERVER_NAME']?> &mdash; вход в аккаунт</title>

    <link rel="stylesheet" href="/src/main.css">
    <script src="/node_modules/preline/dist/preline.js"></script>
</head>
<body>
<? include $_SERVER['DOCUMENT_ROOT']."/src/navbar.php"; ?>
<h1 class="text-3xl font-medium mx-4">Вход в аккаунт</h1>
<div class="box">
    <form method="post">
        <div class="mb-2">
            <input type="text" name="login" required placeholder="Логин">
        </div>
        <div class="mb-2">
            <input type="password" name="login" required placeholder="Пароль">
        </div>
        <button type="submit">Войти</button>
    </form>
</div>
<? include $_SERVER['DOCUMENT_ROOT']."/src/footer.php"; ?>
</body>
</html>