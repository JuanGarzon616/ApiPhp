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
}
elseif($_SERVER['REQUEST_METHOD']=='GET'){
    $obtener = file_get_contents("php://input");  
    $_GET = json_decode($obtener, true);
        
    $getUser = new ControllerUser();
    $Result = $getUser->readUsuariosController();
    if($obtener ===''){
        echo json_encode("llego vacio");
    }else{
        echo json_encode("si llego esa vaina");
        echo json_encode($Result);
    } 
}elseif($_SERVER['REQUEST_METHOD']=='PUT'){
    $_GET = json_decode(file_get_contents("php://input"), true);
    //var_dump($loquesea);
    $putUser = new ControllerUser();
    $Result = $putUser->updateUserController();
    if($_GET ===''){
        echo json_encode("llego vacio");
    }else{
        echo json_encode("Se actualizo");
    }
}elseif($_SERVER['REQUEST_METHOD']=='DELETE'){
    $obtener = file_get_contents("php://input");  
    $_GET = json_decode($obtener, true);
        
    $delUser = new ControllerUser();
    $Result = $delUser->deleteUsuarioController();
    if($obtener ===''){
        echo json_encode("llego vacio");
    }else{
        echo json_encode("Se actualizo");
    } 
}

?>