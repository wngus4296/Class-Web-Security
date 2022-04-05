#!/usr/bin/php-cgi

<?php

print "<form method=\"get\" action=\"process_local_file_read.php\">";
print "<p>\n Please write your local file name. </p>\n";
print "<p>File name: <input type=\"text\" name=\"filename\" /></p>\n";
print "<p><input type=\"submit\" value=\"Apply \" /></p>\n";
print "</form>";

?>