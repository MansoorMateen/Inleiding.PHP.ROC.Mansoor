<?php
session_start();

if (isset($_SESSION['user'])){
 $_SESSION['fout'] = 0;

 echo "welkom ".$_SESSION['user']['naam'].' Met de rol '.$_SESSION['user']['rol']."<br>";


}




if (isset($_SESSION['rechten']) && isset($_SESSION['fout'])) {
    echo "JE HEBT DE RECHTEN NIET OM DE ADMIN PAGE TE BEKIJKEN";
} else{
    echo "VERKEERDE NAAM EN/OF WACHTWOORD";
}

    if (isset($_GET['loguit'])){
$_SESSION =array();
$_SESSION['fout']= NULL;
    session_destroy();


}
$nameErr = $wachtwoordErr = "";
$name = $wachtwoord = "";


if (empty($_POST["name"])){
    $nameErr = "naam is verplict";
}   else{
    $name =$_POST["name"];
}
if (empty($_POST["wachtwoord"])){
    $wachtwoordErr = "wachtwoord is verplict";
}   else{
    $wachtwoord = $_POST["wachtwoord"];
}
$host = 'localhost';
$port = '3306';
$user = 'root';
$pass = '';
$db = "school";





try {
    $conn = new PDO('mysql:host='.$host.';dbname='.$db.';port='.$port , $user , $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e){
    echo "connection failed: " . $e->getMessage();
}

$query = "SELECT * FROM users";
$result = $conn->query($query);









function naamcheck($a,$b){
    global $result;
    $juist = false;
    global $userInfo;
    foreach ($result as $row){
        if ($a == $row['naam'] & $b == $row['wachtwoord']){
            $juist = true;
            $userInfo = $row;
        }

    }
    if ($juist == true){
        echo "Welkom " .$_SESSION['user']['naam'];
        $_SESSION['user'] = $userInfo;
        header('location: main-website.php');
    } else{ header('location: login-cookies.php');
    }
}


?>
<!DOCTYPE html>
<html>
<head>

</head>
<body>





<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    naam <input type="text" name="name" required>
    <br><br>
    Wachtwoord <input  type="password" name="wachtwoord" required>
    <br><br>
    <input type="submit" name="knop" value="verstuur">
</form>

</body>
</html>

<?php



if (isset($_POST['knop'])) {
    naamcheck($name, $wachtwoord);
}

?>