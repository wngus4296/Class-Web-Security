#!/usr/bin/php-cgi

<?php

$code = $_GET["code"];

$flag = 0;
$blacklist = array("/;/i");

echo "</p>";

for ($i=0; $i < sizeof($blacklist); $i++) {
    if (preg_match($blacklist[$i], $code)) {
        echo"Remote code execution is failed.";
        $flag = 1;
        break;
    }
 }

if (!$flag) {
    eval($code);
}

?>