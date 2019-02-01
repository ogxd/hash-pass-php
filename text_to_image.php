<?php
$text = $_GET["text"];
$height = 50;

$font = 'consolas.ttf';
$fontSize = 0.50 * $height;
$width = 0.37 * $height * strlen($text);

$im = imagecreatetruecolor($width, $height);	
$textColor = imagecolorallocate($im, 0, 0, 0);			

$backgroundColor = imagecolorallocate($im, 255, 255, 200);

imagefill($im, 0, 0, $backgroundColor);	
imagettftext($im, $fontSize, 0, 0, 0.75 * $height, $textColor, $font, $text);	

header('Content-Type: image/png'); // Defining the image type to be shown in browser window
imagepng($im); // Showing image
imagedestroy($im); // Destroying image instance
?>