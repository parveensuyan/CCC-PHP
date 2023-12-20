<?php
// <table>
// two loops
/*
one for column
another for row
first for($i=1;$i=10;$i++)
second for($j=1;$j=5;$j++) 
*/
// iteration/Loop : repeat the code until the condition is not false

for($i=1;$i<4;$i++){ 

// until condition will not be false its going to repeat j (inner loop) again and again
  for($j=1;$j<4;$j++) {
      echo $i.' '.$j."<br>";


/* 
i =1

j=1

echo => 1 1
j++ => 1+1 =2<4
1 2
j = 2+1 =3<4
1 3
j = 3+1;4<4 condition will become false and return to first loop

i = 1+1 = 2 <4
j = 1
2 1
 j = 1+1 = 2
 2 2
 2 3
j = 3+1;4<4 condition will become false and return to first loop

i = 3
j = 1 ;1<4

3 1
j= 1+1 = 2<4
3 2
j= 2+1 = 3<4
3 3
j= 3+1 = 4<4
 i = 3
//  i=  3+1 = 4<4 condition become false


1 1
1 2
1 3
2 1
2 2
2 3
3 1
3 2
3 3
*/
  }
}
  echo "returned from nested loop";


?>