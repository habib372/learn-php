<?php
    //printf("My name is Habib <br>");

    $name="habib";
    $age=30;

    //printf("My name is %s,and age is %d",$name,$age);           // %s=string, %d=decimal

    $output=printf("My name is %s,and age is %d",$name, $age);

    $str=$output. ". Live in Dhaka";
    echo $str;


?>