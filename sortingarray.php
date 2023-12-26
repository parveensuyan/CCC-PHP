<?php
$numbers = array(4, 6, 2, 22, 11,1); 
//  function 1 : sort($numbers);
//  function 2 : rsort($numbers);

rsort($numbers);

foreach ($numbers as $key => $value) {
   echo $value.'<br>';
}
// associative array
$arrayStudent  =   array('zname'=>'X',"age" => 'B','gpa'=>'A','email'=> 'e',2=>'test',1=>'test 2');
//  function 3 : asort($arrayStudent);
//  function 4 : ksort($arrayStudent);
//  function 4 : arsort($arrayStudent);  descending order
//  function 4 : krsort($arrayStudent);

krsort($arrayStudent);
foreach ($arrayStudent as $key => $value) {
   echo $key.'<br>';
}

$string = "HELLO USER!";
// $newString = str_replace('USER','PARVEEN',$string);
// $newString = strlen($string);
$newString = str_word_count("Lorem 
Ipsum is simply dummy text of the printing and typesetting industry.
 Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
 when an unknown printer took a
  galley of type and scrambled it 
  to make a type specimen book. It has survived not only five centuries, 
  but also the leap into electronic typesetting, remaining essentially unchanged. 
  It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum 
  passages, and more recently with desktop publishing software 
  like Aldus PageMaker including versions of Lorem Ipsum.");

echo $newString;
?>