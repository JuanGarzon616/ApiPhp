<?php

require("../modelo/Consultas.php");

class ControllerUser{
    private $id;
    private $tipId;
    private $nam1;
    private $nam2;
    private $nam3;
    private $nam4;
    private $mail;
    private $dir;
    private $tel1;
    private $tel2;
    private $img;
    private $rol;
    private $pass;

    public function __construct($id, $tipId, $nam1, $nam2, $nam3, $nam4, $mail, $dir, $tel1, $tel2, $img = "../vista/asset/ImgUsers/default.jpg", $rol = 2, $pass){
        $this->id = $id;
        $this->
    }

    public function hashPass($pass){
        $PassHashed = password_hash($pass, PASSWORD_DEFAULT);
        return $PassHashed;
    }

    public function createUserController(){
         
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