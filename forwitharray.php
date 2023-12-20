<?php 
$array =  array("A","B","C","D","E","X","Y","Z","S","P");
        //       0   1   2   3   4
//  array start from 0 
print_r(count($array)."<br>");
// COUNT NUMBER OF ELEMENT IN THE ARRAY  :  count($array)
for ($i=0; $i<count($array); $i++){ 
    echo "array[$i] ===>"."$array[$i] <br>";
    //  code to be executed;
}
echo $i;
// output
// i+1
// i =0+1
// i=1 ;1<5
// array[1] ==> B
// i+1
// i = 1+1 = 2;2<5
// array[2] ==> C
// i = 2+1 = 3 ;3<5
// array[3] ==> D
// i = 3+1 ; 4<5
// array[4] ==> D
// i = 4+1 ; 5<5
// false
?>
