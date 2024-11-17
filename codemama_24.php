<?php
$input = fgets(STDIN);
list($n, $m) = explode(" ", $input);
$rem = $n % $m;
echo $rem;

?>