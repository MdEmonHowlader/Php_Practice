<?php
function  lexicographically ($s){
    $c=str_split($s);
    sort($c);

    return implode('', $c);
}
    $i =trim(fgets(STDIN));
    $so=lexicographically($i);
    echo $so."\n";

 
?>