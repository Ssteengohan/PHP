<?php 

$tijden = explode(" ", $argv[1]);

$totaal = 0;

foreach ($tijden as $tijd) {
    $dag = "d";
    $uur = "u";
    $minuut = "m";
    $seconden = "s";
    $letter = substr($tijd, -1);

    switch ($letter) {
        case $dag:
            $totaal += (int) $tijd * 24 * 60 * 60;
            break;
        case $uur:
            $totaal += (int) $tijd * 60 * 60;
            break;
        case $minuut:
            $totaal += (int) $tijd * 60;
            break;
        case $seconden:
            $totaal += (int) $tijd;
            break;
        default:
            echo "geen tijd gevonden";
    }
}
echo "$totaal seconden";

?>