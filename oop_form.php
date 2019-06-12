<?php

require 'function.php';

spl_autoload_register(function ($className){
   $fileName = __DIR__ . '/classes/' . $className . '.php';
   require $fileName;
});

require 'classes/Form.php';

$message ='';

try {
    $form = new Form('post');
} catch (InvalidArgumentException $exception){
    die('Передае кривой аргумент');
}catch (Exception $exception){
    die('fwfwf');
}

$form = new Form('post');
$form->add(new InputElement('first_name', 'Имя', true));
$form->add(new InputElement('last_name', 'Фамилия', true));
$form->add(new EmailElement('email', 'Email', true));
$form->add(new PasswordElement('password', 'Пароль', true));
$form->add(new ButtonElement('submit', 'Зарегистрировать'));
$form->hendlRequest();

if ($form->isSubmitted()){
    $result = saveUser(
        $form->getValue('first_name'),
        $form->getValue('last_name'),
        $form->getValue('email'),
        $form->getValue('password')
    );

    if ($result){
        $message = 'Пользыватель зарегистри  рован!';
    }
    else{
        $message = 'Ошибка при регистраци';
    }
}

require 'oop_form.tpl.php';