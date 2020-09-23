<?php

require("../modelo/Consultas.php");

class Controlleruser{

    public function HashPass($pass){
        $PassHashed = password_hash($pass, PASSWORD_DEFAULT);
        return $PassHashed;
    }

    public function CreateUserController($DatosUser){

        $Rol = 2;
        $Img = "../vista/asset/ImgUsers/default.jpg";

         
        /*
        $DatosUser['rol'] = $Rol;
        $DatosUser['img'] = $Img;*/
        /*$PassTo = $DatosUser["contra"];

        $NewPass = array("contra" => HashPass($PassTo)); 
        $UserFull = array_replace($DatosUser, $NewPass);
        var_dump($DatosUser);*/


        $respuesta = ConsultasUsuario::insertNewUser($DatosUser, "usuario");
        return $respuesta;
    }
}

?>