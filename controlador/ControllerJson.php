<?php

require("../modelo/Consultas.php");

class ControllerUser{
    public $id;
    public $tipId;
    public $nam1;
    public $nam2;
    public $nam3;
    public $nam4;
    public $mail;
    public $dir;
    public $tel1;
    public $tel2;
    public $img;
    public $rol;
    public $pass;

    public function __construct($id, $tipId, $nam1, $nam2, $nam3, $nam4, $mail, $dir, $tel1, $tel2, $pass){
        $this->id    = $id;
        $this->tipId = $tipId;
        $this->nam1  = $nam1;
        $this->nam2  = $nam2;
        $this->nam3  = $nam3;
        $this->nam4  = $nam4;
        $this->mail  = $mail;
        $this->dir   = $dir;
        $this->tel1  = $tel1;
        $this->tel2  = $tel2;
        $this->img   = "../vista/asset/ImgUsers/default.jpg";
        $this->rol   = 2;
        $this->pass  = $this->hashPass($pass);
    }

    public function hashPass($pass){
        $PassHashed = password_hash($pass, PASSWORD_DEFAULT);
        return $PassHashed;
    }

    //$user = new ControllerUser;

    public function createUserController($user){
        
        $respuesta = ConsultasUsuario::insertNewUser($user, "usuario");
        return $respuesta;
    }
}

?>