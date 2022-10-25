<?php

    $upload_dir="images/";

    $valid_size=100;
    $valid_types=["image/png","image/jpeg","image/jpg"];
    //print_r($_FILES["file"]);

    if(isset($_FILES["file"]["name"])){

        $selected_type = $_FILES["file"]["type"];
    
        if(in_array($selected_type,$valid_types)){

                $file_size = $_FILES["file"]["size"];       // file ar size byte hisaba diba.
                $kb=(($file_size)/1024);                    //1024 = byte
                
                if($kb<=$valid_size){

                    $file_name = $_FILES["file"]["name"];	
                    $file_tmp_name = $_FILES["file"]["tmp_name"];
                        
                    //copy($file_tmp_name,$upload_dir.$file_name);
                    if(move_uploaded_file($file_tmp_name,$upload_dir.$file_name)){         
                        echo "<img src='$upload_dir{$file_name}' width='200' />";
                        echo "<br>File Size: $kb Kb";        
                    
                    }else{                 
                        $error=$_FILES["file"]["error"];
                        echo $error;
                    }
            
                }else{
                    echo "File size must be in 100 kb";
                }

        }else{
            echo "Invalid File type";
        }
        
    }


?>


<div>
    <input type="text" name="txtname">
</div>

<form action="#" method="post" enctype="multipart/form-data">
   <input type="file" name="file" accept="image/*" />
  
 <div>
   <input type="submit"  name="btnSubmit" value="Save" />
   </div>
</form>
