<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="main.css" type="text/css">
        <title>В СПА по-СПА-ть</title>
    </head>
    <body>
        <header>
            <h1><span id="welcome">Войдите в личный кабинет</span></br></br><span id="name">В СПА по-СПА-ть</span></h1>
        </header>
        <form action="process.php" method="post">
            <div class="container">
                <label for="login"><b>Логин</b></label>
                <input type="text" placeholder="Введите логин" name="login" required>
                </br>
                <label for="password"><b>Пароль</b></label>
                <input type="password" placeholder="Введите пароль" name="password" required>
                </br>
                <label for="dob"><b>Дата рождения</b></label>
                <input type="date" placeholder="дд.мм.гггг" name="dob" required>

                <button type="submit">Войти</button>
            </div>
        </form>
</html>