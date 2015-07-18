<?php
include('config.php');

$handle = fopen($app_path.'process.txt', 'r');

while ($row = fgetcsv($handle)) {
	$pid = $row[0];
	echo "<p> kill -9 $pid";
	echo "</p>";
	print_r(exec("kill -9 $pid"));
	print_r(exec("kill -9 php"));
}
exec("/etc/init.d/apache2 restart");
// exec("/Applications/MAMP/Library/bin/httpd -k restart");
fclose($handle);
