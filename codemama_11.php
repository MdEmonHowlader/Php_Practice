<?php
// $num1=(int)fgets( STDIN);
// $num2=(int)fgets( STDIN);
// $num3=(int)fgets( STDIN);

fscanf(STDIN , "%d %d %d", $num1, $num2, $num3 );
$max=max($num1,$num2,$num3);
echo $max;

?>
