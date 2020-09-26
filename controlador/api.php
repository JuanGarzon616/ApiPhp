<?php
require_once 'ControllerJson.php';
/*
function ParametrosValidos($params){
  
}*/ 

//if(isset($_GET['apicall'])){
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
        
        /*
        if($Result){
            $Response['error'] = false;
            $Response['message'] = "usuario agregado correactamente";
            http_response_code(200);
        }
        else{
            $Response['error'] = true;
            $Response['message'] = "usuario no agregado";
            http_response_code(405);            
        }*/

    }
    /*else{
        http_response_code(405);
    }
/*}else{

}*/

?>