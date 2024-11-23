<?php

fscanf(STDIN, "%d %d", $num1, $num2);
echo "Before swapping: num1 = $num1, num2 = $num2\n";

$temp = $num1;
$num1 = $num2;
$num2 = $temp;
echo "After swapping: num1 = $num1, num2 = $num2\n";
