<?php
    $input = fgets(STDIN);
    list($n, $m) = explode(" ", $input);
    $rem = intdiv($n, $m);
    echo $rem;

?>