<!DOCTYPE html>
<html>
<head>

</head>
<body>

<?php

$emailErr = $wachtwoordErr = "";
$email = $wachtwoord = "";


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

<form action="login-Form-Resultaat.php" method="post">
    Email <input type="email" name="emailadres" required>
    <br><br>
    Wachtwoord <input  type="password" name="wachtwoord" required>
    <br><br>
    <input type="submit" name="knop" value="verstuur">
</form>







</body>
</html>