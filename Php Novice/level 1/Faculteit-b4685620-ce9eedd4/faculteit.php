<?php
echo "Van welk getal wil je de faculteit weten?\n";

$b = readline("");

$a = 1;

for ($i = 1; $i <= $b; $i++) {   
    $a *= $i;        
} 
echo "De faculteit van $b is $a";
?>