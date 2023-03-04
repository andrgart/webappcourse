<?php
$min = rand(0, 59);
echo "$min = ";
if($min <= 15) echo "1/4";
if($min > 15 && $min < 30) echo "2/4";
if($min >= 30 && $min < 45) echo "3/4";
if($min >= 45) echo "4/4";