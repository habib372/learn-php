<?php require_once("phpfile/calculator.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP calculator</title>
</head>
<body>
   
<fieldset style="width:400px; height: 100px">
    <form action="#" method="post">
        <table>
            <tr>
                <td>Enter the first number:</td>
                <td><input type="number" name="number1"></td>
            </tr>
            <tr>
                <td>Enter the second number:</td>
                <td><input type="number" name="number2"></td><br>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit"></td>
            </tr>
        </table>
</form>
</fieldser><br><br>


<?php 
    if(isset($_POST["submit"])){
        $num1 =$_POST["number1"];
        $num2 =$_POST["number2"];

       if(empty($num1) or empty($num2)){
            echo "<span style='color: red;'>field not be empty</span>";
       }else{
           echo "First number: ".$num1. ", Second number: ".$num2."<br/><br/>";
            $cal = new Calculator;
            $cal->add($num1, $num2);
            $cal->sub($num1, $num2);
            $cal->mul($num1, $num2);
            $cal->div($num1, $num2);
       }
    }
    
?>

</body>
</html>

