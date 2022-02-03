<?php 
echo "<h1>Form registratie</h1>";
if (isset($_POST["sub"])) {
    $name = $_POST["username"];
    echo "Jouw username is $name";
    $email = $_POST["email"];
    echo "<h1>Email Adress '$email' is correct</h1>";
    $nummer = $_POST["age"];
    echo "Jouw age is $nummer";
}
?>