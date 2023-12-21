<?php
// while
$i = 0;
// intial value i =0
while( $i < 10) {
   //  condition
$i++;
// increment
// echo ("Loop stopped at i = $i <br>" );
} 
// 0<10
// 1
// 1<10
// 1+1 = 2

// ---------------->Do While Loop --------------->

// while loop - check the condition first and then increase the value 
// do while loop -  increase the value and then check the condition 

$i = 0;
do {
$i++;
// code to be executed
echo ("Loop stopped at i = $i <br>" ); 

} 
// after incrementing the value of i then check the condition
while( $i < 10 );

 /*
  i = 0 ; i = 1
  1<10 
  1
  1+1 = 2
  2<10
  2
|
|
i = 9
i = 9+1
 10<10 = false
 */

?>
