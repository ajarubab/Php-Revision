<?php
    /**
     * Indexed Array
     * Associative array
     * Multidimentional Array
     */

    // Indexed Array

    $arr1 = array('siya',"ram",23, true, null, 56.43);
    $arr2 = [34,null, 'radhe', false, 11.22, "krishna"];

    for($i=0; $i < count($arr1); $i++){
        echo $arr1[$i]."<br>";
    }

    echo "<br>";
    echo "<hr>";
    echo "<br>";

    foreach($arr2 as $j){
        echo $j."<br>";
    }

    echo "<br>";
    echo "<hr>";
    echo "<br>";

    // Associated Array

    $arr3 = [
        "Name" => "Raja",
        "Age" => 28,
        "Gender" => "male",
        "Country" => "India",
        "NRI"=> true,
    ];

    foreach($arr3 as $key => $data){
        echo $key." : ".$data."<br>";
    }

    echo "<br>";
    echo "<br>";

    foreach($arr3 as $k=>$dt):
        echo $k." is ".$dt."<br>";
    endforeach;

    echo "<br>";
    echo "<hr>";
    echo "<br>";


    // Multidimentional Indexed Array

    $arr4 = [
        ["jai","siya","ram","chandra","ji","ki"],
        ['bolo','jai','shree','radhe','krishna','ji'],
        [23,34,45,56,67,78],
        [23.43,45.54,11.22,22.33,33.44,44.55],
        [true,null,true,false,null,true],
    ];

    // echo "<pre>";
    // print_r ($arr4);

    // setting array data into the table
    echo "<table border =2 >";
    foreach($arr4 as $ar){
        echo "<tr>";
        $i = 0;
        foreach($ar as $data){
            echo "<td>";
            $i++;
            echo "Value $i";
            echo "</td>";
        }
        break;
        echo "</tr>";
    }
    foreach($arr4 as $ar){
        echo "<tr>";
        foreach($ar as $data){
            echo "<td>";
            echo $data."<br>";
            echo "</td>";
        }
        echo "</tr>";
    }

    // Multidimentional Associative Array

    $Array01 = [
        [
            "Name" => "Raja",
            "Age" => 28,
            "Gender" => "male",
            "Country" => "India",
            "NRI"=> false,
        ],
        [
            "Name" => "Rajat",
            "Age" => 24,
            "Gender" => "male",
            "Country" => "Indionesia",
            "NRI"=> true,
        ],
        [
            "Name" => "Rajni",
            "Age" => 26,
            "Gender" => "female",
            "Country" => "India",
            "NRI"=> false,
        ],
        [
            "Name" => "Rajesh",
            "Age" => 32,
            "Gender" => "male",
            "Country" => "USA",
            "NRI"=> false,
        ],
        [
            "Name" => "Rajkumari",
            "Age" => 38,
            "Gender" => "female",
            "Country" => "France",
            "NRI"=> true,
        ]
    ];


    echo "<table border =2 >";
    
    foreach($Array01 as $ar){
        echo "<tr>";
        foreach($ar as $k => $dt){
            echo "<td>";
            echo $k."<br>";
            echo "</td>";
        }
        echo "</tr>";
        break;
    }
    foreach($Array01 as $ar){
        echo "<tr>";
        foreach($ar as $k => $dt){
            echo "<td>";
            echo $dt."<br>";
            echo "</td>";
        }
        echo "</tr>";
    }

    echo "<br>";
    echo "<hr>";
    echo "<br>";

?>
