<?php
  function esPalindromo($s) {
    $letters = str_split($s);
    $letters_size = sizeof($letters);

    $new_s = "";
    for ($i = $letters_size; $i >= 0; $i--) {
      $new_s.=$letters[$i];
    }

    return ($s == $new_s);
  }
  echo esPalindromo('ojo').'-';
  echo esPalindromo('juan');
?>