<?php

require("Conexion.php");

class ConsultasUsuario extends Conexiondb{
    public $conexion;
    public function __construct(){
        $this->conexion = ConexionDb::Conex();
    }
    public function insertNewUser($DatoUser, $Table){
        $stmt = ConexionDb::Conex()->prepare("INSERT INTO usuario (num_usuario, nombre_usuario, segnom_usuario, primer_apellido, segundo_apellido, direccion_usuario, 
        telefono_usuario, segtelefono_usuario, correo_usuario, contraseña_usuario, img_usuario, fk_rolid_rol, fk_tipodocumentoid_documento)
        VALUES (:id,:nam1,:nam2,:nam3,:nam4,:dir,:tel1,:tel2,:mail,:pass,:img,:rol,:tipid)");
        $stmt->bindParam(':id',    $DatoUser->id,    PDO::PARAM_STR);
        $stmt->bindParam(':nam1',  $DatoUser->nam1,  PDO::PARAM_STR);
        $stmt->bindParam(':nam2',  $DatoUser->nam2,  PDO::PARAM_STR);
        $stmt->bindParam(':nam3',  $DatoUser->nam3,  PDO::PARAM_STR);
        $stmt->bindParam(':nam4',  $DatoUser->nam4,  PDO::PARAM_STR);
        $stmt->bindParam(':dir',   $DatoUser->dir,   PDO::PARAM_STR);
        $stmt->bindParam(':tel1',  $DatoUser->tel1,  PDO::PARAM_STR);
        $stmt->bindParam(':tel2',  $DatoUser->tel2,  PDO::PARAM_STR);
        $stmt->bindParam(':mail',  $DatoUser->mail,  PDO::PARAM_STR);
        $stmt->bindParam(':pass',  $DatoUser->pass,  PDO::PARAM_STR);
        $stmt->bindParam(':img',   $DatoUser->img,   PDO::PARAM_STR);
        $stmt->bindParam(':rol',   $DatoUser->img,   PDO::PARAM_INT);
        $stmt->bindParam(':tipid', $DatoUser->tipId, PDO::PARAM_INT);
        var_dump($DatoUser);
        if($stmt->execute()){
            return true;
        }
        else{
            return false;
        }
    }

}


?>