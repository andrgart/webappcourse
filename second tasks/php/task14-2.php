<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selectus</title>
</head>
<body>
    <?php 
    $day = $_POST["Day"];
    $month = $_POST["Month"];
    $year = $_POST["Year"];

    echo date("l", mktime(0, 0, 0, $month, $day, $year));

    ?>
</body>
</html>