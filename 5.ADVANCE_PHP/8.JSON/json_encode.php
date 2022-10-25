<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Json Encode</title>
</head>
<body>
    
    <?php
        $age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);

        echo json_encode($age);
    ?>
    
<br><br>

    <?php
        $cars = array("Volvo", "BMW", "Toyota");

        echo json_encode($cars);
    ?>

<br><br>

    <?php
        $students2=array(
            array("name"=>"jahid","age"=>24,"phone"=>264215),
            array("name"=>"Nahid","age"=>20,"phone"=>"4846588"),
            array("name"=>"Sakib","age"=>22,"phone"=>"3254851"),
         );
         echo json_encode($students2,JSON_PRETTY_PRINT);  //JSON Format sundor vaba dakhar jonno 'JSON_PRETTY_PRINT'
    ?>

</body>
</html>