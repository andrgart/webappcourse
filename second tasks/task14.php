<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="php/task14-2.php" method="post">

        <label for="day-select">Day</label>
        <select name="Day" id="day-select">
        <?php
            for ($i=1; $i<=31; $i++)
            {
                ?>
                    <option value="<?php echo $i;?>"><?php echo $i;?></option>
                <?php
            }
        ?>
        </select>
        
        <label for="day-select">Month</label>
        <select name="Month" id="day-select">
            <option value="1">январь</option>
            <option value="2">февраль</option>
            <option value="3">март</option>
            <option value="4">апрель</option>
            <option value="5">май</option>
            <option value="6">июнь</option>
            <option value="7">июль</option>
            <option value="8">август</option>
            <option value="9">сентябрь</option>
            <option value="10">октябрь</option>
            <option value="11">ноябрь</option>
            <option value="12">декабрь</option>
        </select>
        
        <label for="day-select">Year</label>
        <select name="Year" id="day-select">
        <?php
            for ($i=1990; $i<=2025; $i++)
            {
                ?>
                    <option value="<?php echo $i;?>"><?php echo $i;?></option>
                <?php
            }
        ?>
        </select>

        <input type="submit">
    </form>
</body>
</html>