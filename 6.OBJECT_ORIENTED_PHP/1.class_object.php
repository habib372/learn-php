<?php 

    class Computer{
        public $monitor;
        public $mouse;
        public $processor;
        private $price;

        public function setPrice($price){
            $this->price=$price;
        }
        public function getPrice(){
            return $this->price;
        }
        public function __toString(){

            return $this->monitor."<br>".$this->mouse."<br>".$this->processor."<br>".$this->price;
        }
        
    }

$HP=new Computer();

$HP->monitor="samsung";
$HP->mouse="a4Tec";
$HP->processor="intel";
$HP->setPrice(255);


// echo $HP->getPrice();            //only price output.
echo $HP."<br>";

