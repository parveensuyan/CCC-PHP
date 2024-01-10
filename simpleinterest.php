<?php
interface InterestCalculation {
    public function CalcInterest($p,$r,$t);
    // The function will not have the function body, we will just define the function 
    public function compoundInterest();
        public function compoundInterest2();

    // 20 function delcared inside the interface. you must need to create those functions
    // inside the class (where you going to implement InterestCalculation interface)
}
class CalcInterestClass implements InterestCalculation{
    // implements  : is used to implement the interface   
     // calcArea calculates the area of rectangles
    public function CalcInterest($p ,$r, $t) {
    return $p * $r * $t/100;
    }
    public function compoundInterest(){

    }
    public function compoundInterest2(){

    }

    }
     // function call with an object
        $interest = new CalcInterestClass(); 
        echo $interest -> CalcInterest(1,1,1);



?>