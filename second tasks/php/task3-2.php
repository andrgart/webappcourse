<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>weekOgus</title>
</head>
<body>
    <?php 
    $date = $_POST["date"];

    $pieces = explode(".", $date);
    
    $day = $pieces[0];
    $month = $pieces[1];
    $year = $pieces[2];

    echo date("l", mktime(0, 0, 0, $month, $day, $year));
    ?>
</body>
</html>