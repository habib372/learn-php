<?php

class Student{

    private $id;
    private $name;
    private $course;
    private $mobile;

    function __construct($id,$name,$course,$mobile){
        $this->id=$id;
        $this->name=$name;
        $this->course=$course;
        $this->mobile=$mobile;
    }

    public function save(){

          $file=file("student.txt");
          $csv=trim($this->id).",".trim($this->name).",".trim($this->course).",".trim($this->mobile).PHP_EOL;
          file_put_contents("student.txt",$csv,FILE_APPEND);         

    }
    
    public static function display(){
        $file=file("student.txt");

        foreach($file as $student){
           
            list($id,$name,$course,$mobile)=explode(",",$student);    
            if($name!=""){       
                echo "<div>";        
                echo "<img src='$id.jpg' width='50' />" , " $id | $name | $course | $mobile";         
                echo "</div>";

                echo "<form action='#' method='post' onSubmit='return confirm(\"Are you sure?\")'>";
                echo "<input type='hidden' name='txtId' value='$id' />";
                echo "<button type='submit' class='btn btn-danger btn-sm' name='btnDel'>Delete</button>";
               echo "</form>";
            }
                  
        }

    }

    public function upload($file){
       
        $valid_types=["image/jpeg","image/png","image/gif"];
        $valid_size=100;
        $success=false;

        if(in_array($file["type"],$valid_types)){           

            if(($file["size"]/1000)<=$valid_size){
              move_uploaded_file($file["tmp_name"],$this->id.".jpg");
              $success=true;
            }else{
              echo "Size must within 100kb";
            }

        }else{
            echo "Invalid file type";
        }
        return $success;
    }
    
    public static function delete($id){
        $file=file("student.txt");      
        $new_list=array();
  
        foreach($file as $student){
            list($_id)=explode(",",$student);
            if($id!=$_id){               
               array_push($new_list,trim($student));
            }
        }
  
        $str=implode(PHP_EOL,$new_list);
        file_put_contents("student.txt",$str.PHP_EOL);
    }
    
}//end class

