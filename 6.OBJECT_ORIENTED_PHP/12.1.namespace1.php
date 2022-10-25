<?php
    include "12.2.namespace2.php";
    include "12.3.namespace3.php";

    $obj = new page2\A();    // class
    $obj->test();
    $obj1 = new page3\A();
    $obj1->test();

    // echo page2\test();  // only function
    // echo test();
?>