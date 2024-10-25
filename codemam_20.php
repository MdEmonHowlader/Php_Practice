<?php
function removeSpe($str){
    $sp = array('.', '!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '/');
    $cle= str_replace($sp, '', $str);
    return $cle;
}
$input=trim(fgets(STDIN));
$out=removeSpe($input);
echo $out;