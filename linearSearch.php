<?php
function linearSearch($list, $data){
    $count=count($list);
    for($i=0; $i<$count; $i++){
        if($data==$list[$i])
        return $i;
    }
    return-1;
}
$list =array(12,3,5,67,9);
$res=linearSearch($list, 9);
if($res!= -1){
    echo "Found";
}else{
    echo "Not Found";
}
?>