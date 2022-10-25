<?php

abstract class Math{
   public function add($a,$b){
      return $a+$b;
   }

   abstract public function sub($a,$b);

}

class MyMath extends Math{

    public function sub($a,$b){
      return $a-$b;
    }

}


$obj=new MyMath();

echo $obj->add(3,3);
echo "<br>";
echo $obj->sub(4,1);

//---Type Hinting---
echo "<br>";
echo process($obj);

function process(MyMath $m){

    return $m->add(2,5);

}
?>