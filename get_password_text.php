<style>
    * {
        font-family: Consolas;
        font-size: 1em;
        color: #444444;
    }
    div {
        height: 100vh;
        line-height: 100vh;
        text-align: center;
    }
</style>

<?php
$_GET['key'] = 1234;
$_GET['service'] = "facebook";
?>

<div>
Your password for <b><?php echo $_GET['service'] ?></b> is : <b><?php include 'get_password.php'; ?></b>
</div>