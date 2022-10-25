<?php

// Syntex: is_array ( mixed $var ) : bool

$array = array('this', 'is', 'an array');

echo is_array($array) ? 'Array' : 'not an Array';
echo "\n";

$noArray = 'this is a string';

echo is_array($noArray) ? 'Array' : 'not an Array';

?>