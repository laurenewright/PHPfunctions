<?php

function hello($arr) {
    if(is_array($arr)){
        foreach ($arr as $name){
            echo "Hello $name, how's it going?<br />";
        }
    }else {
        echo "Hello friends!";
    }
}

$names = array(
    "Lauren",
    "Mike",
    "Hampton",
);
hello($names);
// hello($name);
// $current_user = "Mike";

// function is_mike(){
//     global $current_user;
//     if($current_user == "Mike"){
//         echo "It is Mike!";
//     } else {
//         echo "It's not Mike.";
//     }
// }

// is_mike();

?>