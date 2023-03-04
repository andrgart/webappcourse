<?php
$result = 0;
$arr = array(10, 20, 15, 17, 24, 35);
foreach ($arr as $value) {
    $result += $value;
}
echo $result;