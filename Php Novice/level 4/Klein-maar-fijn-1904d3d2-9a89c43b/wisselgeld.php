<?php
$bedrag = floatval($argv[1]);
 
$GELDEENHEDEN = array(50, 20, 10, 5, 2, 1);
$centen = array(50, 20, 10, 5);
$restbedrag = (round($bedrag * 100));
 
foreach ($GELDEENHEDEN as $geldeenheid) {
     $waarde = $geldeenheid * 100;
    if ($restbedrag >= $geldeenheid) {
        $aantaleuro = floor($restbedrag / $waarde);
        $restbedrag = $restbedrag % $waarde;
        echo "$aantaleuro x $geldeenheid euro" . PHP_EOL ;
    } else {
        echo "geen wisselgeld" . PHP_EOL;
    }
}
 
foreach ($centen as $cent) {
        $aantalcent = floor($restbedrag / $cent);
        $restbedrag = $restbedrag % $cent; 
        echo "$aantalcent x $cent cent" . PHP_EOL ;
}
?>
