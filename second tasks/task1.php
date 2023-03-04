<?php 
$day = date("j");
$month = date("n");
$year = date("Y");

echo $day.", ".$month.", ".$year." - текущая дата <br>" ;
$lastday = 30 - $day;
$lastmonth = 12 - $month;
echo $lastday.", ".$lastmonth." - до нг";
    
?>