<?php

class Square extends Figure
{
public function __construct(
      int $width = 10, 
      string $color = "#000000"
  ){
   parent::__construct(
      $this->width = $width,
      $this->color = $color
   );
  }

 public function square() : int {
    $res = $this->width * $this->width;
    return $res;
 }   
 public function perimeter() : int {
    $res = ($this->width + $this->width)*2;
    return $res;
 }   
 public function paint() {
    $res = 'style = "width: '.$this->width.'px; height: '.$this->width.'px; background-color: '.$this->color.';"';
    return $res;
 }
}

?>