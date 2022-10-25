<?php 
	
	require_once("db_config.php");
	if(isset($_POST["btnUpdate"])){
		$id=$_POST["txtId"];
		$title=$_POST["txtTitle"];
		$price=$_POST["txtPrice"];
	$table=$db->query("update courses set course_title='$title',course_price='$price' where id='$id'");
	 
	echo "success";
	}
	
	
 ?>
 
 <form action="#" method="post">
		<div>ID:<br>
			<input type="text" name="txtId">
		</div>
		<div>Course_title:<br>
			<input type="text" name="txtTitle">
		</div>
		
		<div>Course_price:<br>
			<input type="text" name="txtPrice"  />
		</div>
		
		<div>
			<input type="submit" name="btnUpdate" value="Update" />
		</div>
		
 </form>
 
 <?php
 
 $table=$db->query("select id,title,price from courses");
	while(list($id,$course_title,$course_price)=$table->fetch_row()){   
			echo $id. "| " .$course_title." ".$course_price."<br>";
	}
	
?>