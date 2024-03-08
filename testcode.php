<?php
function sum(...$numbers){
    $total=0;
    foreach($numbers as $number){
        $total +=$number;
    }
    return $total;
}
echo "Total: ". sum(2, 4,5,6);
?>