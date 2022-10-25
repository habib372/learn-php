<?php

    echo "Main Array: <br>";

    $city=["A"=>"Dhaka","B"=>"Rajshahi","C"=>"Khulna","D"=>"Cumilla","E"=>"Chottrogram","F"=>"Borisal","G"=>"Shylet"];

    print_r($city);
    echo "<br><br>";
    echo "Sorted Array: <br>";
    sort($city);

    print_r($city);


    /*output : 

    Main Array:
    Array ( [A] => Dhaka [B] => Rajshahi [C] => Khulna [D] => Cumilla [E] => Chottrogram [F] => Borisal [G] => Shylet )
    
    Sorted Array:
    Array ( [0] => Borisal [1] => Chottrogram [2] => Cumilla [3] => Dhaka [4] => Khulna [5] => Rajshahi [6] => Shylet ) */



?>