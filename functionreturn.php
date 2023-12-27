<?php
function sum($a,$b){
    $total = $a  + $b;
    return $total;
}
function checkValue( $value = 8 ){
    // passing the default value
    if($value > 10){
        echo "The total is greater than 10 and the value is $value <br>";
    }
    else
    {
        echo "The total is not greater than 10 and the value is $value <br>";
    }
}
// echo sum (10,20);
$checkValueVariable = sum (10,20);

// $checkValueVariable = 30;
echo "The storage value inside the variable : ".$checkValueVariable.'<br>';

checkValue($checkValueVariable);
checkValue(20);
checkValue();  //OUTPUT :  The total is not greater than 10 and the value is 8
/*
return :  keyword
return the value 
store the returned value in the variable
passing the returned value to another function
*/
?>