<?php
$a = 16.5;

echo "hoe oud ben je?\r\n";

$b = readline("");
readline_add_history($b);

if ($b < $a) 
{
    echo "helaas, je mag nog niet beginnen met rijlesen";
}

else {
    echo "je mag beginnen met rijlessen!";
}

?>