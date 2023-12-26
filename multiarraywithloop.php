<?php

$array = array(
    // 0 for parent array
    array(50,60,30,40,500),
//         0  1  2  3  4
// 1   for parent array
    array (10,160,320,3210),
//          0  1  2    3
//  2 for parent array
    array (10,160,420,5210)
//         0   1  2   3
);
for ($i=0; $i < count($array); $i++) { 
    for ($j=0; $j < count($array[$i]); $j++) { 
//  0  = count(array[0]) => 5
// 1 =   count(array[1]) => 4
echo "[".$i."] [".$j."] =>".$array[$i][$j].'<br>';
//  0  1
//  0  2
// 0  3, 
// 0 4,
//  1 1
}
}
echo '<---------------- FOR EACH LOOP -------------> <br>';
$arrayStudentAssociative = array(
    array('name'=>'a',"age" => '20','GPA'=>'3.5','email'=> 'emailA@gmail.com'),
    array('name'=>'B',"age" => '22','GPA'=>'4.0','email'=> 'emailB@gmail.com'),
);

foreach ($arrayStudentAssociative as $key => $childArray) {
    foreach ($childArray as $ChildArraykey => $childArrayValue) {
            echo "The ".$ChildArraykey." is "  .$childArrayValue.'<br>';
    }
}



?>