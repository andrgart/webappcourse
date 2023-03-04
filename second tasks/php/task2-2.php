<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>yearAmogus</title>
</head>
<body>
    <?php 
      $year = $_POST["year"];
      
      if($year % 4 == 0 & ($year % 100 != 0 || $year % 400 == 0)) echo "hohoho yes";
      else echo "hohoho no";
    ?>
</body>
</html>