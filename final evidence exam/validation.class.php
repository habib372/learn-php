<?php

class Student{

    private $name;
    private $email;

    function __construct($name,$email){
        $this->name=$name;
        $this->email=$email;
    }

    public function save(){
        $file=file("exam.txt");
        $csv=trim($this->name).",".trim($this->email).PHP_EOL;
        file_put_contents("exam.txt",$csv,FILE_APPEND);
    }

    public static function display(){
        $file=file("exam.txt");

        foreach($file as $student){
            list($name,$email)=explode(",",$student);
            if($name!=""){
                echo "<div>";
                    echo "$name | $email";
                echo "<div>";

            
            }
        }
    }

}

?>