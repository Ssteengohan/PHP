<?php

echo "Hoe veel activiteiten wil je toevoegen?\n";
$aantal = readline("");

$bucketlist = [];
     
for ($i = 0; $i < $aantal; $i++) {
    echo "Wat wil je toevoegen aan jouw bucket list?\n";
    $bucketlist[] = readline(); 
} 
echo "Op jouw bucket list staat:\n";
foreach ($bucketlist as $activiteit) {
    echo $activiteit;
    echo "\n";
}
  
?>