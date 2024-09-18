<?php
function SortString($array){
    usort($array, function($a, $b){

        return strlen($a)-strlen($b);
    });
    return  $array;

}
$n= intval(trim(fgets(STDIN)));
$s=explode(' ', trim(fgets(STDIN)));

$sort=SortString($s);
echo implode(' ', $sort) ."\n";


?>