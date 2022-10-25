<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advance Filter</title>
</head>
<body>
    <p>Email validation and sanitize chekc kora :</p>
    <?php
        $email = "habibsoft372@gmail.com";

        $email = filter_var($email, FILTER_SANITIZE_EMAIL);           // Remove all illegal characters from email

        if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {          // Validate e-mail
            echo("$email => is a valid email address");
        } else {
            echo("$email => is not a valid email address. <br>");
        }
    ?>


    <p>Integer ar range check kora :</p>
    <?php
        $int = 122;
        $min = 1;
        $max = 200;

        if (filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$min, "max_range"=>$max))) === false) {
            echo("Variable value is not within the legal range");
        } else {
            echo("Variable value is within the legal range");
        }
    ?>



</body>
</html>