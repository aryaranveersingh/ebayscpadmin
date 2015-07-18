<?php

include('config.php');

$log = "tail -n 18 ".$log_path."scrape.log";
$data = passthru($log);
echo $data;
