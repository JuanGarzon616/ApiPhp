<?php

require("Conexion.php");

class ConsultasUsuario extends Conexiondb{
    private $conexion;
    public function __construct( ){
        $this->conexion = Conexiondb::Conex();
    }
    public function insertNewUser($DatoUser, $Table){
        $stmt = Conexiondb::Conex()->prepare("INSERT INTO $Table(num_usuario, nombre_usuario, segnom_usuario, primer_apellido, segundo_apellido, direccion_usuario, 
        telefono_usuario, segtelefono_usuario, correo_usuario, contraseña_usuario, img_usuario, fk_rolid_rol, fk_tipodocumentoid_documento)
        VALUES (:id,:nam1,:nam2,:nam3,:nam4,:dir,:tel1,:tel2,:mail,:pass,:img,:rol,:tipid')");
        $stmt->bindParam(':id', $DatoUser['ide'], PDO::PARAM_STR);
        $stmt->bindParam(':nam1', $DatoUser['nom1'], PDO::PARAM_STR);
        $stmt->bindParam(':nam2', $DatoUser['nom2'], PDO::PARAM_STR);
        $stmt->bindParam(':nam3', $DatoUser['nom3'], PDO::PARAM_STR);
        $stmt->bindParam(':nam4', $DatoUser['nom4'], PDO::PARAM_STR);
        $stmt->bindParam(':dir', $DatoUser['dir'], PDO::PARAM_STR);
        $stmt->bindParam(':tel1', $DatoUser['tel1'], PDO::PARAM_STR);
        $stmt->bindParam(':tel2', $DatoUser['tel2'], PDO::PARAM_STR);
        $stmt->bindParam(':mail', $DatoUser['mail'], PDO::PARAM_STR);
        $stmt->bindParam(':pass', $DatoUser['contra'], PDO::PARAM_STR);
        $stmt->bindParam(':img', "../vista/asset/ImgUsers/default.jpg", PDO::PARAM_STR);
        $stmt->bindParam(':rol', 3, PDO::PARAM_INT);
        $stmt->bindParam(':tipid', $DatoUser['tipid'], PDO::PARAM_INT);
        if($stmt->execute()){
            return true;
        }
        else{
            return false;
        }
    }

}


?>