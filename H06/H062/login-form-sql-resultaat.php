<?php
$host = 'localhost';
$port = '3306';
$user = 'mansoorkhanprojecten_nl_loginformphp';
$pass = 'DVjNMCFQjzU4';
$db = "mansoorkhanprojecten_nl_loginformphp";




try {
$conn = new PDO('mysql:host='.$host.';dbname='.$db.';port='.$port , $user , $pass);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// echo "connected sucessfully";
} catch (PDOException $e){
echo "connection failed: " . $e->getMessage();
}

$query = "SELECT * FROM correct";
$stmt= $conn->prepare($query) or die("Error 1.");
$stmt ->execute() or die("Error 2.");
$row = $stmt->fetch();


    $correctLogin = array($row['correct_email']=>$row['correct_wachtwoord']);

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
    } else{ echo "Sorry niet welkom";
        }
}
