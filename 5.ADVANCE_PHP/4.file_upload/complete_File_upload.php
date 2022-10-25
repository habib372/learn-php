<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File_upload_validation</title>
</head>
<body>

<?php
    $upload_dir="images/";
    $valid_types=["image/png","image/jpeg","image/jpg"];
    //print_r($_FILES["file"]);

        if(isset($_FILES["file"]["name"])){

            $selected_type = $_FILES["file"]["type"];

            if(in_array($selected_type,$valid_types)){

                $file_size = $_FILES["file"]["size"];
                $kb=round(($file_size/1024),2);                                //1024 byte  // ,2 = dosomic ar por 2 ti digit niba
                
                if($kb<=200){
            
                    $file_name = $_FILES["file"]["name"];	
                    $file_tmp_name = $_FILES["file"]["tmp_name"];
                        
                    //copy($file_tmp_name,$upload_dir.$file_name);
                    if(move_uploaded_file($file_tmp_name,$upload_dir.$file_name)){         
                        echo "<img src='$upload_dir{$file_name}' width='200' border='1px black' />";
                        echo "<br>File Size: $kb Kb";        
                    }else{
                        $error=$_FILES["file"]["error"];
                        echo $error;
                    }
                }else{
                   echo "File size must be in 100 kb";
                }
                
            }else{
                echo "Invalid File type or file not select";
            } 
           
        }
        
?>

<p><strong>Complete file upload with validation:</strong></p>
<form action="#" method="post" enctype="multipart/form-data">
   <input type="file" name="file" accept="image/*" />
   <input type="submit" value="Upload" />
</form>


</body>
</html>