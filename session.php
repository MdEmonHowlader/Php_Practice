<?php 
session_start();

$username = $_SESSION['username']='Emon';
$userId = $_SESSION['userId']='1223';

echo "Username: . $username\n";
echo "UserId: . $userId";

?>