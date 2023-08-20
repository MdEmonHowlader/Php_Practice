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
 echo count($name1);




$sampel1=[
    [1,2,3,4,5],
    [11,22,33,44,555],
    [111,122,33,44,5,[8,7,6,5]]
];
//print_r($sampel1);
echo $sampel1[2][3];