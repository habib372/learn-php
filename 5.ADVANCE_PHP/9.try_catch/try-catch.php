<?php

    try{
    
        $file_name="data3.txt";

    if(!file_exists($file_name)){
        
        throw new Exception("File not found");

    }else{        
        $file= file($file_name);
        print_r($file);
    }

    }catch(Exception $e){
        echo $e->getFile()."<br>".$e->getLine()."<br>".$e->getMessage();
    }finally{
    
        echo "<br>File is closed";

    }

?>

<br>

<!--------example 1------------------>

    <?php  
//user-defined function with an exception  
function checkNumber($num) {  
   if($num>=1) {  
     //throw an exception  
     throw new Exception("Value must be less than 1");  
   }  
   return true;  
}  
  
//trigger an exception in a "try" block  
try {  
   checkNumber(5);  
   //If the exception throws, below text will not be display  
   echo 'If you see this text, the passed value is less than 1';  
}  
  
//catch exception  
catch (Exception $e) {  
   echo 'Exception Message: ' .$e->getMessage();  
}  
finally {  
   echo '</br> It is finally block, which always executes.';  
}  
?>  