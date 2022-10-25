
<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>
<body>

    <?php 
        $_SESSION["userName"] = "tamim";
        $_SESSION["pass"] = "2017";

        echo "Session variables are set";
    ?>

</body>
</html>