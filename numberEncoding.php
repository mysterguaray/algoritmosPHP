<?php
/* 
Using the PHP language, have the function NumberEncoding(str)
take the str parameter and encode the message according to the following rule: 
encode every letter into its corresponding numbered position in the alphabet. 
Symbols and spaces will also be used in the input. For example: if str is "af5c a#!" 
then your program should return 1653 1#!. 
*/

function NumberEncoding( $str ) { 

	$albphabet = range('a','z');
	
	$arrStr = str_split( strtolower( $str ) );
	$newArr = array();

	foreach( $arrStr as $key => $value ) {
		if ( in_array( $value, $albphabet ) ) {
			$newArr[] = array_search( $value, $albphabet ) + 1;
		} else {
			$newArr[] = $value;
		}	
	}

	return implode($newArr);
}
echo NumberEncoding('af5c a#!');



?>