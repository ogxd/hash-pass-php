<?php
include 'get_password.php';
$key = $_GET['key'];
$service = $_GET['service'];
$password = getPassword($key, $service);
?>

<img src="text_to_image.php?text=<?php echo $password; ?>" id='password'>