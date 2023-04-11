<?php 
function randomPassword($lunghezza){
    $caratteri = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()_+{}[];,.<>?';
    $password = '';
    for ($i = 0; $i < $lunghezza; $i++){
        $index = rand(0, strlen($caratteri) - 1);
        $password .= $caratteri[$index];
    }
    return $password;
}