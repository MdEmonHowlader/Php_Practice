<?php
$file=fopen("./data.text", "w+");
fwrite($file, "Hi Emon");
fclose($file);

?>

<?php
$file=fopen("./data.text", "r");
while(($data=fgets($file,5000))!=false){
    echo $data;
}

?> 
<?php
file_put_contents("./data.text","\n12\n".FILE_APPEND)

?>