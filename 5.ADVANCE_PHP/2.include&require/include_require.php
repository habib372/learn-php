<!DOCTYPE HTML>
<html>
<head>
    <title>Employee Interests Survey</title>
</head>
<body>
    
    <fieldset>
        <?php
            spl_autoload_register(function($name)){
                include "inclucde_file/".$name.".php";
            }
        ?>
    <!-- We can give absolute url, or relative url like /nextpage.jsp, and specify POST or GET method -->
    <form action="http://google.co.in">
        <div>
            <h1>Employee Interests Survey form</h1>
                <?php require("file1.php");?>
                
            How do you like to read about your favorite topics?
                <?php include("file2.php"); ?>

            What genre of movies do you like?
                <?php include("file3.php"); ?>
            
            <input type=submit value="Submit form">
        </div>
    </form>
</fieldset>

</body>
</html>