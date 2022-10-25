<?php

    require_once("db_config.php");

    if(isset($_POST["btnSubmit"])){
        $name=$_POST["txtName"];
        $contact=$_POST["txtContact"];

    //$table=$db->query("select name,contact from info where name='$name' and contact='$contact'");
    $table=$db->query("call add_info('$name','$contact')");
    echo "successfull";
    }
    

?>

<form action="#" method="post">
    <div>Name<br>
        <input type="text" name="txtName">
    </div>
    <div>Contact<br>
        <input type="text" name="txtContact">
    </div>
    <div>
        <input type="Submit" name="btnSubmit" value="Add">
    </div><br>


    <?php
 
 $table=$db->query("select id,name,contact from info");
	while(list($id,$name,$contact)=$table->fetch_row()){   
			echo $id. "| " .$name." ".$contact."<br>";
	}
	
?>