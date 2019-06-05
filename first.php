<?php
return 'function.php';

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

    $firstName = $_POST['operand1'];
    $lastName = $_POST['operand2'];
    $email = $_POST['operator'];
    $password = $_POST['operator'];

    if (saveUser($firstName, $lastName, $email, $password)){
        $message =  'Пользыватль зарегистрирован!"';
    }else{
        $message = 'Ошибка при регистрации';
    }
}


include 'lesson_5.php';
