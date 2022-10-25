<?php 
	
	require_once("db_config.php");
	if(isset($_POST["btnDel"])){
		$id=$_POST["txtId"];
	$table=$db->query("delete  from users where id='$id'"); 
	}
	
	
 ?>
 
 <form action="#" method="post">
		<div>ID:<br>
			<input type="text" name="txtId">
		</div>
		<div>
			<input type="submit" name="btnDel" value="Delete" />
		</div>
		
 </form>
 
  <?php
 
 $table=$db->query("select id,name,password from users");
	while(list($id,$name,$password)=$table->fetch_row()){   
			echo $id. "| " .$name." ".$password."<br>";
	}
	
?> 