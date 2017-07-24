<?php
do {
  fwrite(STDOUT, 'enter a string');

  $string = fgets(STDIN);
}
function sentence_case($string) {
   $string = mb_strtolower( $string,); //convert the string to lowercase

   $string_len = mb_strlen( $string,); //calculate the string length

   $first_letter = mb_substr( $string, 0, 1,); //get the first letter of the string

   $first_letter = mb_strtoupper( $first_letter, ); //convert the first letter to uppercase

   $rest_of_string = mb_substr( $string, 1, $string_len,); //get the rest of the string



   return $first_letter . $rest_of_string; //return the string converted to sentence case
echo sentence_case(fferNVV);
}



?>
