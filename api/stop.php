<?php
include('config.php');

$handle = fopen($app_path.'process.txt', 'r');

while ($row = fgetcsv($handle)) {
	$pid = $row[0];
	echo "<p> kill -9 $pid </p>";
	print_r(exec("kill -9 $pid"));
}
print_r(exec("kill -9 php"));
fclose($handle);
