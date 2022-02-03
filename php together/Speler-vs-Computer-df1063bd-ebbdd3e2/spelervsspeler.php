<style type=”text/css”>
.steen {
  border: none;
  background-color: inherit;
  font-size: 16px;
  cursor: pointer;
}
</style>

<?php 
$DisplayPagina1 = true;
$DisplayKeuze2 = false;
$DisplayKeuzeOff = false;
$keuze2 = " ";
$keuze1 = " ";

if (isset($_GET['speler1'])) {
    $DisplayKeuze2 = true;
    $keuze1 = $_GET['speler1'];
    $DisplayPagina1 = false;
};

if (isset($_GET['speler2'])) {
    $DisplayKeuze2 = false;
    $keuze1 = $_GET['speler1'];
    $keuze2 = $_GET['speler2'];
    $DisplayPagina1 = false;
    $DisplayKeuzeOff = true;
};


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
        <h1>Niemand heeft gewonnen!<h1>
        ";
    };
    if ($keuze1 == "Steen" && $keuze2 == "Papier") {
        echo "
        <center> 
        <h1>Speler 2 heeft gewonnen!<h1>
        ";
    };
    if ($keuze1 == "Steen" && $keuze2 == "Schaar") {
        echo "
        <center> 
        <h1>Speler 1 heeft gewonnen!<h1>
        ";
    };
    if ($keuze1 == "Papier" && $keuze2 == "Steen") {
        echo "
        <center>
        <h1>Speler 1 heeft gewonnen!<h1>
        ";
    };
    if ($keuze1 == "Papier" && $keuze2 == "Papier") {
        echo "
        <center>
        <h1>Niemand heeft gewonnen!<h1>
         ";
    };
    if ($keuze1 == "Papier" && $keuze2 == "Schaar") {
        echo "
        <center>
        <h1>Speler 2 heeft gewonnen!<h1>
         ";
    };
    if ($keuze1 == "Schaar" && $keuze2 == "Steen") {
        echo "
        <center>
        <h1>Speler 2 heeft gewonnen!<h1>
         ";
    };
    if ($keuze1 == "Schaar" && $keuze2 == "Papier") {
        echo "<center>
        <h1>Speler 1 heeft gewonnen!<h1>
         ";
    };
    if ($keuze1 == "Schaar" && $keuze2 == "Schaar") {
        echo "
        <center> 
        <h1>Niemand heeft gewonnen!<h1>
        ";
    };
    echo "
<center>
<h6> Speler 1 had $keuze1 gekozen<h6>
<h6> Speler 2 had $keuze2 gekozen<h6>
<br>
";
}

if ($DisplayKeuze2) {
    echo "
    <center>
    <h3>Speler 1 heeft zijn keuze gemaakt<h3>
    <h2> De beurt van speler 2<h2>
    </center>
";

    echo"
    <center>
    <form method=get>
    <img src=steen.png alt=Steen width=190px>
    <img src=papier.png alt=Papier width=190px>
    <img src=schaar.png alt=Schaar height=130px  width=100px>
    <br>
    <input type=submit name=speler2 style=margin-right:88px value=Steen>
    <input type=submit name=speler2 style=margin-right:88px value=Papier>
    <input type=submit name=speler2 value=Schaar>
    <input type='hidden' name='speler1' value= $keuze1>
    </center>
    </form>
";
};


?>