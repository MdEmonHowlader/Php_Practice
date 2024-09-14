<?php
$a =fgets(STDIN);
$b = trim(fgets((STDIN)));
$data =explode(" ", $b);
$min=100001;
for($i=0; $i<$a; $i++){
    $item=(int)$data[$i];
    if($min>$item){
        $min=$item;
    }
}
echo $min;
?>