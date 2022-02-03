<!DOCTYPE html>
<html>
<head>
    <title>Steen Papier Schaar</title>
</head>
<body>
    <h1>Steen Papier Schaar</h1>
    <br>
    <h2>Speler 1</h2>
    <br>
    <form method="GET" action="">
        <select name="speler1">
            <option value="steen">Steen</option>
            <option value="papier">Papier</option>
            <option value="schaar">Schaar</option>
        </select>

    <br>
    <h2>Speler 2</h2>
    <br>
    <select name="speler2">
            <option value="steen">Steen</option>
            <option value="papier">Papier</option>
            <option value="schaar">Schaar</option>
        </select>
        <br>
        <br>
        <button type="submit">Bevestig keuze</button>
<?php
if (isset($_GET['speler2'])) {
    $speler2 = $_GET['speler2'];  // Storing Selected Value In Variable
    //echo "You have selected :" .$speler2;  // Displaying Selected Value 
    $speler1 = $_GET['speler1'];  // Storing Selected Value In Variable
    if ($speler1 == 'steen' and $speler2 == 'schaar') {
        ?>
        <h1><?php echo 'Speler 1 heeft gewonnen';?></h1>
        <?php
    } else if ($speler1 == 'papier' and $speler2 == 'steen') {
        ?>
        <h1><?php echo 'Speler 1 heeft gewonnen';?></h1>
        <?php
    } else if ($speler1 == 'schaar' and $speler2 == 'papier') {
        ?>
        <h1><?php echo 'Speler 1 heeft gewonnen';?></h1>
        <?php
    } else if ($speler1 == 'schaar' and $speler2 == 'steen') {
        ?>
        <h1><?php echo 'Speler 2 heeft gewonnen';?></h1>
        <?php
    } else if ($speler2 == 'steen' and $speler1 == 'papier') {
        ?>
        <h1><?php echo 'Speler 2 heeft gewonnen';?></h1>
        <?php
    } else if ($speler2 == 'papier' and $speler1 == 'steen') {
        ?>
        <h1><?php echo 'Speler 2 heeft gewonnen';?></h1>
        <?php
    } else if ($speler2 == 'schaar' and $speler1 == 'papier') {
        ?>
        <h1><?php echo 'Speler 2 heeft gewonnen';?></h1>
        <?php
    } else if ($speler2 == 'schaar' and $speler1 == 'steen') {
        ?>
        <h1><?php echo 'Speler 1 heeft gewonnen';?></h1>
        <?php
    } else {
        ?>
        <h1><?php echo 'Gelijkspel';?></h1>
        <?php
    }
}
?>
    
    </form>

</body>
</html>