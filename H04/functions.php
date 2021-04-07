<?php
cNaarF(10);

doorDrieDelen(4);

omgekeert("waarom");

    function cNaarF($a){
      $b=  $a * 9/5 + 32;
      echo "het temperatuur is " .$b." fahrenheit<br>";
    }



    function doorDrieDelen($c){
        $deelbaar = false;
        if ($c %3 == 0){$deelbaar = true;}


            return var_dump($deelbaar) ;
        echo "<br>";


    };

    function omgekeert($e){

        $f = "".strrev($e)." ";
        echo $f;
    }