<?php

// function hello($name){
//     if($name == "Mike"){
//         return "Hello, Mike";
//     } else {
//         return "Hello, Stranger";
//     }
// }

// $greeting = hello();
// echo $greeting;

function add_up($a, $b){
    $arr = array(
        $a,
        $b,
        $a + $b,
    );
    return $arr;
}

$value = add_up(2 , 4);

print_r($value);
?>