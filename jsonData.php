<?php
$student=array(
    'Name'=>'Emon',
    'Age'=>'21',
    'ID'=>'1732',
    'Home'=>'Mahilara'
);
print_r($student);
$serialized=serialize($student);
echo $serialized;
echo "\n";

$newStudent=unserialize($serialized);
print_r($newStudent);

$jsonData= json_encode($student);
echo $jsonData;

$student2=json_decode($jsonData);
print_r($student2);


?>