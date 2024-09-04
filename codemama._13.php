<?php

$input = fgets(STDIN); 
$num = array_map('floatval', explode(' ', trim($input)));
$a = array_sum($num) / count($num);  
echo "Average: ". number_format($a, 2) . "\n";  


?>