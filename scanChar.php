<?php
/* 
    printChar displays exactly one ASCII character from A to Z (incusive) on multiple rows and columns.
    Now we want to do the reverse operation: to get a character from its graphic representation.
    implement the method scanChar so that it returns the character associated with the graphical representation provided
    by printChar. If does not match a character from A to Z(inclusive), then scanChar must return the character '?'.
*/
    
    function scanChar($s){

        if($s>=65 and $s<=90){
            $string=chr($s);
        }
        else{$string='?';}
        return $string;
    }
    $s=170;
    $result=scanChar($s);
    var_dump($result);
?>