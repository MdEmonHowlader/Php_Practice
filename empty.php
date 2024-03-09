<?php
$name;

if(isset($name)){
    echo "Name is set";
}else{
    echo "Name is not set";
}
echo "\n";
if(empty($name)){
    echo "Name is empty";
}else{
    echo "Name is not empty";
}

if(isset($name) && (is_numeric($name) || $name!='')){
    echo "Name is set and is not empty ";
}else{
    echo 'Name is either not set it\'s empty';
}