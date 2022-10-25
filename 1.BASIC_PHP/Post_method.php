
<!-- execute in super_global_post file -->


<?php
    if(isset($_POST["btnSubmit"])){
        $name=$_POST["txtName"];
        $email=$_POST["txtEmail"];

        file_put_contents("textfile/store.txt","$name,$email\n",FILE_APPEND);    // new line: \n = .PHP_EOL(end of line) same
                                                                    //FILE_APPEND=store a data mucba na.

    }

?>