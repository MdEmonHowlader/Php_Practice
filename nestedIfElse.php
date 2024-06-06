<?php
$ag=70;
// if($ag>=18){
//     echo "Yes you can vote";
// }elseif($ag==17){
//     echo "Please wait one more years";
// }elseif($ag==16){
//     echo "Please wait Two more years";
// }else{
//     echo "Please Try later";
// }

// Nested if else
if($ag>=18){
    if($ag<66){
        echo "Yes you can Vote";
    }else{
        echo "You cannot vote";
    }
}else{
    echo "Yes you can vote";
}
?>