<?php
class Book{
    public $title;
    public $isbn;
    public $author;
    public $publisher;
    private $price;

    function Book(){
        
    }
    function __construct($title,$isbn,$author,$publisher,$price){
         
        $this->title=$title;
        $this->isbn=$isbn;
        $this->author=$author;
        $this->publisher=$publisher;
        $this->price=$price;

    }
   
    public function setPrice($price){
        $this->price=$price;
    }

    public function getPrice(){
        return $this->price;
    }

    public function __toString(){
        return "<br>"."Name:".$this->title."<br/>ISBN:".$this->isbn."<br/>Author:".$this->author."<br/>Publisher:".$this->publisher."<br>Price:".$this->price."<br>";
    }

}

$php=new Book("Beginning PHP","343433","Jahidul Islam","Apress",399);

//print_r($php);

$price=400;
$php->setPrice($price);
//echo $php->getPrice();

print_r($php);

/*
$html=new Book();
$html->title="HTML5 pocket Guid";
$html->isbn="383454543";
$html->author="Yasin Mollah";
$html->publisher="Apress";

echo $html;
*/

////print_r($html);
//echo "<br>";
//print_r($php);



// class ProgrammingBook extends Book{


// }

// $java=new ProgrammingBook();

// $java->title="Programming with java";
// $java->isbn="383443";
// $java->author="Shohag";
// $java->publisher="Apress";

// //print_r($java);
// echo $java;







