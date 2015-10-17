<?php

function getPopularNumber($array) {
  $freq = array_count_values($array);
  arsort($freq);
  $numbers = array_keys($freq);

  $max = $numbers[0];
  $max_f = $freq[$max];
  $min = $numbers[0];

  foreach ($freq as $n => $f) {
    if ($f == $max_f && $n < $min) {
      $min = $n;
    }
  }

  return $min;
}

$data = array(500, 500, 500,100,2, 2, 100, 500, 90, 10, 2, 2 , 2, 100, 500, 100, 100);
print_r(getPopularNumber($data));
?>