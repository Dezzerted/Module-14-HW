<?php

function getUsersList() {
    include ('users.php');
    return $users;
}

function existsUser($login) {
    include ('users.php');
    foreach ($users as $user) {
        echo $user['login'];
        if ($login === $user['login'])
        return true;
    } return false;
}

function checkPassword($login, $password) {
    include ('users.php');
    foreach ($users as $user) {
        if ($login === $user['login']) {
            if (password_verify($password, $user['password'])){
                return true;
            }
        }
    } return false;
}


function getCurrentUser() {
    include ('users.php');
    if (isset($_SESSION['login']) && !empty($_SESSION['login'])) {
        return $_SESSION['login'];
    } else return null;
    }


