
<?php

    class Fruits {              // overridding inheritance
        public $name;
        public $color;

        public function __construct($name, $color) {
            $this->name = $name;
            $this->color = $color; 
        }
        public function intro() {
            echo "The fruit is {$this->name} and the color is {$this->color}."; 
        }
        }

        class Strawberrys extends Fruits {
        public $weight;
        public function __construct($name, $color, $weight) {
            $this->name = $name;
            $this->color = $color;
            $this->weight = $weight; 
        }
        public function intro() {
            echo "The fruit is {$this->name}, the color is {$this->color}, and the weight is {$this->weight} gram."; 
        }
    }

    $strawberry = new Strawberrys("Strawberry", "red", 40);
    $strawberry->intro();
?>

<br><br>

    
 <?php
    // class Fruit {
    //   final public function intro() {               // final keyword for protected class and method.

    //   }
    // }

    // class Strawberry extends Fruit {
    //   // will result in error
    //   public function intro() {         // this is an error. we can't overridding final methods.
    //   }
    // }
?>
 


