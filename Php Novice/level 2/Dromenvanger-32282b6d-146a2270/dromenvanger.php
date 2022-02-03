<?php
 
echo "getal\n";
$aantalvr = readline("");
 
$dromen = [];
 
for ($i = 0; $i < $aantalvr; $i++) {
    echo "getallen \n";
    $naam = readline();
    echo "Hoeveel dromen ga je opgeven?\n";
    $aantaldr = readline();
    $dromenls = [];
    for ($a = 0; $a < $aantaldr; $a++) {
        echo "Wat is jouw droom?\n";
        $dromenls[] = readline();
    }
    $dromen[$naam] = $dromenls;
}
 
foreach ($dromen as $naam => $dromenls) {
    foreach ($dromenls as $droom) {
        echo "$naam heeft dit als droom: $droom";
        echo "\n"; 
    }
}
 
?>
