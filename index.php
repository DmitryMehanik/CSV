<?php
require __DIR__ . '/vendor/autoload.php';

require 'database/database.php';
require 'csv/import.php';

$file = 'csvfile.csv';
$send = new import();
$send->InsertCSV($file);



