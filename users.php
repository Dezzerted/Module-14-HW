<?php
session_start();

$users = [
    [
        'login' => 'Миша',
        'password' => password_hash(12,PASSWORD_DEFAULT),
    ],
    [
        'login' => 'Саша',
        'password' => password_hash(123,PASSWORD_DEFAULT),
    ],
    [
        'login' => 'Маша',
        'password' => password_hash(1234,PASSWORD_DEFAULT),
    ],
    [
        'login' => 'Паша',
        'password' => password_hash(12345,PASSWORD_DEFAULT),
    ],
    [
        'login' => 'Даша',
        'password' => password_hash(123456,PASSWORD_DEFAULT),
    ],
    [
        'login' => 'Алина',
        'password' => password_hash(1234567,PASSWORD_DEFAULT),
    ],
    [
        'login' => 'Андрей',
        'password' => password_hash(12345678,PASSWORD_DEFAULT),
    ],
];