<?php

    //Xast Operator:

    /*
        (array)
        (bool)or (boolean)
        (int) or (integer)
        (object)
        (real) or (double) or (float)
        (string)
    */

    $n=2;
    $str="345";
    $num=(int)$str;
    echo gettype($num)."<br>";

    $price=34.20;
    $newsprice=(array)$price;
    echo $newsprice[0]."<br>";

    $brand="Toyota";
    $obj=(object)$brand;
    echo $obj->scalar;               //scalar=build in function..


