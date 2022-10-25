<?php

    class Student{

        private  $id;
        private  $name;
        private  $roll; 
        private $label;
        private $section;
    }
    function __construct($id,$name,$roll,$label,$section){
        $this->id=$id;
        $this->name=$name;
        $this->roll=$roll;
        $this->label=$label;
        $this->section=$section;
    }
     function __toString(){    

        return "ID:".$this->id."<br>".$this->name."<br>".$this->roll."<br>".$this->label."<br>".$this->section;
    }

    $Student1=new Student("12","Habib","12546","University","A");
    echo $Student1;



