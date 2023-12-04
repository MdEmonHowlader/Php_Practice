<?php
$file=fopen("./data.text", "w+");
fwrite($file, "Hi Emon");
fclose($file);

?>