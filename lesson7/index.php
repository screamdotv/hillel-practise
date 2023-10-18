<?php
require_once('Calculator.php');

$calculator = new Calculator(14987, 64686);

echo "Число 1" . $calculator->num1 . "<br>";
echo "Число 2" . $calculator->num2 . "<br>";
echo "Сумма двух чисел: " . $calculator->addition() . "<br>";
echo "Разница двух чисел: " . $calculator->subtraction() . "<br>";
echo "Произведение двух чисел: " . $calculator->multiplication() . "<br>";
echo "Деление двух чисел: " . $calculator->division() . "<br>";
