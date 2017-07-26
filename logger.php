<?php

function logMessage($logLevel, $message)
{
  $timeStamp = [];

$filename = 'log.txt';
$handle = fopen($filename, 'a');
foreach ($newCities as $city) {
    fwrite($handle, PHP_EOL . $city);
}
fclose($handle);
}

$date = date_create();
echo date_format($date, 'U = Y-m-d H:i:s') . "\n";

// logMessage("INFO", "This is an info message.");
// logMessage("ERROR", "This is an info message.");
