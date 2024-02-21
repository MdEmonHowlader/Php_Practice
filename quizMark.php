<?php
$input=explode(' ', trim(fgets(STDIN)));
sort($input);
$quiz3=$input[3]-$input[0]+$input[1]-$input[2];
$quiz1=$input[2]-$quiz3;
$quiz2=$input[0]-$quiz1;
echo "$quiz1 $quiz2 $quiz3\n";


?>