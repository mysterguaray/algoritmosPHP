<?php
/*write the body of the calc($array, $n1, $n2) function
 $array is an array of integers. The $n1 and $n2 parameters are integers defined by the relation
 0<= $n1 <= $n2 <count($array)
 the calc function should return the sum of the integers of array whose index belongs to the [$n1, $n2] interval
 @return integer the sum of integers whose index is between n1 and n2
*/
 function calc($array, $n1, $n2){
     //$length=($n2-$n1)+1;
     $sum=0;
     for($i=$n1; $i<=$n2; $i++){
        $sum=$sum+$array[$i];
     }
     return $sum;
 }
 ////////0,1,2,3,4,5,6
 $array=[5,7,4,9,8,5,3];
 $sum=calc($array, 3, 4);
 echo $sum;

?>