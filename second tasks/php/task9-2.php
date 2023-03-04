<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>textOgus</title>
</head>
<body>
    <?php 
    $txt = $_POST["textforcount"];

    $pieces = explode(" ", $txt);

    $words = count($pieces);
    $sim = strlen($txt);
    $simWithNoSpace = $sim - ($words - 1);
    
    echo "слова = ".$words.", символы = ".$sim.", символы без пробелов = ".$simWithNoSpace;
    ?>
</body>
</html>