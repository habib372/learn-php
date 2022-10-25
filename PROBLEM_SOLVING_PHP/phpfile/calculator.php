<?php 

    class Calculator{
       
        function add($a, $b){
            echo "Summation is = ".($a+$b)."<br/>";
        }
        function sub($a, $b){
            echo "Substracton is = ".($a-$b)."<br/>";
        }
        function mul($a, $b){
            echo "Multiplicaton is = ".($a*$b)."<br/>";
        }
        function div($a, $b){
            echo "Division is = ".($a/$b)."<br/>";
        }
    }

?>