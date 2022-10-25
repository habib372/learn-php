<?php

// <----File read function---------->

    readfile("weblist.txt");
    echo "<br><br>";

//<----File open function---------->
    $myfile = fopen("weblist.txt", "r") or die("Unable to open file!");

//<----File read function---------->
    echo fread($myfile,filesize("weblist.txt"));    //or fread($myfile,"10"); 10 ti character porba
    echo "<br><br>";

//<----Single line file read function---------->
    echo fgets($myfile)."<br>";
    
    while(!feof($myfile)) {
        echo fgets($myfile) . "<br>";
      }
    echo "<br><br>";

//<----Single character file read function---------->
    echo fgetc($myfile)."<br>";

    while(!feof($myfile)) {
        echo fgetc($myfile) . "<br>";
      }      
      
//<---File closeing function---------->      
    fclose($myfile);
   
?>