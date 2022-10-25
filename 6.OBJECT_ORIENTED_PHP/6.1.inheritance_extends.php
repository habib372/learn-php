<?php 

    class Computer{
        public $monitor;
        public $mouse;
        public $keyboard;
        public $processor;
        private $price;

        public function setPrice($price){
            $this->price=$price;
        }
        // public function getPrice(){
        //     return $this->price;
        // }
        public function __toString(){

            return $this->monitor."<br>".$this->mouse."<br>".$this->keyboard."<br>".$this->processor."<br>".$this->price;
        }
        
    }

    class Programming extends Computer{    
         
    }

    $java=new Programming();

        $java->monitor="Del";
        $java->mouse="HP";
        $java->keyboard="A4Tech"; 
        $java->processor="Tosiba";
        $java->setPrice(34);

    //echo $java->getPrice(); 

    //print_r($java);         //array  output korta

    echo $java;
