<?php
    class Fruit {
        public $name;
        public $color;

        function __construct($name, $color) {
            $this->name = $name;
            $this->color = $color;
            echo "The fruit is {$this->name} and the color is {$this->color}";
        }
        function __destruct() {
            // echo "The fruit is {$this->name} and the color is {$this->color}."; or
            unset($this->name);
            unset($this->color);
        }
    }

$apple = new Fruit("Apple", "red");

?>