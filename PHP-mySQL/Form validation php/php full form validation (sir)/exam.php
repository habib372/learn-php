<?php
  require_once("student.class.php");
//Action Function Call
if(isset($_POST["btnSave"])){
    
    $id=$_POST["txtId"];
    $name=$_POST["txtName"];
    $course=$_POST["txtCourse"];
    $mobile=$_POST["txtMobile"];

    $errors=[];
    
    if(!preg_match("/^[0-9]{2,}$/",$id)){
        $errors["id"]="Invalid Id";
    }

    if(!preg_match("/^[a-zA-Z]{3,}$/",$name)){
        $errors["name"]="Invalid Name";
    }

    if(!preg_match("/^[a-zA-Z ]+$/",$course)){
        $errors["course"]="Invalid Course";
    }

    if(!preg_match("/^[0-9]{10,}$/",$mobile)){
        $errors["mobile"]="Invalid Mobile";
    }


    if(count($errors)==0){
           
        $s1=new Student($id,$name,$course,$mobile);
        $success=$s1->upload($_FILES["file"]);
            
        if($success){
            $s1->save();
            unset($_POST);
        }else{
            echo "Faild to save";
        }

    }else{
        print_r($errors);
    }
    
}

if(isset($_POST["btnDel"])){
   $id=$_POST["txtId"];
  
   Student::delete($id);
   unset($_POST);
}

?>


<form action="#" method="post" enctype="multipart/form-data">
  <div>ID<br>
    <input type="text" name="txtId" value="<?php echo isset($_POST["txtId"])?$_POST["txtId"]:"" ?>" />
  </div>
  <div>Name<br>
    <input type="text" name="txtName" value="<?php echo isset($_POST["txtName"])?$_POST["txtName"]:"" ?>" />
  </div>
  <div>Course<br>
    <input type="text" name="txtCourse" value="<?php echo isset($_POST["txtCourse"])?$_POST["txtCourse"]:"" ?>" />
  </div>
  <div>Mobile<br>
    <input type="text" name="txtMobile" value="<?php echo isset($_POST["txtMobile"])?$_POST["txtMobile"]:"" ?>" />
  </div>
  <div>Photo<br>
   <input type="file" name="file" />
  </div>
  <br>
  <div>
    <input type="submit" name="btnSave" />
  </div>
</form>

<?php
  Student::display();
?>