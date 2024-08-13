<?php

// $firstName = trim(fgets(STDIN));
// $lastName = trim(fgets(STDIN));
// $output = $lastName . ", " . $firstName;

// echo $output . "\n";

list($firstName, $lastName) = explode(" ", trim(fgets(STDIN)));

echo $lastName . ", " . $firstName . "\n";

?>