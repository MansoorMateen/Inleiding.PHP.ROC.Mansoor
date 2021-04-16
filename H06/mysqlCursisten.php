<!DOCTYPE html>
<html>
<head>
<style>

    table,td{
        border: black solid 1px;
        border-collapse: collapse;
        padding: 10px;
    }
</style>
</head>
<body>
<table>
<?php
$host = 'localhost';
$port = '3306';
$user = 'root';
$pass = '';
$db = "school";


try {
    $conn = new PDO('mysql:host='.$host.';dbname='.$db.';port='.$port , $user , $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   // echo "connected sucessfully";
} catch (PDOException $e){
    echo "connection failed: " . $e->getMessage();
}

$query = "SELECT * FROM cursist";
$stmt= $conn->prepare($query) or die("Error 1.");
$stmt ->execute() or die("Error 2.");

while ($row = $stmt->fetch()){
    echo '<tr>';

    echo '<td>'.$row['cursistnr'].'</td>';
    echo '<td>'.$row['naam'].'</td>';
    echo '<td>'.$row['roepnaam'].'</td>';
    echo '<td>'.$row['straat'].'</td>';
    echo '<td>'.$row['postcode'].'</td>';
    echo '<td>'.$row['plaats'].'</td>';
    echo '<td>'.$row['geslacht'].'</td>';
    echo '<td>'.$row['geb_datum'].'</td>';

    echo '</tr>';

};
?>
</table>
</body>
</html>