<?php
$cars= array(
    "A"=>"Car1",
    "B"=>"Car2",
    "C"=>"Car3",
    "D"=>"Car4",
    "E"=>"Car5",

);

$x= array(
    "Car1",
   "Car2",
   "Car3",
    "Car4",
   "Car5",

);
$y= array(
    "Car11",
    "Car12",
    "Car13",
    "Car14",
    "Car15",

);

// var_dump(array_key_exists("G", $cars));
// echo count($cars);
// print_r(array_count_values($cars));
$z = array_merge($x, $y);
print_r($z);

?>