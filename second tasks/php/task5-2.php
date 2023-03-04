<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>younGogus</title>
</head>
<body>
    <?php 
    $date = $_POST["birth"];

    $pieces = explode(".", $date);

    $day = date("j");
    $month = date("n");
    $year = date("Y");

    echo "Y = ".$year." M = ".$month." D = ".$day."<br>";
    echo "y = ".$pieces[2]." m = ".$pieces[1]." d = ".$pieces[0]."<br>";

    if($month - $pieces[1] > 0){
        echo "количество полных лет = ".$year - $pieces[2];
    }
    if($month - $pieces[1] == 0 && $day - $pieces[0] >= 0){
        echo "количество полных лет = ".$year - $pieces[2];
    }
    if($month - $pieces[1] < 0){
        echo "количество полных лет = ".$year - $pieces[2] - 1;
    }
    ?>
</body>
</html>