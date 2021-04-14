<?php

 $correctLogin = array("piet@worldonline.nl"=>"doetje123",
    "klaas@carpets.nl"=>"snoepje777", "truushendriks@wegweg.nl"=>"arkiearkie201");


if (empty($_POST["emailadres"])){
    $emailErr = "email is verplict";
}   else{
    $email =$_POST["emailadres"];
}
if (empty($_POST["wachtwoord"])){
    $wachtwoordErr = "wachtwoord is verplict";
}   else{
    $wachtwoord = $_POST["wachtwoord"];
}



if (isset($_POST['knop'])){
    emailcheck($email, $wachtwoord);

}

function emailcheck($a,$b){
    global $correctLogin;
    $juist = false;
    foreach ($correctLogin as $correctEmail => $correctWachtwoord){
        if ($a == $correctEmail & $b == $correctWachtwoord){
            $juist = true;
            break;
        }

    }
    if ($juist == true){
        echo "Welkom " .$a;
    } else{ echo "Sorry niet welkom";}
}
