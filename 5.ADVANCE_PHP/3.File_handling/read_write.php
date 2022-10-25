<?php 

    $file = fopen("readwrite.txt","w+") or die("File not found");
    $text = "Md. Habibur Rahman\n";
    fwrite($file,$text);
    $txt = "Md. Tamim Iqbal";
    fwrite($file, $text);

    fclose($file);

?>