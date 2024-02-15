<?php
$file =fopen("./csv.text", "r");
while(($data=fgetcsv($file))!=false){
    // print_r( $data);
    echo $data[0]."\n";
}
?>  