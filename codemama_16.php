<?php
fscanf(STDIN, "%d", $n);
$a =1;
for($i=0; $i<$n; $i++){
    $multi = $i * $i;
    if($multi>$n){
        break;
    }
    $a=$i;
}
echo $a;

?>