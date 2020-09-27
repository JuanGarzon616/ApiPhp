<?php

require("Conexion.php");

class ConsultasPqr extends ConexionDb{

    public function creatPqrModel($datosModel, $tabla){
        $stmt = ConexionDb::Conex()->prepare("INSERT INTO $tabla (Id_pqr, asunto_pqr, descripcion_pqr, fecha_pqr, estado_pqr, fk_tipo_pqrid_tipqr, fk_empresaid_empresa,
        fk_usuario_num_usuario, fk_empresanit_empresa, fk_usuariotipo_documentopid_documento, respuesta_pqr)
        VALUES (:Id_pqr, :asunto_pqr, :descripcion_pqr, :fecha_pqr, :estado_pqr, :fk_tipo_pqrid_tipqr, :fk_empresaid_empresa,
        :fk_usuario_num_usuario, :fk_empresanit_empresa, :fk_usuariotipo_documentopid_documento, :respuesta_pqr)");
        
        $stmt->bindParam(":Id_pqr", $DatosModel["Id_pqr"], PDO::PARAM_STR);
        $stmt->bindParam(":asunto_pqr", $DatosModel["asunto_pqr"], PDO::PARAM_STR);
        $stmt->bindParam(":descripcion_pqr", $DatosModel["descripcion_pqr"], PDO::PARAM_STR);
        $stmt->bindParam(":fecha_pqr", $DatosModel["fecha_pqr"], PDO::PARAM_STR);
        $stmt->bindParam(":estado_pqr", $DatosModel["estado_pqr"], PDO::PARAM_STR);
        $stmt->bindParam(":fk_tipo_pqrid_tipqr,", $DatosModel["fk_tipo_pqrid_tipqr"], PDO::PARAM_STR);
        $stmt->bindParam(":fk_empresaid_empresa", $DatosModel["fk_empresaid_empresa"], PDO::PARAM_STR);
        $stmt->bindParam(":fk_usuario_num_usuario", $DatosModel["fk_usuario_num_usuario"], PDO::PARAM_STR);
        $stmt->bindParam(":fk_empresanit_empresa", $DatosModel["fk_empresanit_empresa"], PDO::PARAM_STR);
        $stmt->bindParam(":fk_usuariotipo_documentopid_documento", $DatosModel["fk_usuariotipo_documentopid_documento"], PDO::PARAM_STR);
        $stmt->bindParam(":respuesta_pqr", $DatosModel["respuesta_pqr"], PDO::PARAM_STR);

        if($stmt->execute() ) {
            return true;
        }else{
            return false;
        }
    }

    public function readPqrmodel($datosModel, $tabla){
        $stmt = ConexionDb::Conex()->prepare("SELECT Id_pqr, asunto_pqr, descripcion_pqr, fecha_pqr, estado_pqr, fk_tipo_pqrid_tipqr, fk_empresaid_empresa,
        fk_usuario_num_usuario, fk_empresanit_empresa, fk_usuariotipo_documentopid_documento, respuesta_pqr, created FROM $Table");
        $stmt->execute();

        $stmt->bindColumn("Id_pqr", $Id_pqr);
        $stmt->bindColumn("asunto_pqr", $asunto_pqr);
        $stmt->bindColumn("descripcion_pqr", $descripcion_pqr);
        $stmt->bindColumn("fecha_pqr", $fecha_pqr);
        $stmt->bindColumn("estado_pqr", $estado_pqr);
        $stmt->bindColumn("fk_tipo_pqrid_tipqr", $fk_tipo_pqrid_tipqr);
        $stmt->bindColumn("fk_empresaid_empresa", $fk_empresaid_empresa);
        $stmt->bindColumn("fk_usuario_num_usuario", $fk_usuario_num_usuario);
        $stmt->bindColumn("fk_empresanit_empresa", $fk_empresanit_empresa);
        $stmt->bindColumn("fk_usuariotipo_documentopid_documento", $fk_usuariotipo_documentopid_documento);
        $stmt->bindColumn("respuesta_pqr", $respuesta_pqr);
        $Pqrs = array();

        while ($fila = $stmt->fetch(PDO::FETCH_BOUND)){

            $user = array();

            $user["Id_pqr"] = utf8_encode($Id_pqr);
            $user["asunto_pqr"] = utf8_encode($asunto_pqr);
            $user["descripcion_pqr"] = utf8_encode($descripcion_pqr);
            $user["fecha_pqr"] = utf8_encode($fecha_pqr);
            $user["estado_pqr"] = utf8_encode($estado_pqr);
            $user["fk_tipo_pqrid_tipqr"] = utf8_encode($fk_tipo_pqrid_tipqr);
            $user["fk_empresaid_empresa"] = utf8_encode($fk_empresaid_empresa);
            $user["fk_usuario_num_usuario"] = utf8_encode($fk_usuario_num_usuario);
            $user["fk_empresanit_empresa"] = utf8_encode($fk_empresanit_empresa);
            $user["fk_usuariotipo_documentopid_documento"] = utf8_encode($fk_usuariotipo_documentopid_documento);
            $user["respuesta_pqr"] = utf8_encode($respuesta_pqr);

            array_push ($Pqrs, $user);
        }
        
    return $Pqrs;
    }

    public Function updatePqrModel ($datosModel, $tabla){
        $stmt = ConexionDb::Conex()->prepare("UPDATE $tabla set estado_pqr = 
        :estado_pqr WHERE Id_pqr = Id_pqr"); 

        $stmt->bindParam (":estado_pqr", $datosModel["estado_pqr"], PDO::PARAM_STR);
        $stmt->bindParam (":Id_pqr", $DatosModel["Id_pqr"], PDO::PARAM_STR); 
        if($stmt->execute()){
            echo " Actualizacion Exitosa";
        }else{
            echo "No se pudo hacer la Actualizacion";
        }
    }

    public Function deletetePqrModel ($Id_pqr, $tabla){
        $stmt =  ConexionDb::Conex()->prepare("DELETE FROM $tabla WHERE Id_pqr = :Id_pqr");
        $stmt->bindParam (":Id_pqr", $Id_pqr,  PDO::PARAM_INT);
        if($stmt->execute()){
            echo "Pqr eliminada correctamente";
        }else{
            echo "La Pqr no se pudo eliminar";
        }
    }
}




?>