<?php 
  $letters = range('a', 'z');
  $numbers = range('1', '9');
  $symbol = ['!','?','<','>','&','%','@','&'];
  $upcase_letters = [];
  
  $password_length = $_GET['number'];
  
  foreach ($letters as $letter) {
    $upcase_letters[] = strtoupper($letter);
  }

?>