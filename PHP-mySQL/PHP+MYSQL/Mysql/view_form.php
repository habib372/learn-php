<?php require_once("db_config.php"); ?>

<?php  

    if(isset($_POST["btnSubmit"])){
        $in=$_POST["txtPrice"];

        $query=$db-query("select id,name,price,manufacturer_id from product where price>'$in'");
        while(list($id,$name,$price,$manufacturer_id)=$query->fetch_row()){
            echo $id.",".$name.",".$price.",".$manufacturer_id."<br>";
        }
    }

?>

<fieldset style="width:200px">
    <form action="#" method="post">

        <div>Price:<br>
            <input type="text" name=txtPrice placeholder="less than">
        </div><br>
        <div>
            <input type="submit" name=btnSubmit value="OK">
        </div>

    </form><br>
</fieldset>


