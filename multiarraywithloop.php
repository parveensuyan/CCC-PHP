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
    array('name'=>'a',"age" => '20','gpa'=>'3.5','email'=> 'emailA@gmail.com'),
    array('name'=>'B',"age" => '22','GPA'=>'4.0','email'=> 'emailB@gmail.com'),
);

foreach ($arrayStudentAssociative as $key => $childArray) {
    foreach ($childArray as $ChildArraykey => $childArrayValue) {
            echo "The ".$ChildArraykey." is "  .$childArrayValue.'<br>';
    }
}
echo '<---------------- SINGLE FOR EACH LOOP -------------> <br>';

foreach ($arrayStudentAssociative as $key => $value) {
    echo "The student name is ".$value['name'].'<br>';
    echo "The student Age is ".$value['age'].'<br>';

    if(!isset($value['gpa'])){
    echo "Key is not there";
    }
    else
    {
    echo "The GPA Age is ".$value['gpa'].'<br>';
    }


}
//       Assignment operator
        // ! =  not equal
        // == comparision
        // === comparision with datatype
        // &(AND)  =  if both condition are true
        // ||(OR)  = if any of the condition is true

?>