<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>global</title>
</head>
<body>
    
       <?php 
            $x = 5;
            $y = 3;

            function sum(){
                $GLOBALS['z']=$GLOBALS['x']+$GLOBALS['y'];
            }
            sum();
            echo $z;

            echo "<br>";

        ?> 
         
        <?php 
            $a = 55;
            $b = 853;

            function sum1(){
                global $a;
                global $b;

                $c =$a+$b;
                echo $c;
            }
            sum1();
        ?>

        </body>
        </html>