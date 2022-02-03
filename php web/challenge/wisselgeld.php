<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="text/javascript">
function MyHead() {
var list = new Array();
list[0] = "500.0Euro<img src='fivehonderd.jpg'>";
list[1] = "200.0Euro<img src='tweehonderd.jpg'>";
list[2] = "100.0Euro<img src='honderd.jpg'>";
list[3] = "50.0Euro<img src='fiveeuro.jpg'>";
list[4] = "20.0Euro<img src='twintig.jpg'>";
list[5] = "10.0Euro<img src='tien.jpg'>";
list[6] = "0.05Euro<img src='ficent.jpg'>";
list[7] = "0.02Euro<img src='tweeecent.jpg'>";
list[8] = "0.01Euro<img src='cent.jpg'>";
list[9] = "0.5Euro<img src='fiftigcent.jpg'>";
list[10] = "0.2Euro<img src='twintigcent.jpg'>";
list[11] = "0.1Euro<img src='tiencent.jpg'>";
list[12] = "5.0Euro<img src='fiveu.jpg'>";
list[13] = "2.0Euro<img src='tweeuro.jpg'>";
list[14] = "1.0Euro<img src='euro.jpg'>";
var j, k, find, item, page, repl;
for (var i=0; i<list.length; i++) {
item = list[i].split("Euro");
find = item[0];
repl = item[1];
page = document.body.innerHTML;
while (page.indexOf(find) >= 0) {
var j = page.indexOf(find);
var k = find.length;
page = page.substr(0,j) + repl + page.substr(j+k);
document.body.innerHTML = page;
}
}
}
</script>
</head>
<body onload="MyHead()">
<?php
echo "Hoeveel geld wil je wisselen";
echo "<form action='wisselgeld.php' method='POST'>
<input type='text' name='geldz'><br>
<button type=submit name='wisselen'>wisselen</button>
</form>";

if (isset($_POST['wisselen'])) {
    $ewa = $_POST['geldz'];
    $getal = $ewa;
    $wisselgeld = array('500.0', '200.0', '100.0', '50.0', '20.0', '10.0' , '5.0', '2.0', '1.0', '0.5', '0.2', '0.1', '0.05', '0.02', '0.01');
    foreach ($wisselgeld as $value) {
        $rest = floor($getal / $value);
        if ($rest >= 1) {
            $getal = $getal - ($value * $rest);
            if ($value >= 1) {
                echo "$rest x $value \n";
            } else {
                echo "$rest x $value \n";
            }
        }
    }
}
?>  
</body>
</html>
