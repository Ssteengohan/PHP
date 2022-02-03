<?php 

$input = "3h:5m:10s";
$result = explode(':', $input);

$result[0] = substr($result[0], 0, -1);
$result[1] = substr($result[1], 0, -1);
$result[2] = substr($result[2], 0, -1);

echo "Uren: " . $result[0] . PHP_EOL;
echo "Minuten: " . $result[0] . PHP_EOL;
echo "Seconden: " . $result[0] . PHP_EOL;