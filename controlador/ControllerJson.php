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

    public function __construct($userData/*$id, $tipId, $nam1, $nam2, $nam3, $nam4, $mail, $dir, $tel1, $tel2, $img = "../vista/asset/ImgUsers/default.jpg", $rol = 2, $pass*/){
        $this->id    = $userData['ide'];
        $this->tipId = $userData['tipodoc'];
        $this->$nam1 = $userData['nom1'];
        $this->$nam2 = $userData['nom2'];
        $this->$nam3 = $userData['nom3'];
        $this->$nam4 = $userData['nom4'];
        $this->$mail = $userData['mail'];
        $this->$dir  = $userData['dir'];
        $this->$tel1 = $userData['tel1'];
        $this->$tel2 = $userData['tel2'];
        $this->img   = "../vista/asset/ImgUsers/default.jpg";
        $this->rol   = 2;
        $this->pass  = $this->hashPass($userData['contra']);
    }

    public function hashPass($pass){
        $PassHashed = password_hash($pass, PASSWORD_DEFAULT);
        return $PassHashed;
    }

    public function createUserController(){
        $user = new ControllUser;
        $respuesta = ConsultasUsuario::insertNewUser($user, "usuario");
        return $respuesta;
    }
}

?>