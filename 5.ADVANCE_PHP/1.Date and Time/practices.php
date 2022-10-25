<?php
    echo Date("d,F")."<br>";
    echo Date("m")."<br>";
    echo Date("Y")."<br>";
    echo Date("l")."<br>";
    echo Date("D")."<br>";
    echo Date("F")."<br>";
    echo Date("M")."<br>";
    echo Date("y")."<br>";
    echo Date("j")."<br>";
    echo Date("n")."<br>";
    echo Date("r")."<br>";
    echo Date("nS")."<br>";
    echo Date("t")."<br>";
    echo Date("T")."<br>";
    echo Date("z")."<br><br>";

    date_default_timezone_set("Asia/Dhaka");
    echo Date("h")."<br>";
    echo Date("i")."<br>";
    echo Date("s")."<br>";
    echo Date("a")."<br>";
    echo Date("A")."<br>";
    echo Date("H")."<br>";
    echo Date("g")."<br>";
    echo Date("G")."<br>";
    echo Date("T")."<br>";
    echo Date("W")."<br>";
    echo Date("O")."<br>";
    echo Date("")."<br>";

    $dayay = mktime(11, 99, 54, 65, 12, 2014);
    echo "The new makeing time is:" . date("Y-m-d h:i:sa", $dayay);

?>

