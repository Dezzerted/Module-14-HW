<?php

include ('functions.php');

$username = $_POST['login'] ?? null;
$password = $_POST['password'] ?? null;
$birthday = $_POST['dob'] ?? null;

if (null !== $username || null !== $password) {

    // Если пароль из базы совпадает с паролем из формы
    if (checkPassword($username, $password)) {
    
         // Стартуем сессию:
        session_start(); 
        
   	    // Пишем в сессию информацию о том, что мы авторизовались:
        $_SESSION['auth'] = true; 
        // Пишем в сессию логин пользователя 
        $_SESSION['login'] = $username; 
        // Пишем в сессию дату рождения
        $_SESSION['dob'] = $birthday;

        // Задаём сессию для персональной акции
        if(!isset($_SESSION['countdown'])){
            // Задаем время обратного отсчета
            $_SESSION['countdown'] = 86400;
            // Записываем в сессию, когда отсчет начался
            $_SESSION['starttimer'] = time();
        }
        header('Location: index.php');
    } else {
        echo '<script> alert("Ошибка при вводе логина или/и пароля. Просьба ввести данные заново."); window.history.back();</script>';  
    }
} 

$auth = $_SESSION['auth'] ?? null; 
$currentBirthday = $_SESSION['dob'] ?? null;
$countdown = $_SESSION['countdown'] ?? null;
$start_time = $_SESSION['starttimer'] ?? null;

// Текущее время для таймера персональной акции
$now = time();
// Время с момента отсчета
$timeSpent = $now - $start_time;
// Времени осталось
$timeRemaining = abs($countdown - $timeSpent);
// Секунды в формат ч:м:с 
$hourminsec = sprintf('%02d:%02d:%02d', $timeRemaining/3600, floor($timeRemaining/60)%60, $timeRemaining%60);

// Таймер до Дня рождения
if (isset($_SESSION['dob']) && !empty($_SESSION['dob'])){
$bd = explode('-', $currentBirthday);
$mkt = mktime(0, 0, 0, $bd[1], $bd[2], date('Y'));
if($mkt < time()){
    $mkt = mktime(0, 0, 0, $bd[1], $bd[2], date('Y') + 1);
}
$daysToBd = intval(($mkt-time())/86400);
}

