<?php
$num1=(float)fgets(STDIN);
$num2=(float)fgets(STDIN);
$num3=(float)fgets(STDIN);
$max=$num1;
if($num2>$max){
    $max=$num2;
}if($num3>$max){
    $max=$num3;
}
echo $max;
?>
