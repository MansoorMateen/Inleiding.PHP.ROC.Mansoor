
<!DOCTYPE html>
<html>
<head>

</head>
<body>

<?php




?>

<form action="resultaatbeasties.php" method="post">

    dier :
    <br><br>
    <input type="checkbox" name="dier[]"
        <?php if (isset($dier) && $dier == "hond") echo "checked";?> value="hond" > Hond
    <br><br>
    <input type="checkbox" name="dier[]"
        <?php if (isset($dier) && $dier == "kat") echo "checked";?> value="kat"> Kat
    <br><br>

    <input type="submit" name="knop" value="verstuur">
</form>







</body>
</html>