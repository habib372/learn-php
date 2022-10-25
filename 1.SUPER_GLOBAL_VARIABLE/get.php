<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>

    <!-- <a href="text.php?msg=good&txt=bye">Test $GET</a>

    <?php
        $message = $_GET['msg'];
        $word= $_GET['txt'];
        echo "firsttext=".$message."2ndtext=".$word;
    ?> -->

    <form method="get" action= "<?php echo $_SERVER['PHP_SELF']; ?>">
        Name: <input type="text" name="fname">
        <input type="submit">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            // collect value of input field
            $name = $_GET['fname'];
            if (empty($name)) {
                echo "Name is empty";
            } else {
                echo $name;
            }
        }
    ?>

</body>
</html>