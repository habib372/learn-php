<?php 
    interface IShape{
        public function get_area();
        public function get_perimeter();
   

    }
    class Ractangle implements IShape{
            public $width;
            public $height;
                public function __construct($width, $height){
                    $this->width=$width;
                    $this->height=$height;
                }
                public function get_area(){
                    return $this->width*$this->height;
                }    
                public function get_perimeter(){
                    return 2*($this->width+$this->height);
                }

            }
    
  class Circle implements IShape{
      const PI=3.145;
      public $r;

      function __construct($r){
          $this->r=$r;
      }
      public function get_area(){
          return $this::PI*$this->r*$this->r;
      }
      public function get_perimeter(){
        return 2*($this::PI*$this->r);
    }
  }


  $r1=new Ractangle(2,4);
  echo "area: " .$r1->get_area(). " perimeter: " .$r1->get_perimeter();
echo "<br>";
  $c1=new Circle(3);
  echo "area: " .$c1->get_area(). " perimeter: " .$c1->get_perimeter();

?>