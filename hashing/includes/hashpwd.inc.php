<?php

$pwdSignUp = "Dylsons";


$options = [
    'cost' => 12
];


$hashedPwd = password_hash($pwdSignUp, PASSWORD_BCRYPT, $options);


$pwdLogin = "Dylsons";
password_verify($pwdLogin, $hashedPwd);

if(password_verify($pwdLogin, $hashedPwd)){
    echo "They are the same"; 
} else {
    echo "They are not the same!";
}