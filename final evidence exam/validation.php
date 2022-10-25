<?php

require_once("validation.class.php");

if(isset($_POST["btnSave"])){

    $name=$_POST["txtName"];
    $email=$_POST["txtEmail"];

    $errors=[];

    if(!preg_match("/^[a-zA-Z]{3,}$/",$name)){
        $errors["name"]="Invalid Name";
    }

    if(!preg_match("/^[a-zA-Z0-9]{3,}[@][a-zA-Z]{2,}[.][a-zA-Z]{2,}$/",$email)){
        $errors["email"]="Invalid Email";
    }

    if(count($errors)==0){
        $str=new Student($name,$email);
        echo $str->save();
    }else{
        print_r($errors);
    }

}

?>

<form action="#" method="post">

    <div>Name <br>
        <input type="text" name="txtName">    
    </div>
    <div>Email <br>
        <input type="mail" name="txtEmail">    
    </div>
    <div>Mobile: <br>
        <input type="mail" name="txtPhone">    
    </div>
    <div>
        <input type="submit" name="btnSave">
    </div>

</form>
<?php Student::display(); ?>