<?php
$date1=new DateTime("10th May 2002");
$date2=new DateTime("13th May 2003");

$diff=$date1->diff($date2);
echo $diff->y;

?>  