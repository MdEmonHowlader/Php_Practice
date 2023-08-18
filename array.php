<?php

$name= "emon ";
$student =array(
    "Emon",
    123,
    "Q"
);

 for($i=0; $i<count($student); $i++){
     echo $student[$i],"\n";
 }
 var_dump($student);
echo ($name);

// if it is in string format then it will be like this.....
 $name1= explode(', ', 'emon, limon, shaib');
 $name1String=join(', ',$name1);


 echo $name1String; 
// echo count($name1);