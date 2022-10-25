<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form_validation1</title>
</head>
<body>
    
<?php
//ফাঁকা ভ্যারিয়েবল ডিক্লেয়ারেশন
$name = $email = $gender = $messege = "";
$nameError = $emailError = $genderError = "";
$nameOutput = $emailOutput = $genderOutput = $messegeOutput = "";

//ফর্ম মেথড POST কিনা না চেক করে, POST হলে ফর্ম থেকে ভ্যালু সংগ্রহ করে।
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // POST ভ্যালু ফাঁকা কিনা চেক করে এরর ম্যাসেজ তৈরি করে
    if (empty($_POST["name"])) {
        $nameError = "নাম পূরন করা আবশ্যক";
    } else {
        //ভ্যালু ফাঁকা না হলে ভ্যালিডিটি যাচাই করে
        $name = verify_input($_POST["name"]);
        // নামের মধ্যে শুধুমাত্র অক্ষর(letter) এবং whitespace রয়েছে কিনা চেক করে
        if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
            $nameError = "শুধুমাত্র অক্ষর(letters) এবং white space ব্যবহার করুন";
        }
    }


    //একই ভাবে, নিচের কোডসমূহ বুঝার জন্য উপরের কমেন্ট লক্ষ্য করুন
    if (empty($_POST["email"])) {
        $emailError = "ইমেইল পূরন করা আবশ্যক";
    } else {
        $email = verify_input($_POST["email"]);
        // ইমেইলের ফরম্যাট ঠিক আছে কিনা তা চেক
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $emailError = "ইমেইল ফরম্যাট ভ্যালিড নয়";
        }
    }

    if (empty($_POST["gender"])) {
        $genderError = "লিঙ্গ নির্ধারণ আবশ্যক";
    } else {
        $gender = verify_input($_POST["gender"]);
    }

    if (empty($_POST["messege"])) {
        $messege = "";
    } else {
        $messege = verify_input($_POST["messege"]);
    }

    // সকল ফিল্ডগুলো সঠিকভাবে ইনপুট হয়েছে কিনা  পরিক্ষা করে এবং true হলে  ফলাফল রিটার্ন করে
    if ($nameError == "" && $emailError == "" && $genderError == "") {
    $nameOutput = $name;
    $emailOutput = $email;
    $genderOutput = $gender;
    $messegeOutput = $messege;
    }

}

//ফর্ম ডেটা ভ্যালিডেশন কোড
function verify_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<!-- এইচটিএমএল অংশ -->
<h2>পিএইচপি ফর্ম ভ্যালিডেশন উদাহরণ</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<fieldset style="width:200px">
    নামঃ <input type="text" name="name" value="<?php echo $name;?>"><span class="error">* <?php echo $nameError;?></span>
    <br><br>
    ই-মেইলঃ <input type="text" name="email" value="<?php echo $email;?>"><span class="error">* <?php echo $emailError;?></span>
    <br><br>
    লিঙ্গঃ <input type="radio" name="gender"
        <?php if (isset($gender) && $gender=="male")
        echo "checked";?> value="male">পুরুষ
        <input type="radio" name="gender"
        <?php if (isset($gender) && $gender=="female")
        echo "checked";?> value="female">মহিলা<span class="error">* <?php echo $genderError;?></span>
   <br><br>
    মেসেজঃ <textarea name="messege" rows="5" cols="40">
        <?php echo $messege;?></textarea>
    <br><br>
        <input type="submit" name="submit" value="Submit">
</fieldset>        
</form>

<!-- ফর্ম এর মাধ্যমে ইনপুটকৃত তথ্যের আউটপুট -->
<?php
echo "<h2>আপনার ইনপুটকৃত তথ্যঃ</h2>";
echo $nameOutput. "<br>";
echo $emailOutput. "<br>";
echo $genderOutput. "<br>";
echo $messegeOutput. "<br>";
?>
</body>
</html>

