<?php 
$geld = floatval($argv[1]);


define("GELDEENHEDEN" , array(50, 20, 10, 5, 2, 1));
$centen = array(50, 20, 10, 5);
$rest = (round($geld * 100));

foreach ( as $geldeenheid) {
    $waarde = $geldeenheid * 100;
    if ($rest >= $geldeenheid) {
        $aantaleuro = floor($rest / $waarde);
        $rest = $rest % $waarde;
        if ($aantaleuro > 0) {
            echo "$aantaleuro x $geldeenheid euro\n";
        }
    }
}
foreach ($centen as $cent) {
    $aantalcent = floor($rest / $cent);
    $rest = $rest % $cent;
    if ($aantalcent > 0) {
        echo "$aantalcent x $cent cent\n";  
    }
}
if ($rest <= 0) {
        echo "geen wisselgeld\n";
} 
?>