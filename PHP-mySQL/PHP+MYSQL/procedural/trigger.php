<?php require_once("db_config.php")?>
<?php 
    if(isset($_POST["btnSubmit"])){
        $id=$_POST["txtID"];
        $db->query("delete from manufacturer where id='$id' ");
    }


?>
<fieldset style="width:200px">
<form action="#" method="POST" >

    <div>manufacturer_id:<br/>
        <input type="text" name="txtID" >
    </div><br>
    <div>
        <input type="submit" name="btnSubmit" value="Delete Record">
    </div>
</form>
</fieldset></br>


<h3>Manufacture Table</h3>
<table border='1px'>
  <tr>
    <th>id</th>
    <th>Company Name</th>
    <th>Contact</th>
  </tr>

<?php

    $user=$db->query("select id,company_name,contact from manufacturer");
    while(list($id,$company_name,$contact)=$user->fetch_row()){

        echo "<tr>";
        echo "<td>$id</td><td>$company_name</td><td>$contact</td>" ;
        echo "</tr>";
    }

?>
</table>


<!-- <?php
    $user=$db->query("select id,company_name,contact from manufacturer");

    while(list($id,$name,$contact)=$user->fetch_row()){

        echo $id."|  ".$name."|  ".$contact."<br/>";
    }
?> -->



<h3>Product Table</h3>
<table border='1px'>
  <tr>
    <th>id</th>
    <th>name</th>
    <th>password</th>
    <th>manu_id</th>
  </tr>

    <?php

        $user=$db->query("select id,product_name,price,manufacturer_id from products");
        while(list($id,$product_name,$price,$manu_id)=$user->fetch_row()){

            echo "<tr>";
            echo "<td>$id</td><td>$product_name</td><td>$price</td><td>$manu_id</td>" ;
            echo "</tr>";
        }

    ?>

</table>


<!-- <?php
    $user=$db->query("select id,product_name,price,manufacturer_id from products");
    while(list($id,$name,$price,$manu_id)=$user->fetch_row()){

    echo "Primary key: ".$id."  product_name: ".$name."  Price:".$price."  Foreign_key:".$manu_id."<br/>";
    }
?> -->