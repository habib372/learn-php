<?php
$a=3;
$b="4";
$c=$a+$b;
$d = (object)$b;

echo $c;
?>

<br><br>

<?php
    $var1=100;
    $var2=(boolean)$var1;
    $var3=(string)$var1;
    $var4=(array)$var1;
    $var5=(object)$var1;
    var_dump($var2, $var3, $var4, $var5);
?>