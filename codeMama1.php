<?php

function countOccurrences($string, $substring) {
    if ($substring === '') {
        return 0;
    }
    $count = 0;
    $position = 0;

    while (($position = strpos($string, $substring, $position)) !== false) {
        $count++;
        $position += 1;
    }
    return $count;
}
$input = trim(fgets(STDIN));
list($S, $T) = explode(' ', $input, 2);
echo countOccurrences($S, $T) . "\n";



?>   