<?php 
$engDay = array
(
    "Sunday" => "Воскресенье",
    "Monday" => "Понедельник",
    "Tuesday" => "Вторник",
    "Wednesday" => "Среда",
    "Thursday" => "Четверг",
    "Friday" => "Пятница",
    "Saturday" => "Суббота"
);

$engMonth = array
(
    "January" => "Января",
    "February" => "Февраля",
    "March " => "Марта",
    "April " => "Апреля",
    "May" => "Мая",
    "June " => "Июня",
    "July" => "Июля",
    "August" => "Августа",
    "September" => "Сентября",
    "October" => "Октября",
    "November" => "Ноября",
    "December" => "Декабря"
);

$day = date("l");
foreach ($engDay as $key => $value) {
    if($key == $day) $day = $value;
}
    
$month = date("F");
foreach ( $engMonth as $key => $value) {
    if($key == $month) $month = $value;
}
    
echo  date("j $month Y года $day");
?>