<?php

$names = array(
    "Mike" => "frog",
    "Chris" => "teacher",
    "Hampton" => "teacher",
);

// foreach(array_keys($names) as $name){
//     echo "Hello, $name!</br>";
// }

function print_info($value, $key){
    echo "$key is a $value.";
}

array_walk($names, "print_info");

?>