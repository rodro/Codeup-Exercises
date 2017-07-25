<?php

  // # Make your own PHP library of helpful functions!
  // ## Make a file called library.php

  // Write a function called isEven that takes in a variable and returns true or false
  // if the provided input is evenly divisible by two or not.
// --------------------------------------------------------
  $number = 5;
  function isEven(){
    if($number % 2);
      echo 'Odd number!';

  }
  // var_dump (isEven);
// --------------------------------------------------------
  // Write a function called isVowel that returns true or false if the provided input
  // is the letter 'a', 'e', 'i', 'o', or 'u'
// --------------------------------------------------------
$input= 3;

  function isVowel($input){
     $vowls = ['a', 'e', 'i', 'o', 'u'];
     $result = array_search($input, $vowls);
     return $result;
   };
   echo isVowel(3);
// return (isVowel);

// var_dump (isVowel);
// --------------------------------------------------------
  // Write a function called "first" that takes in an argument that could be an array
  // or a string. Return the first character if the argument is a string. Return the
  // first element of the array if the input is an array.
$values = array(false, true, null, 'abc', '23', 23, '23.5', 23.5, '', ' ', '0', 0);
  function first(){

    foreach ($values as $value);
        echo "is_string(";
        var_export($value);
        echo ") = ";
        echo var_dump(is_string($value));
    }
// --------------------------------------------------------
  // Write a function called "second" that takes in input that could be an array or a
  // string. The function should return the second character or element of the input.
// --------------------------------------------------------
// function first(){
//
//
// }
// --------------------------------------------------------
  // Write a function called "last" that takes in an input that could be an array or a
  //  string. Your function should return the last character or element of the input.

  // Write a function called "reverse" that takes in an input of either a string or an
  // array. Your function should return the elements or characters in reverse order.

  // Write a function called "random" that takes in an input that can be either a string
  // or an array. Your function should return a random element or character from the input.


  ?>
