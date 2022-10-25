<?php

require_once("db_config.php");


if(isset($_POST["btnDel"])){

    $id=$_POST["txtID"];

    $db->query("delete from manufacturer where id='$id'");

  }

?>



<fieldset style="width:200px">
    <form action="#" method="post">
        <div>ID:<br>
            <input type="text" name="txtID">
        </div>
        
            <input type="submit" name="btnDel" value="delete">
        </div>
    </form>
</fieldset><br>


<h3>Manufacturer_table</h3>

<?php
$user=$db->query("select id,name,address,contact_no from manufacturer");
  while(list($id,$name,$address,$contact)=$user->fetch_row()){
    
    echo $id."|".$name."|".$address."|".$contact."<br>";
  }

?>
<h3>product_table</h3>


<?php
$user=$db->query("select id,name,price,manufacturer_id from product");
  while(list($id,$name,$price,$manu_id)=$user->fetch_row()){
    
    echo $id."|".$name."|".$price."|".$manu_id."<br>";
  }

?>

