<?php

class Calculator
{
 public function subtracting($a,$b) : int|float {
    $res = $a - $b;
    return $res;
 }   
 public function adding($a,$b) : int|float {
    $res = $a + $b;
    return $res;
 }   
 public function multiplication($a,$b) : int|float {
    $res = $a * $b;
    return $res;
 }   
 public function division($a,$b) : int|float {
    if ($b != 0) {
        $res = $a / $b;
    } else {
        $res = 0;
    }
    return $res;
 }   
}

?>