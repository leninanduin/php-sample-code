<?php
  error_reporting (E_ALL);

  /**
   * Point class represents a point in a (X,Y) coordinate plane.
   */
  class Point {
    public $X;
    public $Y;

    public function Point ($x, $y) {
      $this->X = $x;
      $this->Y = $y;
    }

    /**
     * Get the distance betwen 2 Point objects in a (X,Y) coordinate plane.
     * @param  Point $p
     * @return float
     */
    function getDistanceFrom($p) {
      return round(sqrt( pow(($this->X - $p->X ), 2) + pow(($this->Y - $p->Y ), 2)), 2);
    }
  }

  /**
   * Get the average distance betwen 3 Point objects in a (X,Y) coordinate plane.
   * @param  Point $p1
   * @param  Point $p2
   * @param  Point $p3
   * @return float
   */
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