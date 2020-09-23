<?php


require("../php-jwt-master/src/JWT.php");

use Firebase\JWT\JWT;

$time = time();
$key = "example_key";
$token = array(
    'iat' => $time,
    'exp' => $time + (60*2),
    'nomUsu' => "javier",
    'idUsuario' => '1'
);
$jwt = JWT::encode($token, $key);
$decode = JWT::decode($jwt, $key, array('HS256'));
print_r($jwt);
echo "<br>";
print_r($decode);

?>