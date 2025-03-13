<?php

class Rectangle extends Figure
{
public function __construct(
      int $width = 10,
      private int $height = 5, 
      string $color = "#000000"
  ){
   parent::__construct(
      $this->width = $width,
      $this->color = $color
   );
  }

 public function square() : int {
    $res = $this->width * $this->height;
    return $res;
 }   
 public function perimeter() : int {
    $res = ($this->width + $this->height)*2;
    return $res;
 }   
 public function paint() {
    $res = 'style = "width: '.$this->width.'px; height: '.$this->height.'px; background-color: '.$this->color.';"';
    return $res;
 }
}

?>