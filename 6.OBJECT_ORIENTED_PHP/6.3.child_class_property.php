<?php
 class Greeting{

   private $name;
   private $age;
   public function __construct($name,$age){
      $this->name = $name;
      $this->age = $age;
    	  }
   public function getHello(){
   	echo "Hello ". $this->name .". ". "Your age is".$this->age . ". " ;
   }
 }

 class Hello extends Greeting{
	 private $msg = "How's your day!";

	 public function welcomeMsg(){
		 echo $this->getHello() . $this->msg;
	 }
 }

 $hello = new Hello("Tamjid", 35);
 $hello->welcomeMsg();

?>