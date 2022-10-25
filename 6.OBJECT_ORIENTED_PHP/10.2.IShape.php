 <!------------ interface ------------>

<?php  
                                            
    interface IShape{                     // 'interface' has one or more 'abstrack' function. abstract function a kono body "{}" thaka na.

        public function get_area();
        public function get_perimeter();

    }
 
    //----------- Rectangle------------------

    class Ractangle implements IShape{        // interface k call kora notun class toiri korta "implements" use korta hoy.
        public $width;
        public $height;
        
            function __construct($width, $height){
                $this->width=$width;
                $this->height=$height;
            }
            public function get_area(){
                return $this->width*$this->height;          //rectangle area = (hight * wigth)
            }

            public function get_perimeter(){                //rectangle peremeter = 2*(hight + wight)
                return 2*($this->width+$this->height);
            }
     }

    $rectangle = new Ractangle(2,4);
    echo "Ractangle Area:".$rectangle->get_area().", Perimeter:".$rectangle->get_perimeter();

    echo "<br>";

//---------------circle------------------

    class Circle implements IShape{
        const PI=3.145;
        public $r;
        
        function __construct($r){
            $this->r=$r;
            
        }
        public function get_area(){
            return $this::PI*$this->r*$this->r;     // circle area = PI*r*r
        }

        public function get_perimeter(){
            return 2*$this::PI*$this->r;             // circle peremiter = 2*PI*r
        }
    }

    $circle = new Circle(3);
    echo "Circle Area: " . $circle->get_area() .", Perimeter:". $circle->get_perimeter();

?>