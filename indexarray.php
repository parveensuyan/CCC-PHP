<?php
$scoreArray = array();
$scoreArray[0] = 'A';
$scoreArray[1] = 'B';
$scoreArray[2] = 'c';
echo "<br>".$scoreArray[2];

// ----------------------->New----------------->

$score  =  array(50,60,30,30);
echo $score[1];
// override the array index
$score[1] = 90;
    echo "<p style=color:red> NEW CODE</p>";

foreach ($score as $key => $value) {
        echo "<br>";

if ($value == 50){
    echo "Average! Your score is $value";
}
elseif($value <50){
        echo "Failed!Better luck Next Time, Your score is $value";
}
elseif($value >50){
        echo "Good Job! Your score is $value";

}
    // echo "<br>Inside the loop $value";
}
// 


?>