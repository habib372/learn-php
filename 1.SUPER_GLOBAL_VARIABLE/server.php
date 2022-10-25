<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SERVER-METHOD</title>
</head>
<body>
    
        <?php

        echo "0=> " .$_SERVER['PHP_SELF'];
        echo "<br>";
        echo "1=> " .$_SERVER['SCRIPT_NAME'];
        echo "<br>";

        echo "2=> " .$_SERVER['SERVER_NAME'];
        echo "<br>";
        echo "3=> " . $_SERVER['HTTP_HOST'];
        echo "<br>";

        echo "4=> " .$_SERVER['HTTP_REFERER'];
        echo "<br>";

        echo "5=> " .$_SERVER['HTTP_USER_AGENT'];
        echo "<br>";

        echo "6=> " .$_SERVER['SERVER_ADDR'];
        echo "<br>";

        echo "7=> " .$_SERVER['REQUEST_METHOD'];
        echo "<br>";
        ?>

</body>
</html>