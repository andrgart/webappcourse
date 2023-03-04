<?php
$arr = array("html", "css", "php", "js", "jq");
foreach ($arr as $value) {
    if($value == "jq") echo $value;
    else echo $value.", ";
}