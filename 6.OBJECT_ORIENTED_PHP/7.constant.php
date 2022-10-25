
<?php               //exmp: 1

    class Goodbye1{
        const MESSAGE = "1. Thank you for visit w3school.com !";
    }
    echo Goodbye1::MESSAGE;

?>


<br><br>


<?php               //exmp: 2   
                         
    class Goodbye2{
        const GET_MESSAGE = "2. Welcome to habibsoft.com !<br>";
        const BYE_MESSAGE = "3. Thank you for visit habibsoft.com !";

        public function byebye(){
            echo self::BYE_MESSAGE;
        }
    }
    echo Goodbye2::GET_MESSAGE;
    Goodbye2::byebye();
    // $output = new Goodbye2();
    // $output->byebye();
   
 
?>