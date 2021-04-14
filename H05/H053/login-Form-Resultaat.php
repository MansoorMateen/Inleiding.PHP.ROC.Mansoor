<?php



$juist = false;
emailcheck();

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

function emailcheck($email, $wachtwoord){
    $correctLogin = array("piet@worldonline.nl"=>"doetje123",
        "klaas@carpets.nl"=>"snoepje777", "truushendriks@wegweg.nl"=>"arkiearkie201");
    foreach ($correctLogin as $correctEmail => $correctWachtwoord){
        if ($email == $correctEmail & $wachtwoord == $correctWachtwoord){
            $juist = true;

            if ($juist == true){
                echo "Welkom " .$email;
                return boolval($juist);
                break;
            } else{

                echo "Sorry niet welkom";
                break;}
        }

    }

}




