<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Json_decode</title>
</head>
<body>
    
    <?php
    echo "<h4>Access the values from a PHP object:</h4>";
        $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
        $obj = json_decode($jsonobj);

        echo $obj->Peter."<br>";
        echo $obj->Ben."<br>";
        echo $obj->Joe;
    ?>

<br><br>

    <?php
    echo "<h4>Access the values from PHP associative array:</h4>";
        $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

        $arr = json_decode($jsonobj, true);

        echo $arr["Peter"];
        echo $arr["Ben"];
        echo $arr["Joe"];
    ?>

<br><br>

    <?php
    echo "<h4>Loop through the values of a PHP object:</h4>";
        $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

        $obj = json_decode($jsonobj);

        foreach($obj as $key => $value) {
        echo $key . " => " . $value . "<br>";
        }
    ?>


 
</body>
</html>