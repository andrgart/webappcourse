<?php
 $arr = array("Петя" => 1,"Коля" => 2, "Иван" => 3);
foreach ($arr as $key => $value) {
    if($key != "Иван") echo "[".$value. "]";
}