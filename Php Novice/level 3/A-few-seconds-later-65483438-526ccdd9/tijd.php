<?php

$seconden = $argv[1];
$findme = "s";

$pos = strpos($seconden, $findme);

if ($pos == false) {
    echo "geen tijd gevonden\n";
} else {
    echo (int) $seconden . " seconden";
}
?>
