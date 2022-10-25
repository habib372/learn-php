<?php

    class Fruit {
    // Properties
    public $name =25;
    public $price= 30;

    function total() {
        return $this->name + $this->price;
    }
    }

    $apple = new Fruit();
    echo "Total: ". $apple->total();

?>