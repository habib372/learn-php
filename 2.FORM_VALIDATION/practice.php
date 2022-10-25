<!DOCTYPE html>
<head>
    <meta charset = "UTF-8">
    <meta name = "viewport" content= "width=device-width" initial-scale="1.0">
    <title>Form_validation practice</title>
    <style>
        .error{color:red;}
    </style>
</head>
<body>

<?php
    $Name = $Email = $number = $website = $gender = $comment = "";
    $nameErr = $emailErr = $numberErr = $genderErr = $websiteErr = $commentErr ="";
    $nameOutput = $emailOutput = $numberOutput = $websiteOutput = $genderOutput = $commentOutput = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        if(empty($_POST["txtName"])){
            $nameErr = "Name is required";
        }else{
            $Name = validate($_POST["txtName"]);
            if(!preg_match("/^[a-zA-Z ]+$/",$Name)){
                $nameErr = "Only Letter and whitespace supported";
            }
        }

        if(empty($_POST["txtEmail"])){
            $emailErr = "Email is required";
        }else{
            $Email = validate($_POST["txtEmail"]);
            if(!filter_var($Email, FILTER_VALIDATE_EMAIL)){
                $emailErr = "Inviled email address";
            }
        }

        if(empty($_POST["number"])){
            $numberErr = "Name is required";
        }else{
            $number = validate($_POST["number"]);
            if(!preg_match("/^[0-9]{3,11}$/",$number)){
                $numberErr = "Minimum 3 digit and maximum 11 digit input";
            }
        }

        if(empty($_POST["website"])){
            $websiteErr = "Website is required";
        }else{
            $website = validate($_POST["website"]);
        }

        if(empty($_POST["gender"])){
            $genderErr = "Gender is required";
        }else{
            $gender = validate($_POST["gender"]);
        }
        
        if(empty($_POST["comment"])){
            $comment = " ";
        }else{
            $comment = validate($_POST["comment"]);
        }

        if($nameErr =="" &&  $emailErr =="" && $numberErr =="" && $websiteErr =="" && $genderErr == ""){
            $nameOutput = $Name;
            $emailOutput = $Email;
            $numberOutput = $number;
            $websiteOutput = $website;
            $genderOutput = $gender;
            $commentOutput = $comment;         
        }
    }
   

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

?>

<P style="font-size:20px">Registation form</p>

<form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <fieldset style="width: 400px;">
        <legend>Registation Form</legend><br>

        <label for="fname">Name:</label>
            <input type="text" name="txtName" value="<?php echo $Name; ?>"> <span class="error">* <?php echo $nameErr;?></span><br><br>
        <label for="email">Email:</label>
            <input type="text" name="txtEmail" value="<?php echo $Email; ?>"> <span class="error">* <?php echo $emailErr;?></span><br><br>
        <label for="mobile">Mobile:</label>
            <input type="number" name="number" value="<?php echo $number; ?>"> <span class="error">* <?php echo $numberErr;?></span><br><br>
        <label for="website">Website:</label>
            <input type="text" name="website" value="<?php echo $website; ?>"> <span class="error">* <?php echo $websiteErr;?></span><br><br>
        <label for="gender">Gender:</label>
            <input type="radio" name="gender"<?php if(isset($gender) && $gender == "male") echo "checked"; ?> value="male">male
            <input type="radio" name="gender" <?php if(isset($gender) && $gender == "female") echo "checked"; ?> value="female">female
            <input type="radio" name="gender" <?php if(isset($gender) && $gender == "others") echo "checked"; ?> value="others">others
            <span class="error">*<?php echo $genderErr; ?></span><br><br>
        <label for="Comment">Comments:</label><br>
            <textarea name="comment" row="5" cols="30"><?php echo $comment; ?></textarea><br><br>
        <input type="submit" name="submit" value="Submit">

    </fieldset>
</form><br><br>

<p>Output:</p>

<?php

 echo "<fieldset style='width: 250px';>";
   echo $nameOutput. "<br>";
   echo $emailOutput. "<br>";
   echo $numberOutput. "<br>";
   echo $websiteOutput. "<br>";
   echo $genderOutput. "<br>";
   echo $commentOutput. "<br>";
echo "</fieldset>";
   
?>

</body>
</html>