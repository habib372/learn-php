
<h4>product table</h4>
<span>price > 3000</span><br><br>

<?php 
    require_once("db_config.php");

    $query=$db->query("select id,name,price,manufacturer_id from all_product");
    while(list($id,$name,$price,$manufacturer_id)=$query->fetch_row()){
        echo $id.",".$name.",".$price.",".$manufacturer_id."<br>";
    }
?>
