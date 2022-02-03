<?php
$bedrag = intval($argv[1]);
 
$GELDEENHEDEN = array(50, 20, 10, 5, 2, 1);
$restbedrag = $bedrag;
 
foreach ($GELDEENHEDEN as $geldeenheid) {
    if ($restbedrag >= $geldeenheid) {
        $aantalKeerGeldEenheidInRestBedrag = floor($restbedrag / $geldeenheid);
        $restbedrag = $restbedrag % $geldeenheid;
        echo "$aantalKeerGeldEenheidInRestBedrag x $geldeenheid euro" . PHP_EOL ;
    } else {
        echo "geen wisselgeld";
    }
}
?>


