<?php
// <table>
// two loops
/*
one for column
another for row
first for($i=1;$i=10;$i++)
second for($j=1;$j=5;$j++) 
*/

for($i=1;$i<4;$i++){
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


?>