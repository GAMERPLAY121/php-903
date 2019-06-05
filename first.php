<?php
require 'function.php';

$firstName = '';
$lastName = '';
$email = '';
$password = '';
$message = '';

if  ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $parameters = ['firstName', 'lastName', 'email', 'password'];
    foreach ($parameters as $parameter) {

        if (empty($_POST[$parameter])) {
            die('Не найден элемент ' . $parameter);
        }
    }

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (saveUser($firstName, $lastName, $email, $password)){
        $message =  'Пользыватль зарегистрирован!"';
    }else{
        $message = 'Ошибка при регистрации';
    }
};


include 'lesson_5.php';
