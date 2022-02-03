<?php
$geld = intval($argv[1]);
 
$a = 1;
$b = 2;
$c = 5;
$d = 10;
 
if ($geld == 0) {
    echo "geen wisselgeld";
} else {
    $aantal_d = floor($geld / $d);
    $geld = $geld % $d;
    $aantal_c = floor($geld / $c);
    $geld = $geld % $c;
    $aantal_b = floor($geld / $b);
    $geld = $geld % $b;
    $aantal_a = floor($geld / $a);
 
    if ($aantal_d != 0) {
        echo "$aantal_d x 10 euro" . PHP_EOL; 
    }
    if ($aantal_c != 0) {
        echo "$aantal_c x 5 euro" . PHP_EOL; 
    }
    if ($aantal_b != 0) {
        echo "$aantal_b x 2 euro" . PHP_EOL; 
    }
    if ($aantal_a != 0) {
        echo "$aantal_a x 1 euro" . PHP_EOL; 
    }
}
 
?>