<?php
     $array =   array("Joe"=>3,'olya'=>4,'olya'=>5,'bo'=>'5');

     echo $array['olya'].'<br>';

     print_r(array_flip($array));
    //  array_flip default function in php
     $dbArray = array('1'=>'parveen');
     
        foreach ($array as $key => $value) {
            // key : Joe,Olya,Bo
            // value : 3,4,5
           echo "The student name <span style=font-weight:bold>".$key."</span> and the student id is ".$value.'<br>';
        }
$cars = array
(
array("Volvo",22,18),
array("BMW",15,13),
array("Saab",5,2),
array("Land Rover",17,15)
);
print_r($cars);


?>