
<!-- execute in super_global_get file -->

<?php
    if(isset($_GET["btnSubmit"])){
        $name=$_GET["txtName"];
        $email=$_GET["txtEmail"];

        file_put_contents("store.txt","$name,$email\n",FILE_APPEND);

    }
?>