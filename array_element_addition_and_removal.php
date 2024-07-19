<?php

    $diety = ["ram","sita","krishna","radha","shiva","parvati"];

    // to add more diety we can use array_push function
    // it adds the elemnets in the last of the array

    array_push($diety,"ganesha");
    array_push($diety,"hanuman",'indra');
    array_push($diety,"Agni",'Surya', "Vayu");
    array_push($diety,23,null,78.90,"Chnadra",true);

    echo "<pre>";
    print_r($diety);

    echo "<hr>";

    // to remove elements from diety array we use array_pop function
    // it removes only the single last element from the array

    array_pop($diety);

    echo "<pre>";
    print_r($diety);

    // we can remove multiple elements using array_slice function
    // 

    echo "<hr>";

    // $diety = array_slice($diety, 2);    // returns sliced array of elements from index 2 to last element and re-assign it to diety array
    // $diety = array_slice($diety, 2, 11);    // returns sliced array of elements from index 2 to 10 re-assign it to diety array
    // $diety = array_slice($diety, -3);    // returns sliced array of last three elements and re-assign it to diety array
    // $diety = array_slice($diety, -11, -3);    // returns sliced array of 11th element from bottom to 3rd last element and re-assign it to diety array
    // $diety = array_slice($diety, -3, -11);    // returns empty array as the iteration always goes from left to right while re-indexing
    echo "<pre>";
    print_r($diety);


    // removing specific elements from the array

    /*
    for($i=0; $i<= count($diety); $i++){
        if ($diety[$i] === null) {
            unset($diety[$i]);
        }
    }
    */

    if (array_search(null,$diety) != false) {
        unset($diety[$i]);
    }


    echo "<hr>";
    echo "<pre>";
    print_r($diety);

?>