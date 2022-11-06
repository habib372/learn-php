    <?php
        //Star Pyramid Size
        $size = 5;
        for($i=1; $i<=$size; $i++){
            for($j=1; $j<=$size-$i; $j++){
                echo "&nbsp;";
            }
            for($k=1; $k<=$i; $k++){
              echo "*";
            }
        echo "<br />";
        }
    ?>
<!-- 
    output:        
        *  
      *  *  
    *  *  *  
  *  *  *  *   
*  *  *  *  *   -->



<?php
        //Star Pyramid Size
        $size = 5;
        for($i=1; $i<=$size; $i++){        
            for($k=1; $k<=$i; $k++){
              echo "*";
            }
        echo "<br />";
        }
    ?>

<!-- 
  output:        
*  
*  *  
*  *  *  
*  *  *  *  
*  *  *  *  *   -->


