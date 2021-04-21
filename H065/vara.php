<?php
session_start();
$_SESSION['user'] = 'jan';
echo $_SESSION['user'];
?>
<p><a href="varb.php">naar varb</a></p>