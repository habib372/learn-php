<?php 
session_start();

    if(!isset($_SESSION["name"])){

        header("location:log_in.php");
    }

?>
<h1>Home</h1>

<?php 

  require_once("db_config.php");

  if(isset($_POST["btnSubmit"])){

    $name=$_POST["txtName"];
    $password=$_POST["pwdPassword"];

    $db->query("call add_newUser('$name','$password')");

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
        <input type="submit" name="btnSubmit" value="Create user">
    </div>

  </form>
</fieldset>


<h4>All User</h4>
<table border='1px'>
  <tr>
    <th>id</th>
    <th>name</th>
    <th>password</th>
  </tr>

<?php

  $user=$db->query("select id,name,password from users");
  while(list($id,$name,$password)=$user->fetch_row()){
    
    echo "<tr>";
    echo "<td>$id</td><td>$name</td><td>$password</td>" ;
    echo "</tr>";
  }

?>

</table><br>

<?php 
    if(isset($_POST["btnLogout"])){

        unset($_SESSION["name"]);
        session_destroy();
        header("location:log_in.php");
    }

?>


<form action="#" method="POST">
    <diiv>
        <input type="submit" name="btnLogout" value="Log Out">
    </diiv>
</form>