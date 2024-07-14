<?php
$city =["Dhaka", "Khulna", "Barishal"];
$replacement=[0=>"Cox-Bazar,", 2=>"Gournadi"];
$replace=array_replace($city, $replacement);
print_r($replace);
?>