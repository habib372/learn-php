<?php

//syntex: is_bool ( mixed $var ) : bool

$a = false;
$b = 0;
  
if (is_bool($a) === true) {
    echo "Yes, this is a boolean <br>";
}

if (is_bool($b) === false) {
    echo "No, this is not a boolean <br>";
}

echo is_bool($a)? "boolean": "this is not a boolean ";
echo "<br>";
echo is_bool($b) ? "boolean": "this is not a boolean";

?>
