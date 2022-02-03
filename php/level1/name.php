<?php
echo "Wat is je voornaam\r\n";

$naam = readline("");
readline_add_history($naam);

echo "wat is je achternaam\r\n";

$achternaam = readline("");
readline_add_history($achternaam);

$naamenachternaam = $naam . " " . $achternaam ;

echo "jouw naam is : $naamenachternaam";

?>