<?php
echo "Hoeveel vrienden vragen om hun droom?\n";
$aantal = readline("");
if (!is_numeric($aantal)) {
    exit($aantal . " is geen geldig getal, probeer het opnieuw");
}

$dromen = [];

for ($i = 0; $i < $aantal; $i++) {
    echo "wat is jou naam?\n";
    $naam = readline();
    echo "Wat is jouw droom?\n";
    $dromen[$naam] = readline();
}
foreach ($dromen as $naam => $droom) {
    echo  "$naam heeft als droom: $droom";
    echo "\n";
}
  
?>

