<?php
require_once 'ControllerJson.php';
/*
function ParametrosValidos($params){
  
}*/ 

//if(isset($_GET['apicall'])){
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $PostData = json_decode(file_get_contents("php://input"), true);
        
        $NeWUser = new Controlleruser();
        $Result = $NeWUser->CreateUserController($PostData);
        if($Result){
            $Response['error'] = false;
            $Response['message'] = "usuario agregado correactamente";
            http_response_code(200);
        }
        else{
            $Response['error'] = true;
            $Response['message'] = "usuario no agregado";
            http_response_code(405);            
        }
    }else{
        http_response_code(405);
    }
/*}else{

}*/

?>