<?php
?>



<!DOCTYPE html>
<html>
<head>
<title></title>
<style>
    .rood{
        border: red solid 5px;
    }
    .groen{
        border: green solid 5px;
    }
</style>
</head>
<body>

<?php

for ($i =1; $i<=10;$i++) {
    if ($i % 2 ==0){
        $class = "class= 'rood'";
    } else{
        $class = "class= 'groen'";
    }
    echo "<img ".$class."src='../img/hondPHP/hond".$i.".jfif'>";
}

?>

</body>
</html>
