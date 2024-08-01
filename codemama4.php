<?php
function anagram($A, $B){
    if(strlen($A)!= strlen($B)){
        return "No";
    }

    $arrA= str_split($A);
    $arrB=str_split($B);
    sort($arrA);
    sort($arrB);
    if($arrA === $arrB){
        return "YES";
    }else{
        return "NO";
    }
}
$A = trim(fgets(STDIN));
$B= trim(fgets(STDIN));

echo anagram($A, $B);
?>