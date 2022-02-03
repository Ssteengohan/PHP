<?php
$prijzen = array(
    'Citizen of Glass' => 4.5,
    'Night' => 9,
    'New Eyes' => 5,
    'Strange Trails' => 10,
); 
var_dump($prijzen);
$totaal = 0;
echo "Het albumoverzicht:\n";
foreach ($prijzen as $naam => $prijs) {
    echo "$naam kost €$prijs\n";
    $totaal += $prijs;
}
echo "Het totaalbedrag van alle albums is €$totaal\n";
$gemiddelde = $totaal += count($prijzen);
echo "De gemiddelde prijs van alle albums is €$gemiddelde\n";

?>