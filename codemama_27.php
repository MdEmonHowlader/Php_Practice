<?php
$coor=explode(" ",(fgets(STDIN)));
$coor2=explode(" ",(fgets(STDIN)));

$x1=(float)$coor[0];
$y1=(float)$coor[1];
$x2=(float)$coor2[0];
$y2=(float)$coor2[1];

$distance=sqrt(pow($x2-$x1,2)+pow($y2-$y1,2));
printf("Distance: %.2f\n",$distance);


?>