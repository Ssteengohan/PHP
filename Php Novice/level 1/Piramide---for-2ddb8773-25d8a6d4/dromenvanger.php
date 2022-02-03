<?php
echo "Hoeveel vrienden vragen zal ik vragen om hun droom?\n";
$aantal = readline("");
if (!is_numeric($aantal)) {
    exit($aantal . " is geen geldig getal, probeer het opnieuw");
}



for ($i = 0; $i < $aantal; $i++) {
    echo "wat is jou naam?\n";
    $namen = readline();
    echo "hoeveel dromen ga je opgeven?\n";
    $dromen[$namen] = readline();
for ($i = 0; $i < $dromen; $i++){
    echo "wat is jou droom?\n";
    $droom[] = readline();  
    }
}

foreach ($namen as $dromen => $ant) {
    echo  "$namen heeft dit als droom:$droom";
    echo "\n";
}
  
?>