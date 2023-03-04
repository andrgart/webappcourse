<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zadOgus</title>
</head>
<body>
    <?php 
    $date = $_POST["birth"];

    $pieces = explode(".", $date);
    
    $day = $pieces[0];
    $month = $pieces[1];

    echo "day - ".$day.", month - ".$month."<br>";

    if(($month == 12 && $day >= 22) || ($month == 1 && $day <= 20)) echo "Козерог";
    if(($month == 1 && $day >= 21) || ($month == 2 && $day <= 19)) echo "Водолей";
    if(($month == 2 && $day >= 20) || ($month == 3 && $day <= 20)) echo "Рыбы";
    if(($month == 3 && $day >= 21) || ($month == 4 && $day <= 20)) echo "Овен";
    if(($month == 4 && $day >= 21) || ($month == 5 && $day <= 20)) echo "Телец";
    if(($month == 5 && $day >= 21) || ($month == 6 && $day <= 21)) echo "Близнецы";
    if(($month == 6 && $day >= 22) || ($month == 7 && $day <= 22)) echo "Рак";
    if(($month == 7 && $day >= 23) || ($month == 8 && $day <= 23)) echo "Лев";
    if(($month == 8 && $day >= 24) || ($month == 9 && $day <= 23)) echo "Дева";
    if(($month == 9 && $day >= 24) || ($month == 10 && $day <= 23)) echo "Весы";
    if(($month == 10 && $day >= 24) || ($month == 11 && $day <= 22)) echo "Скорпион";
    if(($month == 11 && $day >= 23) || ($month == 12 && $day <= 21)) echo "Стрелец";

    ?>
</body>
</html>