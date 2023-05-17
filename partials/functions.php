<?php 
  function makePassword($letters,$numbers,$symbol,$upcase_letters,$password_length){
    $password_generated = '';
  
    while (strlen($password_generated)!= $password_length) {
      $password_generated .= $letters[rand(1,25)] . $symbol[rand(1,7)] .$upcase_letters[rand(1,25)] . $numbers[rand(1,9)];
      if (strlen($password_generated) > $password_length) {
        $password_generated = substr($password_generated, 0, $password_length);
      }
    };
    return $password_generated;
  }

?> 