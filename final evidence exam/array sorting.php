<?php

    echo "Main Array: <br>";

    $city=["A"=>"Dhaka","B"=>"Rajshahi","C"=>"Khulna","D"=>"Cumilla","E"=>"Chottrogram","F"=>"Borisal","G"=>"Shylet"];

    print_r($city);
    echo "<br><br>";
    echo "Sorted Array: <br>";
    sort($city);

    print_r($city);



?>