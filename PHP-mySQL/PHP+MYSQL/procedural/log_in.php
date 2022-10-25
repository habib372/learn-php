<?php session_start();

 require_once("db_config.php"); 

    if(isset($_POST["btnSubmit"])){
        $name=$_POST["txtName"];
        $password=md5($_POST["pwdPassword"]);

        $user=$db->query("select id,name,password from users where name='$name' and password='$password' ");

        if($db->affected_rows>0){

                $_SESSION["name"]=$name;
                header("location:home_page.php");

            } else{
                echo "Your User_Name or Password is incorrect";
            }          
        }

?>


<fieldset style="width:200px">
    <form action="#" method="POST">

        <div>User Name:<br/>
            <input type="text" name="txtName">
        </div>
        <div>Password:<br/>
            <input type="password" name="pwdPassword">
        </div>
        <div>
            <input type="submit" name="btnSubmit" value="Log in">
        </div>

    </form>
</fieldset>

