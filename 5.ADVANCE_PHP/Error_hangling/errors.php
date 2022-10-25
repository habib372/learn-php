<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Errors</title>
</head>
<body>
    <?php
        //error হ্যান্ডেলার ফাংশন
        function customError($errno, $errstr) {
            echo "<b>Error:</b> [$errno] $errstr<br>";
            echo "habibsoft has been notified";
            error_log("Error: [$errno] $errstr",5, "habibhasan351@gmail.com","From: habibsoft372@gmail.com");
        }

        //error হ্যান্ডেলার সেট
        set_error_handler("customError",E_USER_WARNING);

        //error ট্রিগার
        $test=9;
        if ($test>=5) {
            trigger_error("Value must be 5 or below",E_USER_WARNING);
        }
    ?>
</body>
</html>