<?php
$er = ['1','2','3','4','5'];

foreach ($er as $re){
    $count = $re ** 2;
    $resault+=$count;
};
echo $resault . '<br /><br />';

$arr = ['Коля'=> '200', 'Вася'=> '300', 'Петя'=>'400'];

foreach ($arr as $el){
    $key = array_search($el ,$arr);
    echo $key . '- зарплата ' . $el .' долларов'. '<br />';
};
echo '<br />';

$days = ['Пн','Вт','Ср','Чт','Пт','Сб','Вс'];
foreach ($days as $day){
    $date = date("w");
    if ($days[$date-1]==$day){
        echo '<b>'.$day.'</b><br />';
    }else{
        echo $day . '<br />';
    };
};
echo '<br />';

$str = ['green'=>'зеленый','red'=>'красный','blue'=>'голубой'];
foreach ($str as  $word){
    $en = array_search($word ,$str);
    $ru = $word;
    echo $en . ' - ' . $ru . '<br />';
};