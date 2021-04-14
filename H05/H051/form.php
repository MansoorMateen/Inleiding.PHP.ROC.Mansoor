<!DOCTYPE html>
<html>
<head>

</head>
<body>

<?php

$naamErr = $adresErr = $emailErr = $wachtwoordErr = "";
$naam = $adres = $email = $wachtwoord = "";

if (empty($_POST["inlognaam"])){
    $naamErr = "inlognaam is nodig";
}   else{
        $naam = $_POST["inlognaam"];
        }
if (empty($_POST["adres"])){
    $adresErr = "adres is verplict";
}   else{
        $adres =$_POST["adres"];
        }
if (empty($_POST["emailadres"])){
    $emailErr = "email is verplict";
}   else{
    $email =$_POST["emailadres"];
}
if (empty($_POST["wachtwoord"])){
    $adresErr = "wachtwoord is verplict";
}   else{
    $wachtwoord = $_POST["wachtwoord"];
}

?>

<form action="resultaat.php" method="post">
    Inlognaam <input type="text" name="inlognaam" required>
    <br><br>
    Adres <input type="text" name="adres" required>
    <br><br>
    Email <input type="email" name="emailadres" required>
    <br><br>
    Wachtwoord <input  type="password" name="wachtwoord" required>
    <br><br>
    <input type="submit" name="knop" value="verstuur">
</form>







</body>
</html>