<?php 
	
	require_once("db_config.php");
	
	$table=$db->query("select id,course_title,course_price from courses"); //1. (where id=2);
	
	//1. list($id,$title,$price)=$query->fetch_row(); //single record  
		//echo $id. "| ".$title." ".$price.""<br>";
	
	while(list($id,$course_title,$course_price)=$table->fetch_row()){   //multiple record.
			echo $id. "| " .$course_title." ".$course_price."<br>";
	}
	
	
 ?>