<?php
 $numberOne =  10;
 $numberTwo = 20;

 $avg =  ($numberOne +  $numberTwo)/2;

 echo "Average is ".$avg;

if ($avg > 20) {
    // 15>20 //false
    // 15>20 //false
 echo "Good Job  ";
// code to be executed if this condition is true;
} 
elseif($avg <20 ){
  // 15<20 true
   echo " One  chance Left!";
}
elseif ($avg == 21) {
      echo " Try Again!";
// 15<20 true
// 15= 21 false
}
 else {
 echo " Failed!";
// code to be executed if all conditions are false;
}





?>