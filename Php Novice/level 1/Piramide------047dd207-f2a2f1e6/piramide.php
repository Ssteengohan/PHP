<?php
echo "Hoeveel stapels wil je hebben?\n";

$b = readline("");

$a = 1;
$i = 1;

while($a < $b) {   
     $a++;
     $i *= $a;
    
    
 } 
 echo " De faculteit van $b is $i";
?>