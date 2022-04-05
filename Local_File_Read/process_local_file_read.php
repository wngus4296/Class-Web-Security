#!/usr/bin/php-cgi

<?php

$filename = $_GET["filename"];

$flag = 0;
$blacklist = array("/passwd/i", "/hosts/i");

echo "</p>";

for ($i=0; $i < sizeof($blacklist); $i++) {
    if (preg_match($blacklist[$i], $filename)) {
        echo"Local File read is blocked.";
        $flag = 1;
        break;
    }
 }

if (!$flag) {
    readfile($filename);
    echo "</p>Local file read is done";
}

?>