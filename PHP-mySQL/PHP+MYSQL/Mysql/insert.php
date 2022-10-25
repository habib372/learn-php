 <?php

require_once("db_config.php");


if(isset($_POST["btnSubmit"])){

    $name=$_POST["txtName"];
    $address=$_POST["textAddress"];
    $contact=$_POST["txtContact"];

    $db->query("call add_manufacturer('$name','$address','$contact')");

  }

?>



<fieldset style="width:200px">
    <form action="#" method="post">
        <div>Name:<br>
            <input type="text" name="txtName">
        </div>
        <div>Address:<br>
            <textarea type="text" name="textAddress"></textarea>
        </div>
        <div>Contact_no:<br>
            <input type="text" name="txtContact">
        </div>
        <div><br>
            <input type="submit" name="btnSubmit">
        </div>
    </form>
</fieldset><br>



<h3>manufacturer table</h3>
<?php
$user=$db->query("select id,name,address,contact_no from manufacturer");
  while(list($id,$name,$address,$contact)=$user->fetch_row()){
    
    echo $id."|".$name."|".$address."|".$contact."<br>";
  }

?>