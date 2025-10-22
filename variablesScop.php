<?php
// $num = 10;
// function info(){
//     $number = 20;
//     global $num;
//     return $num;
// }
// echo info();


function add(){
    static $n1 = 1;
    echo $n1."<br>";
    $n1++;
}

add();
add();
add();







?>