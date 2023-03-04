<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PersOgus</title>
</head>
<body>
    <?php 
    $txt = $_POST["textforcountPers"];
    $arrTxt = str_split($txt);
    $arr = array();
    $length = strlen($txt);

    foreach ($arrTxt as $key => $value) {
        if(!(in_array($value, $arr))){
            array_push($arr, $value);
        }
    }

    foreach ($arr as $key => $sim) {
        $counter = 0;
        foreach ($arrTxt as $key => $value) {
            if($sim == $value) $counter++;
        }
        $pers = ($counter * 100)/$length;
        echo "процент символа => ".$sim." в тексте равен =>".$pers."<br>";
    }

    ?>
</body>
</html>