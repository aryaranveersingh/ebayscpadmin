<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING  & ~E_DEPRECATED );
ini_set('max_execution_time', 0);
$app_path = '/Applications/MAMP/htdocs/ebay/api/data/';
$log_path = '/Applications/MAMP/htdocs/ebay/api/';


$host = "127.0.0.1:8889";
$user = "root";
$pass = "root";
$database = "tmp";
$mysql = mysql_connect($host,$user,$pass) or die("Error"); 
mysql_select_db($database, $mysql);

