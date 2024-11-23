<?php
$number = (int)trim(fgets(STDIN));
if ($number > 0) {
    echo "$number is a positive number.\n";
} elseif ($number < 0) {
    echo "$number is a negative number.\n";
} else {
    echo "The number is zero.\n";
}

?>