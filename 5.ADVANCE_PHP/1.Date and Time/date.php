<?php

date_default_timezone_set("Asia/Dhaka");
    echo date(" d D /M m/ Y");           // example output:  03 Sat /Oct 10/ 2020
    echo "<br>";
    echo date(" d  / m/ Y");             // example output:  03 / 10/ 2020
    echo "<br>";
    echo date("h:i:s A");                // example output:  01:41:58 PM  
    echo "<br>";
    echo strftime("%A / %B ");           // example output:  Saturday / October
    echo "<br>";
    echo date("l,%a/ Y ");             // example output:   Saturday, October 3, 2020

 $dayay = mktime(11, 14, 54, 8, 12, 2014);
 echo "তৈরিকৃত তারিখটি হলো ". date("Y-m-d h:i:sa", $dayay);



?>