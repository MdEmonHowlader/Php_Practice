<?php
fscanf(STDIN, "%s", $num);
$count=0;
for($i=1; $i<strlen($num); $i++){
    if($num[$i]=='0' && ($num[0]=='1' || $num[$i-1]=='1')&&($num[strlen($num)-1]!='0' || $num[$i+1]!='0')&&($num[$i-1]=='1')&&($num[$i+1]=='1')){
        $count++;
    }
}
echo $count;
?>