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

<?php
$date1=strtotime("12th May 2003");
$date2=strtotime("13th May 2003");

echo ($date2-$date1)/86400;

?>


<?php
$date1=new DateTime("10th May 2002");
$date2=new DateTime("13th May 2003");

$diff=$date1->diff($date2);
echo $diff->y;

?>  
