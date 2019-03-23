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

function answer(){
    return 42;
}

function add_up($a, $b){
    return $a + $b;
}

$func = "add_up";

$num = $func(5, 10);

echo $num;


// function add_up($a, $b){
//     $arr = array(
//         $a,
//         $b,
//         $a + $b,
//     );
//     return $arr;
// }

// $value = add_up(2 , 4);

// print_r($value);
?>