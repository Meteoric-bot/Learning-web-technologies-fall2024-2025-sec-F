<?php
$num1 = 50;
$num2 = 25;
$num3 = 15;

if ($num1 >= $num2 && $num1 >= $num3) {
    $largest = $num1;
} elseif ($num2 >= $num1 && $num2 >= $num3) {
    $largest = $num2;
} else {
    $largest = $num3;
}

echo "largest number is: $largest";
?>