<?php

    $datapush=array("Habib","Tmim","Sakib");    
    array_push($datapush,"Robi","Rahim");       //array ta data push kora
    print_r($datapush);
    echo "<br><br>";
   

    $array=array("Habib","Tmim","Sakib","Robi","Rahim");
    $pop=array_pop($array);
    print_r ($pop);
    echo "<br><br>";
    
    $array=array("Habib","Tmim","Sakib","Robi","Rahim");    
    $shift=array_shift($array);
    print_r ($shift);
    echo "<br>";

    
    $array=array("Habib","Tmim","Sakib","Robi","Rahim");    
    array_unshift($array,"sabbir","Shahin");
    print_r ($array);
    echo "<br>";
   