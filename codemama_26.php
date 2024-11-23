<?php 
$year = (int)trim(fgets(STDIN));
if (($year % 4 == 0 && $year % 100 != 0) || $year % 400 == 0) {
    echo "$year is a leap year.\n";
} else {
    echo "$year is not a leap year.\n";
}





?>
