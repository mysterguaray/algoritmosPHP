<?php
// dada una frase encontrar la palabra mas larga que se encuentre en dicha frase

function longestWord($input){
 
    $theLongestWord = '';
  
  $patron = '/(?P<WORD>[a-zA-Z]+)/';
  $aMatches = array();
  $iResult = preg_match_all ($patron, $input, $aMatches);
  echo $iResult;
  if($iResult > 0){
    foreach($aMatches['WORD'] as $t_sWord){
      if(strlen($t_sWord) > strlen($theLongestWord)){
        $theLongestWord = $t_sWord;
      }
    }
  }

  return $theLongestWord; 
         

}


$phrase = readline("Pr favor ingrese la frase a analizar");
echo $longest=longestWord($phrase);


/* otra forma de hacerlo
function LongestWord($sen) {  

  $words = str_word_count($sen, 2);
  $longestv;
  $longestw;
  foreach ($words as $key => $word)
  {
    if(strlen($word) > $longestv)
    {
      $longestv = strlen($word);
      $longestw = $word;
    }
  }
  return $longestw; 
         
}
*/

?>