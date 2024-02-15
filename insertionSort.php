<?php
// Insertion sort
$arrye=[4,1,5,7,3];
for( $i=1; $i<5; $i++){
    $value= $arrye[$i];
    $index=$i;
    while($index>0 && $arrye[$index-1]>$value){
        $arrye[$index]= $arrye[$index-1];
        $index--;
    }
    $arrye[$index]=$value;
}
for($i=0; $i<5; $i++){
    echo "\n".$arrye[$i];
}



?>