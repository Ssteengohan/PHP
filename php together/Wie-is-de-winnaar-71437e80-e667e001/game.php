<?php 
$Displaykeuze1 = true;
$DisplayKeuze2 = false;
$DisplayKeuzeOff = false;
$keuze2 = " ";
$keuze1 = " ";

if (isset($_GET['sub'])) {
    $DisplayKeuze2 = true;
    $keuze1 = $_GET['speler1'];
    $Displaykeuze1 = false;
};

if (isset($_GET['stuur2'])) {
    $DisplayKeuze2 = false;
    $keuze1 = $_GET['speler1'];
    $keuze2 = $_GET['speler2'];
    $Displaykeuze1 = false;
    $DisplayKeuzeOff = true;
};

echo "

<h1> Steen Papier Schaar<h1>    
";

if ($Displaykeuze1) {
    echo "

<h2> Speler 1 maakt zijn keuze <h2>
";
    echo"
    <form method=get>
    <select name=speler1>
        <option name=keuze1>Steen</option>
        <option name=keuze1>Papier</option>
        <option name=keuze1>Schaar</option>
    </select>
    <br>
    <input type=submit value=Selecteer name=sub>
    </form>
    ";  
};

if ($DisplayKeuze2) {
    echo "
    <h3>Speler 1 heeft zijn keuze gemaakt<h3>

<h2> De beurt van speler 2<h2>
";

    echo"
    <form method=get>
    <select name=speler2>
        <option name=keuze2>Steen</option>
        <option name=keuze2>Papier</option>
        <option name=keuze2>Schaar</option>
    </select>
    <br>
    <input type=submit value=Selecteer name=stuur2>
    <input type='hidden' name='speler1' value= $keuze1>
    </form>
    ";
};
if ($DisplayKeuzeOff) {
    echo "
<h3> Speler 1 heeft $keuze1 gekozen<h3>
<h3> Speler 2 heeft $keuze2 gekozen<h3>
<br>
";
    if ($keuze1 == "Steen" && $keuze2 == "Steen") {
        echo "Niemand heeft gewonnen!";
    };
    if ($keuze1 == "Steen" && $keuze2 == "Papier") {
        echo "Speler 2 heeft gewonnen!";
    };
    if ($keuze1 == "Steen" && $keuze2 == "Schaar") {
        echo "Speler 1 heeft gewonnen!";
    };
    if ($keuze1 == "Papier" && $keuze2 == "Steen") {
        echo "Speler 1 heeft gewonnen!";
    };
    if ($keuze1 == "Papier" && $keuze2 == "Papier") {
        echo "Niemand heeft gewonnen!";
    };
    if ($keuze1 == "Papier" && $keuze2 == "Schaar") {
        echo "Speler 2 heeft gewonnen!";
    };
    if ($keuze1 == "Schaar" && $keuze2 == "Steen") {
        echo "Speler 2 heeft gewonnen!";
    };
    if ($keuze1 == "Schaar" && $keuze2 == "Papier") {
        echo "Speler 1 heeft gewonnen!";
    };
    if ($keuze1 == "Schaar" && $keuze2 == "Schaar") {
        echo "Niemand heeft gewonnen!";
    };
}




?>