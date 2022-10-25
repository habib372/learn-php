<?php

    // $value1="Hello";

    // $value2=& $value1;  //last value tai niba  &= same as pipe

    // $value2= "goodbye";

    // echo $value1;

    // $value2="world";

    // echo $value1;



    function process($width,$height,& $p){
        $p=2*($width+$height);
        $area1= $width*$height;
        return $area1;
    }

   $area1= process(34,12, $p);
    echo "<br>";
    echo $area1;
    echo "<br>";
    echo $p;