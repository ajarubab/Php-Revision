<?php

    /**
     * Indexed Array
     * Associative array
     * Multidimentional Array
     */

    // Indexed Array

    $arr1 = array('siya',"ram",23, true, null, 56.43);

    echo "<pre>";
    print_r($arr1);
    
    // for($i=0; $i < count($arr1); $i++){
    //     echo $arr1[$i]."<br>";
    // }

    // foreach($arr1 as $x){
    //     print("$x <br>");
    // }
    
    echo "<br>";
    echo "<hr>";
    echo "<br>";
    
    // combining arr1 elements with arr2 elements and assing all to arr2 again

    $arr2 = [34,null, 'radhe', false, 11.22, "krishna"];
    $arr2 = array_merge($arr1,$arr2);

    echo "<pre>";
    print_r($arr2);
    
    // foreach($arr2 as $x){
    //     print("$x <br>");
    // }

    echo "<br>";
    echo "<hr>";
    echo "<br>";

    // making chunks of 3-3 of elemnts of all elemnts

    echo "<pre>";
    print_r(array_chunk($arr2,3));

    echo "<br>";
    echo "<hr>";
    echo "<br>";
    
    $bhajan = "hare raam hare raam raam raam hare hare hare krishna hare krishna krishna krishna hare hare";
    // changing the string into array on the basis of single space
    $bhajanArr = explode(" ", $bhajan);
    // countung the each element occurance of the array
    echo "<pre>";
    print_r($bhajanArr);
    print_r(array_count_values($bhajanArr));

    echo "<br>";
    echo "<hr>";
    echo "<br>";

    // filling the 0 with respective place square value

    $arrSqr = [1,4,9,0,0,0,0,64,81,100];
    foreach($arrSqr as $k => $v){
        if($v === 0){
            $arrSqr[$k] = $k*$k;
        }
    }
    // $arrSqr = array_fill(3,4,$varSqr());
    // $arrSqr = array_fill(3,4,"raja");
    echo "<pre>";
    print_r($arrSqr);

    echo "<br>";
    echo "<hr>";
    echo "<br>";

    // generating 10 random numbers, storing them into array
    $numbers = [];
    for($i =1; $i<=10 ; $i++){
        $numbers[$i] = rand(10,100);
    }
    echo "<br>----------**** Random -----------------<br>";
    echo "<pre>";
    print_r($numbers);

    echo "<br>----------**** Ascending -----------------<br>";
    
    // using sort and array_multisort functions to sort the element of the array
    sort($numbers);
    
    echo "<pre>";
    print_r($numbers);
    echo "<br>----------**** Descending -----------------<br>";
    // sorting the array elements values in descending order
    array_multisort($numbers, SORT_DESC);
    
    echo "<pre>";
    print_r($numbers);

    // function to returning odd numbers from numbers array
    function chooseOddNum($var){
        return $var % 2 !== 0;
    }
    
    // function to returning squared numbers from numbers array
    function makeNumSquared($val){
        return "$val = ".($val * $val);
    }

    echo "<br>------------Squared---------------<br>";

    // using array_map to call the makeNumSquared function for each element of the array
    $squaredNumbers = array_map("makeNumSquared",$numbers);
    echo "<pre>";
    print_r($squaredNumbers);
    
    echo "<br>-----------odd filtered----------------<br>";
    
    // using array_filter to call the chooseOddNum function for each element of the array
    $oddNumbers = array_filter($numbers, 'chooseOddNum');
    echo "<pre>";
    print_r($oddNumbers);

    

    echo "<br>";
    echo "<hr>";
    echo "<br>";

    $dietyNames = ["ram","sita","krishna","radha","shiva","parvati","ganesha","hanuman"];
    echo "<pre>";
    print_r($dietyNames);
    echo "<br>----------------<br>";
    sort($dietyNames);
    // array_multisort($dietyNames);
    // array_multisort($dietyNames,SORT_ASC);
    // array_multisort($dietyNames,SORT_DESC);
    echo "<pre>";
    print_r($dietyNames);


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
    
    foreach($arr3 as $k=>$dt):
        echo $k." : ".$dt."<br>";
    endforeach;


    echo "<br>";
    echo "<hr>";
    echo "<br>";

    // getting difference between two arrays

    $arr33 = [
        "Name" => "Raja",
        "Age" => 28,
        "Gender" => "male",
    ];

    $result=array_diff($arr3,$arr33);
    echo "<pre>";
    print_r($result);

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

    // getting all values of a specific key of all data

    $user_names = array_column($Array01, 'Country');
    echo "<pre>";
    print_r($user_names);


    echo "<br>";
    echo "<hr>";
    echo "<br>";

?>
