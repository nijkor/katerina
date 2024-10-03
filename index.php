<?php
require $_SERVER['DOCUMENT_ROOT']."/src/config.php";
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$_SERVER['SERVER_NAME']?> &mdash; главная</title>

    <link rel="stylesheet" href="/src/main.css">
    <script src="/node_modules/preline/dist/preline.js"></script>
</head>
<body>
<? include $_SERVER['DOCUMENT_ROOT']."/src/navbar.php"; ?>
<h1 class="text-3xl font-medium mx-4">Публичные курсы</h1>
<?php
$getCourses = mysqli_query($conn, "SELECT * FROM courses WHERE `access` = 'public'");
if(mysqli_num_rows($getCourses) == 0)
{
    ?>
    <div class="box">Нет публичных курсов. <a href="/login" class="underline text-blue-600">Авторизуйтесь</a>, чтобы просмотреть курсы, на которые вы подписаны.</div>
    <?
}
?>
<? include $_SERVER['DOCUMENT_ROOT']."/src/footer.php"; ?>
</body>
</html>