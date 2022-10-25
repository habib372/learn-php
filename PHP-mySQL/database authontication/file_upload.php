<?php

if(isset($_FILES["pic"]["name"])){
  $directory="images/";
  $valid_type=["image/jpg","image/png","application/pdf","image/jpeg"];
  $file_type=$_FILES["pic"]["type"];
  if(in_array($file_type,$valid_type)){
    $file_name=$_FILES["pic"]["name"];
    $file_tmp=$_FILES["pic"]["tmp_name"];
    move_uploaded_file( $file_tmp,$directory.$file_name);
    echo "Successfully uploaded";




  }
  else{
    echo "File type Error";
  }
}

?>










<form action="#" method="POST" enctype="multipart/form-data">
<div><br/>
  <input type="file" name="pic">
</div>
<div>
  <input type="submit" value="upload">
</div>


</form>