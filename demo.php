<style>
    * {
        font-family: Consolas;
        font-size: 12px;
        color: #444444;
    }
</style>

<?php
include 'get_password.php';
$key = '1234';
$service = ['Facebook', 'Github', 'Google', 'Mail', 'Spotify', 'FTP', 'Gitlab', 'Amazon', 'Aliexpress'];
$service = $service[mt_rand(0, count($service) - 1)];
$password = getPassword($key, $service);
?>

<b>Key: </b><?php echo $key; ?><br><i>Your master password. Keep it in your brain.</i><br>
<br>
<b>Service: </b><?php echo $service; ?><br><i>The service asking for a password. Keep it straightforward.</i><br>
<br>
<b>Password: </b><?php echo $password; ?><br><i>Excluded chars are QWAZMILOqwazmilo0, Included symbols are /*-.</i><br>
<i><?php echo round(((pow(45, 12)*4)/20000000)/86400); ?> days are required to crack this password knowing the charset.</i><br>
<i><?php echo round(((pow(58, 12)*20)/20000000)/86400); ?> days are required to crack this password without knowing the charset.</i><br>
<br>
<img src="text_to_image.php?text=<?php echo $password; ?>" id='captchaimg'>