<?php

function lengthOfLongestSub($input){
    $n= strlen($input);
    $char_map=[];
    $start=0;
    $max_len=0;
    for($i=0; $i<$n; $i++){
        if(isset($char_map[$input[$i]]) && $char_map[$input[$i]] >= $start){
            $start=$char_map[$input[$i]]+1;
        }
        $char_map[$input[$i]]=$i;
        $max_len=max($max_len, $i-$start+1);
    }
    return $max_len;
}
$input = trim(fgets(STDIN));
echo lengthOfLongestSub($input)."\n";



?>