<?php
class AddClass
// class blueprint
// keyword  : class ; Name  : AddClass
{
    // methods/functions and variables
    function add ($a,$b){
     $total  = $a + $b;
     echo $total.'<br>';
    }
    function multiplication($z,$x){
        $y = $z*$x;
        echo $y.'<br>';
    }
    function checkEvenOrOdd($number){
        // TODO : setup logic and call the function with the help of object
    }

}
    // create an object
$addClassObject = new AddClass();  //  make sure the class name is same
$addClassObject->add(10,20);
$addClassObject->multiplication(20,20);
//  object in order to call functions/methods and variables
?>