<?php

$codificado = file_get_contents("php://input");  
$_POST = json_decode($codificado, true);

var_dump($codificado);
//var_dump($_POST);

if($codificado ===''){
    echo json_encode("llego vacio");
}else{
    echo json_encode("si llego esa vaina");
    echo $codificado;
}

var_dump($_POST);


?>