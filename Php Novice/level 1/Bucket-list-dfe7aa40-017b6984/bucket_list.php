<?php
echo "Hoe veel activiteiten wil je toevoegen?\n";
$aantal = readline("");
if (!is_numeric($aantal)) {
    exit($aantal . " is geen getal, probeer het opnieuw");
}
$bucketlist = [];
$ko = [];

for ($i = 0; $i < $aantal; $i++) {
    echo "Wat wil je toevoegen aan jouw bucket list?\n";
    $bucketlist[] = readline(); 
    echo "wat is je naam\n";
    $ko[]= readline();
}

echo "Op jouw bucket list staat:\n";
foreach ($bucketlist as $ko => $activiteit) {
    echo "$activiteit wat is jou droom $activiteit" ;
    echo "\n";
}
  
?>

