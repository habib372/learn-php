<h5>Home</h5>

<?php
  if(isset($_POST["btnLogout"])){
    header("location:logout.php");
  }





?>

<form action="#" method="post">
  <input type="submit" name="btnLogout" value="Log Out">
</form>