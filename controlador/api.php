<?php
require_once 'ControllerJson.php';
/*
function ParametrosValidos($params){
  
}*/ 

//if(isset($_GET['apicall'])){
    if($_SERVER['REQUEST_METHOD']=='POST'){
        /*$PostData = json_decode(file_get_contents("php://input"), true);
        
        $newUser = new ControllerUser($PostData['ide'],$PostData['tipodoc'],$PostData['nom1'],$PostData['nom2'],$PostData['nom3'],$PostData['nom4'],$PostData['mail'],$PostData['dir'],$PostData['tel1'],$PostData['tel2'],$PostData['contra']);*/

        $parray = array(
            "id" => $_POST['identi'],
            "tidoc" => $_POST['tipodoc'],
            "nam1" => $_POST['nam1'],
            "nam2" => $_POST['nam2'],
            "nam3" => $_POST['nam3'],
            "nam4" => $_POST['nam4'],
            "correo" => $_POST['correo'],
            "dir" => $_POST['direcc'],
            "tele1" => $_POST['tele1'],
            "tele2" => $_POST['tele2'],
            "contra" => $_POST['pass1']
        );
        
        $newUser = new ControllerUser();
        $Result = $newUser->createUserController();
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