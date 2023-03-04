<?php
$lessZero = 0;
$moreZero = 0;
$arr = array(1,-2,3,4,-5,6,7,-8,-9,10);
foreach ($arr as $value) {
    if($value < 0) $lessZero += $value;
    if($value > 0) $moreZero += $value;
}
echo "сумма отрицательных $lessZero, сумма положительных $moreZero";