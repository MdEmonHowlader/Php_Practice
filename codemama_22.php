<?php
function findTrip($arr, $N, $P){
    sort($arr);
    for($i=0; $i<$N-2; $i++){
        $left=$i+1;
        $right=$N-1;

        while($left<$right){
            $curSum= $arr[$i] + $arr[$left] + $arr[$right];
            if($curSum==$P){
                echo  "{$arr[$i]} {$arr[$left]} {$arr[$right]}\n";
                return;
            }
            if($curSum<$P){
                $left++;
            }else{
                $right--;
            }
        }
    }
   
}
fscanf(STDIN, "%d", $N);
$arr = array_map('intval', explode(' ', trim(fgets(STDIN))));
fscanf(STDIN, "%d", $P);
if($N>=3){
    findTrip($arr,$N,$P);
}


?>