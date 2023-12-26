<?php
                //   0  1   2 3          0  1   2    3           0  1   2    3
$array = array(array(50,60,30,40),array (10,160,320,3210),array (10,160,420,5210));
                // 0                   1                       2

    print_r($array[2][1]);
echo "<br>";
$arrayStudent = array(
    "ClassA" => array('a','b','c','d'),
    "ClassB" => array('X','Y','Z','Q')
);
print_r($arrayStudent['ClassA'][1]);
echo "<br>";

// $arrayStudentAssociative = array(
//     "12" => array('name'=>'a',"age" => '20','GPA'=>'3.5','email'=> 'emailA@gmail.com'),
// );

$arrayStudentAssociative = array(
    array('name'=>'a',"age" => '20','GPA'=>'3.5','email'=> 'emailA@gmail.com'),
    array('name'=>'B',"age" => '22','GPA'=>'4.0','email'=> 'emailB@gmail.com'),
);
print_r($arrayStudentAssociative[0]['name']);
echo "<br>";

print_r("Age is  " .$arrayStudentAssociative[0]['age']);

?>