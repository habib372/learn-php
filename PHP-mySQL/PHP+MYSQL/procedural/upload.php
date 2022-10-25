<fieldset style="width:200px">
    <form action="#" method="POST" enctype="multipart/form-data">
        <div><br/>
            <input type="file" name="pic" >
        </div>
        <div>
            <input type="submit" value="Upload">
        </div>

    </form>
</fieldset>


<?php  
    if(isset($_FILES["pic"]["name"])){
        $directory="images/";
        $valid_type=["image/jpg","image/jpeg","image/gif","application/pdf"];
        $file_type=$_FILES["pic"]["type"];

        $file_name=$_FILES["pic"]["name"];
        $file_tmp=$_FILES["pic"]["tmp_name"];

        
        if(in_array($file_type,$valid_type)){

                if(move_uploaded_file($file_tmp,$directory.$file_name)){
                    echo "Successed Upload"."<br/>";
                    echo "<img src='images/$file_name' height='200' width='200'>";
                }
                else {
                    echo "failed Uploaded File";
                }
            } else {    
                 echo "file Type must be in jpg,jpeg,png,pdf";
            } 
    }
?>