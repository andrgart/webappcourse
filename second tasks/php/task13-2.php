<?php
require("task13-arr.php");
?>

<?php
$ans = array();
$ans[0] = $_POST["quest1"];
$ans[1] = $_POST["quest2"];
$ans[2] = $_POST["quest3"];
?>
<?php for ($i=0; $i < 3 ; $i++) { 
    echo $arrk[$i]."<br>";
    if($ans[$i] == $arrv[$i]){
        echo "<font color='#00CC00'>верно $ans[$i]</font> <br>";
    }
    else {
        echo "<font color='red'>неверно $ans[$i], верно $arrv[$i]</font> <br>";
    }
}
?>


