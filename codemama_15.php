<?php

$a= (int)fgets(STDIN);
$b= trim(fgets(STDIN));
$c= (int)fgets(STDIN);
 
$line2=explode(" ", $b);
if(in_array($c, $line2)){
    foreach($line2 as $key2=>$val2){
        if($val2==$c){
            echo $key2;
        }
    }
}else{
    echo "Element not found";
}


?>