<?php
$name = 'Екатерина';
$age = 34;
$email = 'misstery@inbox.lv';
$city = 'Вентспилс';
$about = 'В поисках работы';
?>
<!DOCTYPE>
<html lang="ru">
    <head>
        <title><?= $name . ' – ' . $about ?></title>
        <meta charset="utf-8">
        <style>
            body {
                font-family: sans-serif;  
                max-width: 1000px;
                margin: 0 auto;
            }
        </style>
    </head>
    <body>
        <h1>Страница пользователя <?= $name ?></h1>
        <dl>
            <dt>Имя</dt>
            <dd><?= $name ?></dd>
            <dt>Возраст</dt>
            <dd><?= $age ?></dd>
            <dt>Адрес электронной почты</dt>
            <dd><a href="mailto:<?= $email ?>"><?= $email ?></a></dd>
            <dt>Город</dt>
            <dd><?= $city ?></dd>
            <dt>О себе</dt>
            <dd><?= $about ?></dd>
        </dl>
    </body>
</html>