<?php


//------associative array:------------->

    // $student["name"]="jahid";
    // $student["age"]=24;
    // $student["email"]="jahid@gmail.com";

    // print_r($student);


//------associative array: structure show ----------->

    // echo "<pre>";
    //     var_dump($student);             //structure dakta chaila
    // echo "</pre>";
  

 //------associative array:  Loop ----------->

    // $student2=array("name"=>"Nahid",         //array function
    //                 "age"=>22,
    //                 "phone"=>"254685");
                    
    //     // print_r($student2)

        
    //     foreach($student2 as $key=>$value){
    //         echo $key.":".$value."<br>";
    //     }


//------associative array:  Loop ----------->

        $students[0]["name"]="jahid";
        $students[0]["age"]=24;
        $students[0]["phone"]="316468";

        $students[1]["name"]="jahid";
        $students[1]["age"]=20;
        $students[1]["phone"]="6498866";

        $students[2]["name"]="jahid";
        $students[2]["age"]=22;
        $students[2]["phone"]="021574";


    $students2=array(
        array("name"=>"jahid","age"=>24,"phone"=>"264215"),
        array("name"=>"Nahid","age"=>20,"phone"=>"4846588"),
        array("name"=>"Sakib","age"=>22,"phone"=>"3254851"),
    );

    echo "<table border='1'>";
        echo "<tr><th>Name</th><th>Age</th><th>Phone</th></tr>";

        foreach($students2 as $student){
            echo "<tr>";
                foreach($student as $key=>$value){
                    echo "<td>";
                        echo $value;
                    echo "</td>";
                }  
            echo "</tr>";
        }
    echo "</table>";

?>