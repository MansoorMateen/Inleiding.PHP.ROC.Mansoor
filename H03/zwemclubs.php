<?php
?>
<!DOCTYPE html>
<html>
<head>
<style>
    table,td{
        border: black solid 1px;
        border-collapse: collapse;
    }
</style>
</head>
<body>

<?php
$clubs = array("De spartelkuikens","De waterbuffels",
    "Plonsmderin","Bommetje");
$zwemmers = array(25,32,11,23);
echo "<table>";
echo "<tr>";
$i=0;
foreach ($clubs as $club){

    echo "<td>".$club."</td><td>" . $zwemmers[$i] . "</td>";

    $floor = floor($zwemmers[$i]/5);
    for ($j=0;$j<$floor;$j++) {
        echo "<td><img style='width: 50px;height: 50px;'  src='../img/zwemmer.jfif'></td>";
    }
   echo "</tr><tr>";
    $i++;
}
?>
</body>
</html>

