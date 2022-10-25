<?php
        class book{
            public $title;
            public $isbn;
            public $author;
            public $publisher;
            public $price;

            public function __toString(){

                return $this->title."<br/>".$this->isbn."<br/>".$this->author."<br/>".$this->publisher."<br/>".$this->price;
            }
            

            public function __Construct($title,$isbn,$author,$publisher,$price){

                    $this->title=$title;
                    $this->isbn=$isbn;
                    $this->author=$author;
                    $this->publisher=$publisher;
                    $this->price=$price;
            }
               
        }
        $php=new book("programing","isbn","sulaman","sulaman prokasony",1200);
        echo $php;