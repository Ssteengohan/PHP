<?php
echo "Hoeveel landen ga je toevoegen?\n";
$aantal = readline("");
if (!is_numeric($aantal)) {
    exit($aantal . " is geen geldig getal, probeer het opnieuw");
}



for ($i = 0; $i < $aantal; $i++) {
    echo "welk land wil je toevoegen?\n";
    $land = readline();
    echo "Wat is de hoofdstad van $land ?\n";
    $landen[$land] = readline();
}
echo "De volgende landen en steden zitten in de database\n";
foreach ($landen as $land => $ant) {
    echo  "$land, $ant";
    echo "\n";
}
  
?>