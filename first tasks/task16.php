<?php
function checkFunc($num){
    if(gettype($num) == gettype(1)){
        if($num > 170) echo "Big";
        else echo "Small";
    }
    else return false;
}
checkFunc(171);