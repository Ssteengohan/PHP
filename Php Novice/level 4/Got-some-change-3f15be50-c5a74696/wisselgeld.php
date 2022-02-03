<?php
$geld = intval($argv[1]);
$euro = " x 1 euro";
if ($geld == 0) {
    echo "geen wisselgeld";
} else {
    echo $geld . " x 1 euro";
}


?>