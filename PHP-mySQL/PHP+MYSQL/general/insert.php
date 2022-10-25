<?php 
	
	require_once("db_config.php");
	if(isset($_POST["btnInsert"])){
		$title=$_POST["txtTitle"];
		$price=$_POST["txtPrice"];
	$table=$db->query("insert into courses(course_title,course_price)values('$title','$price')");
	echo "success";
	}
	
	
 ?>
 
 <form action="#" method="post">
 
		<div>Course-title:<br>
			<input type="text" name="txtTitle">
		</div>
		
		<div>Course-price:<br>
			<input type="text" name="txtPrice"  />
		</div>
		
		<div>
			<input type="submit" name="btnInsert" value="Insert" />
		</div>
		
 </form>
 

 <?php
 
 $table=$db->query("select id,title,price from courses");
	while(list($id,$course_title,$course_price)=$table->fetch_row()){   
			echo $id. "| " .$course_title." ".$course_price."<br>";
	}
	
?>