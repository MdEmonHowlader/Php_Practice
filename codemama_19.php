<?php
function  lexicographically ($s){
    $c=str_split($s);
    rsort($c);

    return implode('', $c);
}
    $i =trim(fgets(STDIN));
    $so=lexicographically($i);
    echo $so."\n";

?>