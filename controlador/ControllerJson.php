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
        $this->id    = $id;
        $this->tipId = $tipId;
        $this->nam1 = $nam1;
        $this->nam2 = $nam2;
        $this->nam3 = $nam3;
        $this->nam4 = $nam4;
        $this->mail = $mail;
        $this->dir  = $dir;
        $this->tel1 = $tel1;
        $this->tel2 = $tel2;
        $this->img   = "../vista/asset/ImgUsers/default.jpg";
        $this->rol   = 2;
        $this->pass  = $this->hashPass($pass);
    }

    public function hashPass($pass){
        $PassHashed = password_hash($pass, PASSWORD_DEFAULT);
        return $PassHashed;
    }

    public function createUserController(){
        $user = new ControllerUser;
        $respuesta = ConsultasUsuario::insertNewUser($user, "usuario");
        return $respuesta;
    }
}

?>