<?php session_start();

require_once("db_config.php");

  if(isset($_POST["btnSubmit"])){
      $name=$_POST["txtName"];
      $password=$_POST["txtPassword"];

      $user=$db->query("select id,name,password from user");
      while(list($id,$nam,$pass)=$user->fetch_row()){

        if($name==$nam && $password==$pass){
          header("location:home1.php");
          $_SESSION["name"]=$nam;
        }
        else{
          echo "Username or Password is incorrect";
        }

      }

  }

?>

<form action="#" method="POST">

  <div><br/>
    <input type="text" placeholder="username" name="txtName">
  </div>
  <div><br/>
    <input type="text" name="txtPassword" placeholder="Password">
  </div>
    <input type="submit" name="btnSubmit" value="Sign in">

</form>