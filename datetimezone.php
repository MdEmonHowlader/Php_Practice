<?php
date_default_timezone_set('Asia/Dubai');
$mydate= date("h:i:s");
echo  ($mydate);
?>
<?php
$mydate= date_create("2030-5-12");
print_r(date_add($mydate,date_interval_create_from_date_string("43 years")));
?>
<?php
$mydate= date_create();
echo date_timestamp_get($mydate);
?>