#!/usr/bin/php-cgi

<?php

print "<form method=\"get\" action=\"process_remote_code_execution.php\">";
print "<p>\n Please write code</p>\n";
print "<p>code: <input type=\"text\" name=\"code\" /></p>\n";
print "<p><input type=\"submit\" value=\"Apply \" /></p>\n";
print "</form>";

?>