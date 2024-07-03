<?php
session_start();
include 'process.php';
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
            <h1><span id="welcome">
                <?php 
                    if ($auth) {
                        echo getCurrentUser() . ', добро пожаловать в наш СПА-салон';
                    } else {
                        echo 'Добро пожаловать в наш СПА-салон';
                    }
                ?>
           </br></br><span id="name">В СПА по-СПА-ть</span></h1>
            <div id="enterlk">
                <?php 
                    if ($auth) {
                        echo' <a href="logout.php">Покинуть свою СПА-зону</a>';
                    } else {
                        echo '<a href="login.php">Войти в свою СПА-зону</a>';
                    }
                ?>
            </div>
        </header>
        <article class="info">
            <h2>Массаж всего тела (60, 90, 120 минут)</h2>
            <img id="image1" src="https://30spa.ru/media/zoo/images/XXXL_f0760e956083c0d81b681805de68d19f.jpg" alt="фотка 1">
        </article>
        <article class="info">
            <h2>Массаж головы и зоны декольте (45, 75 минут)</h2>
            <img id="image1" src="https://static.tildacdn.com/tild6461-6561-4465-b730-373866326465/uploads_zlavadnask_d.jpg" alt="фотка 2">
        </article>
        <article class="info">
            <h2>Массаж ног и рук (45, 75 минут)</h2>
            <img id="image1" src="https://static.tildacdn.com/tild3565-3634-4662-b831-343339376664/tajskij-reflektornyj.jpg" alt="фотка 3">
        </article>
        <article class="info">
            <h2>
                <?php 
                    if ($auth) {
                        if($timeRemaining < 1) {
                            echo getCurrentUser() . ', к сожалению, в этот раз Вы не успели забрать персональную скидку.';
                        } else {
                            echo getCurrentUser() . ', успейте забрать Вашу персональную скидку. Осталось ' . $hourminsec . '.';
                        }
                    } else {
                        echo 'Регулярные персональные скидки для постоянных клиентов!';
                        }
                ?>
            </h2>            
            <img id="image1" src="https://cdn-ru.bitrix24.ru/b4308399/landing/536/5366e0d93692d965404d9b5327be66c4/E-MF-YNXMAEhYQg_1x.png" alt="фотка 4">
        </article>
        <article class="info">
            <h2>  
                <?php 
                    if ($auth) {
                        if ($bd[1].$bd[2] === date('md')) {
                            echo getCurrentUser() . ', с Днём рождения! Ваш подарок - скидка 5% на ВСЕ услуги!';
                        } else {echo getCurrentUser() . ', до Вашего Дня рождения осталось дней: ' . $daysToBd . '.' . '<br>' . 'Ждите скидку!';}
                    } else {
                        echo 'Акция!! Скидка в День рождения!!';}
                ?>
            </h2>
            <img id="image1" src="https://img.razrisyika.ru/kart/3/1200/8827-s-dnem-rozhdeniya-33.jpg" alt="фотка 5">
        </article>
</html>