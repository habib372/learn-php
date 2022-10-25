example 1:<br>
<?php                        //example 1
    trait message1 {
        public function msg1() {
            echo "OOP is fun! ";
        }
    }
    trait message2 {
        public function msg2() {
            echo "OOP reduces code duplication!";
        }
    }
    
    class Welcome {
        use message1;
    }
    class Welcome2 {
        use message1, message2;
    }

    $obj = new Welcome();
    $obj->msg1();
    echo "<br>";

    $obj2 = new Welcome2();
    $obj2->msg1();
    $obj2->msg2();
?>


<br><br>example 2:<br>
<?php 

    trait test{
        public function hello(){
            echo "This is trait example<br>";
        }
    }
    class A{
        use test;
    }
    class B{
        use test;
    }

    $obj = new A();
    $obj->hello();
    $obj1 = new B();
    $obj1->hello();
?>


<br><br>example 3:<br>
