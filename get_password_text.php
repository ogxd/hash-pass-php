<?php
include 'get_password.php';
$key = $_GET['key'];
$service = $_GET['service'];
$password = getPassword($key, $service);
echo $password;
?>