<?php 

    trait TraitName1{                                   // trait 1
        public function methodName1(){                             
            echo "This is trait method 1. <br>";
        }
    }
    trait TraitName2{                                   // trait 2
        public function methodName2(){
            echo "This is trait method 2. <br>";
        }
    }
      trait TraitName3{                                 // trait 3
        public function methodName3(){
            echo "This is trait method 3. <br>";
        }
    }

    trait margeTrait{                                   // Marge more traits in one.
        use TraitName1, TraitName2, TraitName3;
    }

    class ClassName1{                                   // class 1
        use TraitName1;
    }
    class ClassName2{                                   // class 2 (multiple traits)
        use TraitName2;
    }
    class ClassName3{                                   // class 3
        use TraitName1, TraitName3;
    }
    class ClassName4{                                   // class 4 (marge trait class)
        use margeTrait;
    }
    class ClassName5{                                   // class method piority.
        use TraitName1;
        public function methodName5(){
            echo "This is trait method 5. <br>";
        }
    }                                 


    $obj1 = new ClassName1();                            // Object 1
    $obj1->methodName1();
    echo "<br>";
    $obj2 = new ClassName2();                            // Object 2
    $obj2->methodName2();
    echo "<br>";
    $obj3 = new ClassName3();                            // Object 3
    $obj3->methodName1();
    $obj3->methodName3();
    echo "<br>";
    $obj4 = new ClassName4();                            // Object 4
    $obj4->methodName1();
    $obj4->methodName2();
    $obj4->methodName3();
    echo "<br>";
    $obj5 = new ClassName5();                            // Object 5
    $obj5->methodName1();
    $obj5->methodName5();
?>