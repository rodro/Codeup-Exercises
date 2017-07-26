<?php

function parseContacts($filename)
{
    // $contacts = array();
  $handle = fopen($filename, 'r');

  $contents = fread($handle, filesize($filename));
  $people = explode ("\n",$contents);
  $output = [];
  foreach ($people as $key => $value) {
      // echo $value . PHP_EOL;
      $substring = explode("|",$value);
      $phoneNumber = substr($people[1],0,3);

      // $output[$key] = $people
      // [
      //   'name' => 'value',
      //   'key' => 'value'
      // ];
  //     echo phoneNumber[1] . PHP_EOL;
  // };


  fclose($handle);
  return $output;
}
$filename = 'contacts.txt';
// $contents = explode(', ', $filename);
// $filenamePO = file_get_contents('./contacts.txt', FILE_USE_INCLUDE_PATH);
parseContacts($filename);
// var_dump(parseContacts($filename));
