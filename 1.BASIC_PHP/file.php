<?php
  $lines=file("textfile/data.txt");
  //print_r($lines);

  echo "<table border='1'>";
    echo "<tr><th>Sn</th><th>Name</th><th>Age</th><th>Roll</th></tr>";

    foreach($lines as $line){

        list($sn,$name,$age,$roll)=explode(",",$line);
        echo "<tr>";
            echo "<td>".$sn."</td>";
            echo "<td>".$name."</td>";
            echo "<td>".$age."</td>";
            echo "<td>".$roll."</td>";
        echo "</tr>";

    }
    echo "</table>";

    

?>