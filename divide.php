<?php
$firstNumber = $_POST['fNumber'];
$secondNumber = $_POST['sNumber'];

function divide ($firstNumber,$secondNumber){
    try{
        // try block of code
        // statment which can gives run time error will be added in the try block
        if($secondNumber <= 0){
            // throw the errors
         throw new Exception("Please add a Second number greater that 0");
        }
        $divide =  $firstNumber / $secondNumber;
        return $divide;
    }
    catch(Exception $e){
        // catch the errors
        echo '<p style="color:red;font-size:26px;font-weight:bold;text-align:center;margin-top:100px">Message From Catch : ' .$e->getMessage().'</p>';
            // catch the error 
            //  $e  display the warning/error message 
    }
  
}
$result = divide ($firstNumber,$secondNumber);
$result = ceil($result);
echo "<p style = color:blue;font-size:26px;font-weight:bold;text-align:center;margin-top:100px>The result is $result</p>"

?>