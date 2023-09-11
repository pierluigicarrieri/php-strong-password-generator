<?php

$lengthOfPw = (isset($_GET['pwLength']) ? $_GET['pwLength'] : 0);

function passwordGenerator ($length) {
    $password = substr(str_shuffle(str_repeat("0987654321abcdefghijklmnnopqrstuvxxyzABCDEFGHIJKLMNOPQRSTUVWXYZ", $length)), 1, $length);
    return $password;
};

$generatedPassword = passwordGenerator($lengthOfPw);

?>