<?php
$katten = array("kat1.jfif","kat2.jfif","kat3.jfif","kat4.jfif"
,"kat5.jfif","kat6.jfif","kat7.jfif","kat8.jfif","kat9.jfif","kat10.jfif");
foreach ($katten as $kat){
    echo "<img src='katPHP/".$kat."'>";
}

for ($i =1; $i<=10;$i++) {
    echo "<img src='hondPHP/hond".$i.".jfif'>";
}


?>
