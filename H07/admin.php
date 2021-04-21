<?php
session_start();
if (isset($_SESSION['user'])){
    $_SESSION['fout'] = 0;

    if ($_SESSION['user']['rol']=='gebruiker'){
        $_SESSION['rechten']=1;
        $_SESSION['fout']=0;

        header('location: login-cookies.php');




    }

    echo "welkom ".$_SESSION['user']['naam'].' Met de rol '.$_SESSION['user']['rol']." bij de admin page";


} else {
    $_SESSION['fout']=1;
    header('location: login-cookies.php');}


?>


<p><a href="login-cookies.php?loguit"> loguit</a></p>
