<?php

function getTextImage($text, $height) {	
    $font = './font/monofont.ttf';
    $fontSize = $height * 0.8;
    $width = 0.43 * $height * strlen($text);
    
    $im = imagecreatetruecolor($width, $height);	
    $textColor = imagecolorallocate($im, 0, 0, 0);			
    
    $backgroundColor = imagecolorallocate($im, 255, 255, 200);
    
    imagefill($im, 0, 0, $backgroundColor);	
    imagettftext($im, $fontSize, 0, 0, $height * 0.75, $textColor, $font, $text);		

    imagejpeg($im, NULL, 90); // Showing image
    header('Content-Type: image/jpeg'); // defining the image type to be shown in browser widow
    imagedestroy($im); // Destroying image instance
}

function getHash($str) {
    $chars = str_split($str);
    $stack = array();
    foreach ($chars as $char) {
        array_push($stack, ord($char));
    }
    return $stack;
}

$validchars = "ERTYUIOPSDFGHJKLXCVBNertyuiopsdfghjklxcvbn123456789";
$specialchars = "+-*/";

$key = $_GET["key"];
$service = $_GET["service"];

$i = 0;
$alt = 1;
$seed = -7;

foreach (getHash($key) as $val) {
    if ($number % 2 == 0) {
        $alt = 1;
    } else {
        $alt = -1;
    }
    $i += 1;
    $seed += $i * $alt + $val * $val;
}

foreach (getHash($service) as $val) {
    if ($number % 2 == 0) {
        $alt = 1;
    } else {
        $alt = -1;
    }
    $i += 1;
    $seed += $i * $alt + $val * $val;
}

$k = 7;
function getRandom($min, $max) {
    global $k;
    global $seed;
    $seedi = $seed * $seed * $k - $k;
    $k += $seed - 7 / $seed;
    return (int)($seedi % ($max - $min) + $min);
}

$password = $specialchars[getRandom(0, strlen($specialchars) - 1)];
for ($i = 1; $i <= 13; $i++) {
    $password = $password . $validchars[getRandom(0, strlen($validchars) - 1)];
}

echo $password;
  
?>