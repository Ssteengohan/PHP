<?php 

if (!isset($_COOKIE['count'])) {
    echo "Bezocht: 1 keer";

    $cookie = 1;
    setcookie("count", $cookie);
} else {
    $cookie = ++$_COOKIE['count'];
    setcookie("count", $cookie);
    echo "Bezocht: $_COOKIE[count]  keer";
}
?>