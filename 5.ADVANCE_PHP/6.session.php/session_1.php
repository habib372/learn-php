
<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>session_1</title>
</head>
<body>

    <?php    
        echo " User Name: " . $_SESSION["userName"] . " <br>";    //Set session: session.php page.
        echo " User password: " . $_SESSION["pass"] ."<br>";
        
        print_r($_SESSION);
    ?>

</body>
</html>