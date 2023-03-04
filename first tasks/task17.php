<?php
function checkNumOfThings($num){
    $lishnee = $num % 7;
    $things = $num - $lishnee;
    if($lishnee == 0){
        echo "Создано $things штук";
    }
    else{
        echo "Создано $things штук, отсаток - $lishnee";
    }
}
checkNumOfThings(10);