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

        function save(){
            $file=file("student.txt");
            $csv=trim($this->id).",".trim($this->name).",".trim($this->course).",".trim($this->mobile).PHP_EOL;
            file_put_contents("student.txt",$csv,FILE_APPEND);
        }

        public static function display(){
            $file=file("student.txt");
            foreach($file as $student){
                list($id,$name,$course,$mobile)=explode(",",$student);
                //echo $student."<br>";
                echo "<div>";
                echo "<img src='$id.jpg' height='50' width='50'>" , " $id | $name | $course | $mobile";
                echo "</div>";
            }
        }

        public function upload($tmp_name){
            move_uploaded_file($tmp_name,$this->id.".jpg");
        }

    }//end of class

    if(isset($_POST["btnSubmit"])){
        $id=$_POST["txtId"];
        $name=$_POST["txtName"];
        $course=$_POST["txtCourse"];
        $mobile=$_POST["txtMobile"];

        $tmp_name=$_FILES["file"]["tmp_name"];

        $s1=new Student($id,$name,$course,$mobile);
        $s1->save();
        $s1->upload($tmp_name);
    }


?>

<form action="#" method="post" enctype="multipart/form-data">
    <div>ID<br>
        <input type="text" name="txtId">
    </div>
    <div>Name<br>
        <input type="text" name="txtName">
    </div>
    <div>Course<br>
        <input type="text" name="txtCourse">
    </div>
    <div>Mobile<br>
        <input type="text" name="txtMobile">
    </div>
    <div>Photo<br>
        <input type="file" name="file">
    </div>
    <div>
        <input type="submit" name="btnSubmit">
    </div>
</form>

<?php
    Student::display();
?>