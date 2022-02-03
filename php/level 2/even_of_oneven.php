<?php

echo "Vul een getal in\r\n";
$a = readline();
readline_add_history($a);

$b = (int)$a; 
if (($b % 2) != 0) {
    echo "dit is een oneven getal"; 
} else { 
    echo "dit is een even getal";
};
?>
