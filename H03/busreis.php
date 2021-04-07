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
    $leeftijd = 13;
    $bedrag = 10;
    if ($leeftijd> 65 or $leeftijd<12){
        $bedrag = $bedrag * 0.5;
    }
    if ($leeftijd<3){
        $bedrag = 0;
    }

    echo $bedrag
?>

</body>
</html>
