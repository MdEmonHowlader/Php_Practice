<?php
$number=array(2,4,7,5);
$sum=0;
foreach($number as $number){
    if($number %2 ==0){
        continue;
    }
    $sum+=$number;

}
echo $sum;