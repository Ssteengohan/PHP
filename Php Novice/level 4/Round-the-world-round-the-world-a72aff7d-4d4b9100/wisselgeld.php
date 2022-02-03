<?php
$bedrag = floatval($argv[1]);

define($GELDEENHEDEN = array(50, 20, 10, 5, 2, 1));
$centen = array(50, 20, 10, 5);
function roundUpToAny($bedrag, $x = 5) 
{
    return (round($bedrag) % $x === 0) ? round($bedrag) : round(($bedrag + $x / 2) / $x) * $x;
}
 $restbedrag = roundUpToAny($bedrag * 100);
foreach ($GELDEENHEDEN as $geldeenheid) {
        $waarde = $geldeenheid * 100;
    if ($restbedrag >= $waarde) {
        $aantaleuro = round($restbedrag / $waarde);
        $restbedrag = $restbedrag % $waarde;
        echo "$aantaleuro x $geldeenheid euro" . PHP_EOL ;
    } 
}    if ($restbedrag <= 0) {
       echo "geen wisselgeld";
}
foreach ($centen as $cent) {
        $aantalcent = floor($restbedrag / $cent);
        $restbedrag = $restbedrag % $cent; 
        echo "$aantalcent x $cent cent" . PHP_EOL ;
}
?>