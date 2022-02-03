<?php
echo "Wie zit er in de klas?\n";
$naam = readline("");

echo "de studenten in de klas zijn:\n";

foreach (explode(" ", $naam) as $namen) {
    echo $namen;
    echo "\n";
}
?>
