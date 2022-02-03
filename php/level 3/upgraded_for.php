<?php
echo "wat is jou naam?\n";

$b = readline("");
readline_add_history($b);

$Naam = ['Sjonnie de Wiel', 'Herman Kaal', 'Henk de Steen', 'Inge Kerkhoven', 'Gert Kruiswijk'];
foreach ($Naam as $loopdata) {
    echo "$loopdata,";
}
?>