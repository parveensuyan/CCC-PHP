<?php
function a(){
    echo "A<br>";
}
function b(){
    echo "B<br>";
}
function c(){
    echo "C<br>";
}
function d(){
    echo "D<br>";
}
$arrayFunction = array('a','b','c','d');

foreach ($arrayFunction as $key => $value) {
   $value();
//    a();
// b();
}
// $functionCall = 'a';
// storing the function name as a string
// $functionCall();
// calling the variable  : which will act like as a function call
?>