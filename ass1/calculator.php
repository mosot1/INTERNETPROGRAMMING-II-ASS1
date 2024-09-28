<?php

function add($num1, $num2) {
  return $num1 + $num2;
}

function subtract($num1, $num2) {
  return $num1 - $num2;
}

function multiply($num1, $num2) {
  return $num1 * $num2;
}

function divide($num1, $num2) {
  if ($num2 == 0) {
    return "Error: Division by zero";
  }
  return $num1 / $num2;
}

function exponentiate($num1, $num2) {
  return pow($num1, $num2);
}

function percentage($num1, $num2) {
  return ($num1 / 100) * $num2;
}

function squareRoot($num) {
  return sqrt($num);
}

function logarithm($num, $base) {
  return log($num, $base);
}

?>