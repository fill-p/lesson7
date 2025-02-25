<?php
require 'Calculator.php';
$calc = new Calculator;
var_dump($calc->subtracting(10, 5));
var_dump($calc->adding(10, 5));
var_dump($calc->multiplication(10, 5));
var_dump($calc->division(10, 5));
var_dump($calc->division(10, 0));
?>