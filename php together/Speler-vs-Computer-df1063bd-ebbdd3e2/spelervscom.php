<?php 
$DisplayPagina1 = true;
$DisplayKeuzeOff = false;
$DisplayKeuze2 = true;
$keuze2 = " ";
$keuze1 = " ";

if (isset($_GET['speler1'])) {
    $keuze1 = $_GET['speler1'];
    $DisplayPagina1 = false;
    $DisplayKeuzeOff = true;
};

$random = rand(0, 2);
switch ($random) {
    case 0:
        $keuze2 = "Steen";
        break;
    case 1:
        $keuze2 = "Papier";
        break;
    case 2:
        $keuze2 = "Schaar";
        break;
}
 echo"
 <center>
 <form method=get>
 <input type=hidden name=0 value=Steen>
 <input type=hidden name=1 value=Papier>
 <input type=hidden name=2 value=Schaar>
 <input type='hidden' name='speler1' value= $keuze1>
 </center>
 </form>
";

if ($DisplayPagina1) {
    echo"
    <center>
    <br>
    <h1> Maak je keuze<h1>
    <br>
    </center>
    <center>
    <form method=get>
    <img src=steen.png alt=Steen width=190px>
    <img src=papier.png alt=Papier width=190px>
    <img src=schaar.png alt=Schaar height=130px  width=100px>
    <br>
    <input type=submit name=speler1 style=margin-right:88px value=Steen>
    <input type=submit name=speler1 style=margin-right:88px value=Papier>
    <input type=submit name=speler1 value=Schaar>
    </center>
    </form>
    ";  
};
if ($DisplayKeuzeOff) {
    if ($keuze1 == "Steen" && $keuze2 == "Steen") {
        echo "
        <center>
        <h1> Gelijkspel!<h1>
        <h2>Niemand heeft gewonnen!<h2>
        ";
    };
    if ($keuze1 == "Steen" && $keuze2 == "Papier") {
        echo "
        <center> 
        <h1> Verloren!<h1>
        <h2> Computer heeft gewonnen!<h2>
        ";
    };
    if ($keuze1 == "Steen" && $keuze2 == "Schaar") {
        echo "<center> 
        <h1> Gewonnen!<h1>
        <h2>Speler heeft gewonnen!<h2>
        ";
    };
    if ($keuze1 == "Papier" && $keuze2 == "Steen") {
        echo "<center> 
        <h1> Gewonnen!<h1>
        <h2>Speler heeft gewonnen!<h2>
        ";
    };
    if ($keuze1 == "Papier" && $keuze2 == "Papier") {
        echo "<center>
        <h1> Gelijkspel!<h1>
        <h2>Niemand heeft gewonnen!<h2>
        ";
    };
    if ($keuze1 == "Papier" && $keuze2 == "Schaar") {
        echo "<center> 
        <h1> Verloren!<h1>
        <h2>Computer heeft gewonnen!<h2>
        ";
    };
    if ($keuze1 == "Schaar" && $keuze2 == "Steen") {
        echo "<center> 
        <h1> Verloren!<h1>
        <h2>Computer heeft gewonnen!<h2>
        ";
    };
    if ($keuze1 == "Schaar" && $keuze2 == "Papier") {
        echo "<center> 
        <h1> Gewonnen!<h1>
        <h2>Speler heeft gewonnen!<h2>
        ";
    };
    if ($keuze1 == "Schaar" && $keuze2 == "Schaar") {
        echo "<center> 
        <h1> Gelijkspel!<h1>
        <h2>Niemand heeft gewonnen!<h2>
        ";
    };
}
?>