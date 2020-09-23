<?php

require("Conexion.php");

class ConsultasUsuario extends Conexiondb{
    public $conexion;
    public function __construct(){
        $this->conexion = ConexionDb::Conex();
    }
    public function insertNewUser($DatoUser, $Table){
        $stmt = ConexionDb::Conex()->prepare("INSERT INTO $Table(num_usuario, nombre_usuario, segnom_usuario, primer_apellido, segundo_apellido, direccion_usuario, 
        telefono_usuario, segtelefono_usuario, correo_usuario, contraseña_usuario, img_usuario, fk_rolid_rol, fk_tipodocumentoid_documento)
        VALUES (:id,:nam1,:nam2,:nam3,:nam4,:dir,:tel1,:tel2,:mail,:pass,:img,:rol,:tipid')");
        $stmt->bindParam(':id', $id, PDO::PARAM_STR);
        $stmt->bindParam(':nam1', $nam1, PDO::PARAM_STR);
        $stmt->bindParam(':nam2', $nam2, PDO::PARAM_STR);
        $stmt->bindParam(':nam3', $nam3, PDO::PARAM_STR);
        $stmt->bindParam(':nam4', $nam4, PDO::PARAM_STR);
        $stmt->bindParam(':dir', $dir, PDO::PARAM_STR);
        $stmt->bindParam(':tel1', $tel1, PDO::PARAM_STR);
        $stmt->bindParam(':tel2', $tel2, PDO::PARAM_STR);
        $stmt->bindParam(':mail', $mail, PDO::PARAM_STR);
        $stmt->bindParam(':pass', $pass, PDO::PARAM_STR);
        $stmt->bindParam(':img', $img, PDO::PARAM_STR);
        $stmt->bindParam(':rol', $img, PDO::PARAM_INT);
        $stmt->bindParam(':tipid', $tipId, PDO::PARAM_INT);
        if($stmt->execute()){
            return true;
        }
        else{
            return false;
        }
    }

}


?>