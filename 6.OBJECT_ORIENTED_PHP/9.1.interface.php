<?php

    interface InterfaceName {
        public function someMethod1(): string;
        public function someMethod2($name, $color);
        public function someMethod3();
    }
    class Fruit implements InterfaceName{
      
        public function someMethod1():string {
            return "Hello";
        }

        public function someMethod2($name, $color){
          $this->name = $name;
          $this->color =$color;
          return $this;
        }

        public function someMethod3(){
            echo ". This is my favourite fruit. This name is '".$this->name."' and color is '" .$this->color."'.";
        }
    }
    $output = new Fruit();
    $output->someMethod1();
    echo $output->someMethod1();
    $output->someMethod2("Apple","Red");
    $output->someMethod3();
?>