<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice1</title>
</head>
<body>

<?php    

    // if(isset($_POST["submit"])){
    //     $file_name=$_FILES["file"]["name"];
    //     $file_tmp=$_FILES["file"]["tmp_name"];
    //     move_uploaded_file( $file_tmp,'images/'.$file_name);
    // }

    // $target_dir = "images/";
    // $target_file = $target_dir . basename($_FILES["file"]["name"]);
    // $uploadOk = 1;
    // $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // // Check if image file is a actual image or fake image
    // if(isset($_POST["submit"])) {
    //   $check = getimagesize($_FILES["file"]["tmp_name"]);
    //   if($check !== false) {
    //     echo "File is an image - " . $check["mime"] . ".";
    //     $uploadOk = 1;
    //   } else {
    //     echo "File is not an image.";
    //     $uploadOk = 0;
    //   }
    // }
  
?>    


<?php  
    $target_dir = "images/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
      $check = getimagesize($_FILES["file"]["tmp_name"]);
      if($check !== false) {
        echo "File is an image - " . $check["mime"] . "<br>";
        $uploadOk = 1;
      } else {
        echo "File is not an image.";
        $uploadOk = 0;
      }
    }

    // Check if file already exists
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["file"]["size"] > 500000) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
      echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
      $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
      if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
        echo "The file ". htmlspecialchars( basename( $_FILES["file"]["name"])). " has been uploaded."."<br>";
        echo "<img src='{$target_file}' width='200' border='1px black' />";
      } else {
        echo "Sorry, there was an error uploading your file.";
      }
    }

?>

<p><strong>General file upload:</strong></p>
<form action="#" method="post" enctype="multipart/form-data">
   <input type="file" name="file" accept="image/*" />
   <input type="submit" name="submit" value="Upload" />
</form>


</body>
</html>