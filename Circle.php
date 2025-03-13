<?php

class Circle extends Figure
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

 public function square() : int|float {
    $res = M_PI * $this->width * $this->width;
    return $res;
 }   
 public function perimeter() : int|float {
    $res = 2 * M_PI * $this->width;
    return $res;
 }   
 public function paint() {
    $res = 'style = "width: '.$this->width.'px; height: '.$this->width.'px; background-color: '.$this->color.'; border-radius: 50%";"';
    return $res;
 }
}

?>