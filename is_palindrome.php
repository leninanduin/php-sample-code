<?php
  /**
   * Finds if a given string is a palindrome.
   *
   * @param  string $s
   * @return boolean
   */
  function isPalindrome($s) {
    $letters = str_split($s);
    $letters_size = sizeof($letters);

    $new_s = "";
    for ($i = $letters_size; $i >= 0; $i--) {
      $new_s.=$letters[$i];
    }

    return ($s == $new_s);
  }

  echo isPalindrome('racecar');
?>