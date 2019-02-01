<?php
$_GET['key'] = rand(1000, 9999);
$_GET['service'] = "facebook";
?>

<img src="text_to_image.php?text=<?php include 'get_password.php'; ?>" id='captchaimg'>