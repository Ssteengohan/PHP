<?php 

session_start();

if (isset($_SESSION['count'])) {
    echo "aantal bezoeken " . $_SESSION["count"] . "<br/>";
    $_SESSION["count"]++;
} else {
    $_SESSION["count"] = 1;
    echo "aantal bezoeken 1";
}
?>