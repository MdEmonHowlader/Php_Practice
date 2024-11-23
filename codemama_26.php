<?php 
$input = trim(fgets(STDIN));
if(is_numeric($input) && (int)$input>0){
    $year = (int)$input;
if(($year % 4 == 0 && $year % 100 != 0 )|| $year % 400 == 0){
    echo $year . " is a leap year"; 
}else{
    echo $year . " is not a leap year";
}

}




?>
