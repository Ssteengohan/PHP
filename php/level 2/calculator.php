<?php 
echo "welke operatie wil je uitvoeren?(+, -, %)\n";
$keuze = readline();
if ($keuze != "+" && $keuze != "-" && $keuze != "%") {
     exit($keuze . " is geen geldige operatie"); 
}
echo "eerste getal?\n"; 
$a = readline(); 
echo "tweede getal?\n"; 
$b = readline();
if (is_numeric($a)) {
} else { 
    exit(var_export($a, true) . " is geen getal");
}
if (is_numeric($b)) {
} else { 
    exit(var_export($b, true) . " is geen getal");
} if ($keuze == '+') {
     echo ($a + $b);
} elseif ($keuze == '-') { 
    echo ($a - $b); 
} elseif ($keuze == '%') {
     echo ($a % $b);
} 
?>
