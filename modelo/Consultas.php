<?php

require("Conexion.php");

class ConsultasUsuario extends ConexionDb{
    private $conexion;
    public function __construct( ){
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
        $stmt->bindParam(':rol',   $DatoUser->rol,   PDO::PARAM_INT);
        $stmt->bindParam(':tipid', $DatoUser->tipId, PDO::PARAM_INT);
        var_dump($DatoUser);
        if($stmt->execute()){
            echo "funciono";
        }
        else{
            echo "no funciono";
        }
    }


    public function readUsuarioModel($DatoUser, $Table){
        $stmt = $this->conexion->prepare("SELECT num_usuario, nombre_usuario, segnom_usuario, primer_apellido, segundo_apellido, 
        telefono_usuario,correo_usuario, contraseña_usuario, fk_rolid_rol, fk_tipodocumentoid_documento FROM $table where num_usuario = :id AND fk_tipodocumentoid_documento = :tipDoc");
        $stmt = bindParam(':id',     $DatoUser->id,    PDO::PARAM_STR);
        $stmt = bindParam(':tipDoc', $DatoUser->tipId, PDO::PARAM_STR);
        $stmt->execute();

        $stmt->bindColumn("num_usuario", $num_usuario);
        $stmt->bindColumn("nombre_usuario", $nombre_usuario);
        $stmt->bindColumn("segnom_usuario", $segnom_usuario);
        $stmt->bindColumn("primer_apellido", $primer_apellido);
        $stmt->bindColumn("segundo_apellido", $segundo_apellido);
        $stmt->bindColumn("telefono_usuario", $telefono_usuario);
        $stmt->bindColumn("correo_usuario", $correo_usuario);
        $stmt->bindColumn("contraseña_usuario", $contraseña_usuario);
        $stmt->bindColumn("img_usuario", $img);
        $stmt->bindColumn("fk_rolid_rol", $rol);
        $stmt->bindColumn("created", $created);
        $usuarios = array();

        while ($fila = $stmt->fetch(PDO::FETCH_BOUND)){
            
            $user = array();
            
            $user["num_usuario"] = utf8_encode($num_usuario);
            $user["nombre_usuario"] = utf8_encode($nombre_usuario);
            $user["segnom_usuario"] = utf8_encode($segnom_usuario);
            $user["primer_apellido"] = utf8_encode($primer_apellido);
            $user["segundo_apellido"] = utf8_encode($segundo_apellido);
            $user["telefono_usuario"] = utf8_encode($telefono_usuario);
            $user["correo_usuario"] = utf8_encode($correo_usuario);
            $user["contraseña_usuario"] = utf8_encode($contraseña_usuario);
            $user["img_usuario"] = utf8_encode($img_usuario);
            $user["fk_rolid_rol"] = utf8_encode($fk_rolid_rol);
            $user["created"] = utf8_encode($created);

            array_push($usuarios, $user);
        }
        return $usuarios;
    }
}

?>