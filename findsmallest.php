<?php
/*
implement the findSmallestInterval($numbers) function wich returns the smallest positive interval between two values
of the numbers table.
for example given the table[1,6,4,8,2] the smallest interval is 1(difference between 2 and 1)

Constraints:
1.) Numbers contains at least two numbers and a maximum of 100,000 entries.
2.) The solution wich favor execution time on large size arrays will get the most points.
3.) the difference between two element will never exceed the size of an integer for your language. 
*/ 

function findSmallestInterval(array $numbers){
    //write your code hear
    if($numbers[0]>$numbers[1]){
        $oldinterval=$numbers[0]-$numbers[1];
    }
    else{
        $oldinterval=$numbers[1]-$numbers[0];
    }
    //var_dump($numbers);
    $value=count($numbers);
    //echo "el vector tiene ".$value."posiciones \n";
    //echo "oldinterval aqui vale: ".$oldinterval."\n";
    for($pos=0; $pos<$value-1; $pos++)
    {
        $interval=0;
        if($numbers[$pos]>$numbers[$pos+1]){
            $interval=$numbers[$pos]-$numbers[$pos+1];
        }
        else{
            $interval=$numbers[$pos+1]-$numbers[$pos];
        }

        if($interval<$oldinterval){
            $oldinterval=$interval;
        }  
    }
    echo "\n";
    return $oldinterval;
}

$table=[21,8,30,-78,-79,23,68,-102,200];
sort($table);
echo "el menor intervalo encontrado es: ".$result=findSmallestInterval($table);

?>

