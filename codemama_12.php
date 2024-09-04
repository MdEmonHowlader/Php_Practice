<?php
$c= (float)fgets(STDIN);

$fahrenheit = ($c * 9/5) + 32;
echo "The temperature in Fahrenheit is: ". number_format($fahrenheit,2);
?> 