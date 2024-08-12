<?php
function FormatName($firstName, $lastName){
    return $lastName. ", " . $firstName;
}
$firstName = trim(fgets(STDIN));
$lastName = trim(fgets(STDIN));

echo FormatName($firstName, $lastName);

?>