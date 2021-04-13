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


$veilig = array("inlognaam"=>$naam,"adres"=>$adres,"email"=>$email);
$onveilig = array($naam,$adres,$email,$wachtwoord);
$err = array("errnaam"=>$naamErr ,"erradres"=> $adresErr , "erremail"=>$emailErr ,"errwachtwoord"=>$wachtwoordErr);


print_r($veilig);
print_r($err);


