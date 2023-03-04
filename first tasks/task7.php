<?php
$arr = array("Петя" => 1,"Коля" => 2, "Иван" => 3);
$summ = 0;
foreach ($arr as $key => $value) {
    $summ += $value;
}
echo $summ;