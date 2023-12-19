<?php
// CASE A
// with Type Casting
$integerVariable = 10;
// 10.00
$nonIntegar  = 10.58888;
$total = $integerVariable + (int) $nonIntegar;
echo (int) $nonIntegar.'<br>';
echo  "The output for php is : " . $total.'<br>';
//  (int)       :  convert the float into integer 
// type casting : when we convert one data type into another is called typecasting

// ------------------------------>without Type Casting<-------------------------------

// with Type Casting
//  CASE B
$integerVariable = 10;


// 10.00
$nonIntegar  = 10.58888;
$total = $integerVariable +  $nonIntegar;
echo $nonIntegar.'<br>';
echo  "The output for php is : " . $total;

// to store/display the string you can use "" or ''

$message = "<br>Good Morning Class";

echo $message;

// todo task 1  :  Convert string type into integer

// boolean data type [true,false]

echo date('H');



?>