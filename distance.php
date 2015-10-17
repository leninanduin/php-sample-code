<?php
  error_reporting (E_ALL);

  class Point {
    public $X;
    public $Y;

    public function Point ($x, $y) {
      $this->X = $x;
      $this->Y = $y;
    }

    function getDistanceFrom($p) {
      return round(sqrt( pow(($this->X - $p->X ), 2) + pow(($this->Y - $p->Y ), 2)), 2);
    }
  }

  function getAverage($p1, $p2, $p3) {
    $d_p1_p2 = $p1->getDistanceFrom($p2);
    $d_p1_p3 = $p1->getDistanceFrom($p3);
    $d_p2_p3 = $p2->getDistanceFrom($p3);

    $average = ($d_p1_p2 + $d_p1_p3 + $d_p2_p3) / 3;
    return round($average,2);
  }

  $A = new Point(2,2);
  $B = new Point(4,4);
  $C = new Point(3,3);

  print_r(getAverage($A, $B, $C));


?>