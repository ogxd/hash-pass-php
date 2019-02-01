<?php

function getHash($str) {
    $chars = str_split($str);
    $stack = array();
    foreach ($chars as $char) {
        array_push($stack, ord($char));
    }
    return $stack;
}

function getPassword($key, $service) {

    $service = strtolower($service);

    $validchars = "ERTYUPSDFGHJKXCVBNertyupsdfghjkxcvbn123456789";
    $specialchars = "/*-";
    
    $i = 0;
    $seed = -7;
    
    foreach (getHash($key . $service) as $val) {
        $seed += $i++ * (($number % 2 == 0) ? 1 : -1) + $val * $val;
    }

    srand($seed);
    
    $password = $specialchars[rand(0, strlen($specialchars) - 1)];
    for ($i = 1; $i <= 13; $i++) {
        $password = $password . $validchars[rand(0, strlen($validchars) - 1)];
    }

    return $password;
}
?>