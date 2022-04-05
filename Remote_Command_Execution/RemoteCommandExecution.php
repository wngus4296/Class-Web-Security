#!/usr/bin/php-cgi

<?php

print "<form method=\"get\" action=\"process_remote_comand_execution.php\">";
print "<p>\n Please write command</p>\n";
print "<p>command: <input type=\"text\" name=\"command\" /></p>\n";
print "<p><input type=\"submit\" value=\"Apply \" /></p>\n";
print "</form>";

?>