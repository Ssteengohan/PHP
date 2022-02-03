<?php
/* vinTage's simple php hangman game*/
session_start();

//reset de game
if(isset($_POST['reset']))
{
    session_destroy();
    header("location: ".$_SERVER['REQUEST_URI']);
    exit;
}

//array met mogelijke woorden
$woordenarray = array("kluivers ", " stuivers", " tuinkers", "suikeren", "uitdelen", "rituelen", "uitkeren", " studeren", "tuinwerk ", " strekken", "sterkste ", " stekkers", "struikel ", "biertjes ", " frietjes", "fietsers ", "flitsers  ", "truffels", "sluiters ", "filmster ", "kerstmis ", "marktjes", "melkkaas", "kaasvork ", "spaarpot", "toppaard ", " staarten ", " taartjes", "praatjes ", " plantjes ", " prentjes", "leesboek", "vleeskoe", "vlagorde ", " volgorde", "verdoven ", " overdoen", " noodweer", " bewonder", " bewoners");

//we kiezen een random woord
if(!isset($_SESSION['woord']))
{
    $rand= rand(0,count($woordenarray)-1);
    $woord=$woordenarray[$rand];
    $_SESSION["woord"] = strtoupper(trim($woord));
}

$form = true;
//er wordt gegokt
if(isset($_POST['submit']) && isset($_POST['checkbox']))
{
    if (stripos($_SESSION['woord'], $_POST['checkbox'][0]) === false)
    {
        array_push($_SESSION['foute_letters'], $_POST['checkbox'][0]); //checkbox [0], omdat we er maar een willen laten posten (de eerste in rij)
    }
    else
    {
        array_push($_SESSION['juiste_letters'], $_POST['checkbox'][0]); 
    }
}

//houden bij wat er geraden wordt
if(!isset($_SESSION['foute_letters']))
{
    $_SESSION['foute_letters'] = array();
}
if(!isset($_SESSION['juiste_letters']))
{
    $_SESSION['juiste_letters'] = array();
}



//het geraden resiltaat tonen
$show = '';
for($i = 0; $i < strlen($_SESSION['woord']); $i++)
{
    $show .= in_array(substr($_SESSION['woord'], $i, 1), $_SESSION['juiste_letters']) ? substr($_SESSION['woord'], $i, 1) : "*";
}

echo $show; //resultaat van wat je probeerde

//spel is afgelopen
if(count($_SESSION['foute_letters']) >= 8)
{
    echo '<h1 style="text-decoration:blink">Game over</h1> Het woord was '.$_SESSION['woord'].'<br />Het spel wordt binnen 5 seconden opnieuw gestart';
    $form = false;
    session_destroy();
    header("Refresh: 5; URL=".$_SERVER['REQUEST_URI']);
    exit;
}
//je hebt het geraden
if($show == $_SESSION['woord'] && $form == true)
{
    echo '<h1 style="text-decoration:blink">! Gefeliciteerd !</h1>Spel wordt binnen 5 secs opnieuw gestart';
    $form = false;
    session_destroy();
    header("Refresh: 5; URL=".$_SERVER['REQUEST_URI']);
    exit;
}
?>



<form action="<?php echo $_SERVER['REQUEST_URI']?>" method="post">
<?php
//als het volledige formulier getoond moet worden, toon de checkboxen en de submitbtn
if($form == true)
{
	$letters = range("A","Z"); //array met ons alfabet (doorlopen om de checkboxes te tonen
	foreach($letters as $letter)
	{
		if(!in_array($letter,$_SESSION['juiste_letters']) && !in_array($letter, $_SESSION['foute_letters']))
		{
		?>
    <label for="<?php echo $letter?>"><?php echo $letter?></label><input name="checkbox[]" id="<?php echo $letter?>" type="checkbox" value="<?php echo $letter?>" />
		<?php
		}
	}
?>
    <input name="submit" type="submit" value="submit" />
<?php
}
?>
    <input name="reset" type="submit" value="reset" />
</form>

<?php
 //geen zin @ plaatjes maken.. (*nutteloze* code dus)
$f[8] = '
    _____
    |/    |
    |     0
    |     /|\
    |      /\
    |
      ______
';
$f[7] = '
    _____
    |/    |
    |     0
    |     /|\
    | 
    |
      ______
';
$f[6] = '
    _____
    |/    |
    |     0
    | 
    |  
    |
      ______
';
$f[5] = '
    _____
    |/    |
    | 
    |
    |
    |
      ______
';
$f[4]= '
    _____
    |/ 
    |
    |
    |
    |
      ______
';
$f[3]= '
    _____
    |
    |
    |
    |
    |
      ______
';
$f[2]= '

    |
    |
    |
    |
    |
      ______
';
$f[1]= '






      ______
';
$f[0]='';

echo '<pre>'.$f[count($_SESSION['foute_letters'])].'</pre>';
//echo $_SESSION['woord'];

