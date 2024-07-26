<?php
fscanf(STDIN, "%s %s", $S, $T);
function rotation($S, $T){
    if(strlen($S) != strlen($T)){
        return false;
    }
    $c =$S . $S;
    return strpos($c, $T) !==false;
}
echo rotation($S, $T) ? "True" : "False";
?>


