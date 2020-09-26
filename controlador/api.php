<?php
require_once 'ControllerJson.php';

if($_SERVER['REQUEST_METHOD']=='POST'){
    $codificado = file_get_contents("php://input");  
    $_POST = json_decode($codificado, true);
    
    $newUser = new ControllerUser();
    $Result = $newUser->createUserController();
    if($codificado ===''){
        echo json_encode("llego vacio");
    }else{
        echo json_encode("si llego esa vaina");
        echo $codificado;
    }
elseif($_SERVER['REQUEST_METHOD']=='GET'){
    $obtener = file_get_contents("php://input");  
    $_GET = json_decode($obtener, true);
        
    $newUser = new ControllerUser();
    $Result = $newUser->readUsuariosController();
    if($obtener ===''){
        echo json_encode("llego vacio");
    }else{
        echo json_encode("si llego esa vaina");
        echo $codificado;
    }
}

?>