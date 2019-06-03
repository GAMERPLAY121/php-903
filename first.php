<?php

$resault = "";

if  ($_SERVER['REQUEST_METHOD'] == 'POST'){

$parameters = ['operand1','operator','operand2'];
foreach ($parameters as $parameter) {

    if (empty($_POST[$parameter])) {
        die('Не найден элемент '. $parameter);
    }
}
$operand1 = floatval($_POST['operand1']);
$operand2 = floatval($_POST['operand2']);
$operator = $_POST['operator'];

switch ($operator){
    case '+':
        $resault = $operand1 + $operand2;
        break;
    case '-':
        $resault = $operand1 - $operand2;
        break;
    case '*':
        $resault = $operand1 * $operand2;
        break;
    case '/':
        $resault = $operand1 / $operand2;
        break;
    default:
        die('Неверный оператор '. $operator);
}

//echo $operand1 . ' ' . $operator . ' ' . $operand2 . ' = ' . $resault;

}
include 'lesson_4.php';
