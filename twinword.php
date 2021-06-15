<?php 
/*
    A twin of a word is a word written with the same letters (case insensitive) but not necessarily in the same order 
    for example silent is a twin of listen.

    the is_twin($a,$b) function should return true if b is the twin of a and false otherwise; a and b are two non-null 
    strings

    write the body of the is_twin($a,$b) function


*/ 

function is_twin($a,$b){

    $resultado=0;
    $a1=strtolower($a);
    $b1=strtolower($b);
    $vectora=str_split($a1);
    $vectorb=str_split($b1);

    $lenght1=sizeof($vectora);
    $lenght2=sizeof($vectorb);

    if($lenght1!=$lenght2){
        return false;
    }
    else{
        sort($vectora);
        sort($vectorb);       
        $contador=0;
        for($i=0; $i<$lenght1; $i++){
            
            if($vectora[$i]!=$vectorb[$i]){
                return false;
            }
            else{
                $contador=$contador+1;
            }
        }
        if($contador==$lenght1){
            return true;
        }
        else{return false;}
    }
}

$a="outlook";
$b="lookout";

$result=is_twin($a,$b);
var_dump($result);

?>