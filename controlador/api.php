<?php
require_once 'ControllerJson.php';
/*
function ParametrosValidos($params){
  
}*/ 

//if(isset($_GET['apicall'])){
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $PostData = json_decode(file_get_contents("php://input"), true);
        
        $neWUser = new ControllerUser($PostData['ide'],$PostData['tipodoc'],$PostData['nom1'],$PostData['nom2'],$PostData['nom3'],$PostData['nom4'],$PostData['mail'],$PostData['dir'],$PostData['tel1'],$PostData['tel2'],$PostData['contra']);
        $Result = $neWUser->createUserController($neWUser);
        if($Result){
            $Response['error'] = false;
            $Response['message'] = "usuario agregado correactamente";
            http_response_code(200);
        }
        else{
            $Response['error'] = true;
            $Response['message'] = "usuario no agregado";
            //http_response_code(405);            
        }
    }
    /*else{
        http_response_code(405);
    }
/*}else{

}*/

?>