<?php

// class Greeting{                     //Show errors;

//     private $name;
//     public function __construct($name){
//        $this->name = $name;
//            }
//     public function getHello(){
//         echo "Hello ". $this->name . ".";
//     }
//   }
 
//   $greeting = new Greeting();
//   $greeting->getHello(); 

?>


<?php

	class Greeting{                     //without errors;

   private $name = "Guest";
   public function __construct($name = null){
   	if($name){
      $this->name = $name;
    	  }
   	}
   public function getHello(){
   	echo "Hello ". $this->name . ".";
   }
 }

 $greeting = new Greeting();
 $greeting->getHello();

?>