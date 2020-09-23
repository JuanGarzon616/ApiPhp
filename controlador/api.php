<?php
require_once 'ControllerJson.php';
/*
function ParametrosValidos($params){
  
}*/ 

//if(isset($_GET['apicall'])){
    if($_SERVER['REQUEST_METHOD']=='POST'){
        /*$PostData = json_decode(file_get_contents("php://input"), true);
        
        $newUser = new ControllerUser($PostData['ide'],$PostData['tipodoc'],$PostData['nom1'],$PostData['nom2'],$PostData['nom3'],$PostData['nom4'],$PostData['mail'],$PostData['dir'],$PostData['tel1'],$PostData['tel2'],$PostData['contra']);*/

        $newUser = new ControllerUser($_POST['identi'],$_POST['tipodoc'],$_POST['nam1'],$_POST['nam2'],$_POST['nam3'],$_POST['nam4'],$_POST['correo'],$_POST['direcc'],$_POST['tele1'],$_POST['tele2'],$_POST['pass1']);
        $Result = $newUser->createUserController($newUser);
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