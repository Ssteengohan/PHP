<?php
function parseNaarGetal($value)
{
    if (is_numeric($value)) {
        return intval($value);
    } else {
        return "Input moet een valide getal zijn";
    }
}

// Pas de code hieronder niet aan!

echo parseNaarGetal(10) . PHP_EOL;
echo parseNaarGetal("101") . PHP_EOL;
echo parseNaarGetal("Hallo wereld!") . PHP_EOL;
?>