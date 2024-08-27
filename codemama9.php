<?php 
fscanf(STDIN , "%d %d %d", $wh, $car, $fig );
$car_from_wheels= intdiv($wh, 4);
$car_from_bodies =$car;
$car_from_fig= intdiv($fig, 2);
$max_car= min($car_from_wheels, $car_from_bodies, $car_from_fig);
echo $max_car;

?>