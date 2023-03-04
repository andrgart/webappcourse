<?php
$lang = "en";
$arr = [];
if($lang == "ru"){
    $arr[0] = "Понедельник";
    $arr[1] = "Вторник";
    $arr[2] = "Среда"; 
    $arr[3] = "Четверг";
    $arr[4] = "Пятница";
    $arr[5] = "Суббота";
    $arr[6] = "Воскресенье";
}
if($lang == "en"){
    $arr[0] = "Monday";
    $arr[1] = "Tuesday";
    $arr[2] = "Wednesday";
    $arr[3] = "Thursday";
    $arr[4] = "Friday";
    $arr[5] = "Saturday";
    $arr[6] = "Sunday";
}

foreach ($arr as $key => $value) {
    echo "$value ";
}