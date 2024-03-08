<?php
$person=array(
    'name'=>'Emon',
    'home'=>'Dhaka'
);
$newperson= &$person; //& -- copy by Reference
$newperson['home']='Barishal';
print_r($person);
print_r($newperson);//copy by value

?>
