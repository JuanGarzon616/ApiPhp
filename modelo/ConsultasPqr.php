<?php

require("Conexion.php");

class ConsultasPqr extends ConexionDb{

    public function creatPqrModel($datosModel, $tabla){
        $stmt = ConexionDb::Conex()->prepare("INSERT INTO $tabla (Id_pqr, asunto_pqr, descripcion_pqr, fecha_pqr, estado_pqr, fk_tipo_pqrid_tipqr, fk_empresaid_empresa,
        fk_usuario_num_usuario, fk_empresanit_empresa, fk_usuariotipo_documentopid_documento, respuesta_pqr)
        VALUES (:Id_pqr, :asunto_pqr, :descripcion_pqr, :fecha_pqr, :estado_pqr, :fk_tipo_pqrid_tipqr, :fk_empresaid_empresa,
        :fk_usuario_num_usuario, :fk_empresanit_empresa, :fk_usuariotipo_documentopid_documento, :respuesta_pqr)");
        
        $stmt->bindParam(":Id_pqr", $DatosModel["Id_pqr"], PDO::PARAM_STR);
        $stmt->bindParam(":asunto_pqr", $DatosModel[""asunto_pqr], PDO::PARAM_STR);
        $stmt->bindParam(":descripcion_pqr", $DatosModel[""descripcion_pqr], PDO::PARAM_STR);
        $stmt->bindParam(":fecha_pqr", $DatosModel[""fecha_pqr], PDO::PARAM_STR);
        $stmt->bindParam(":estado_pqr", $DatosModel["" estado_pqr], PDO::PARAM_STR);
        $stmt->bindParam(":fk_tipo_pqrid_tipqr,", $DatosModel[""fk_tipo_pqrid_tipqr,], PDO::PARAM_STR);
        $stmt->bindParam(":fk_empresaid_empresa", $DatosModel[""fk_empresaid_empresa], PDO::PARAM_STR);
        $stmt->bindParam(":fk_usuario_num_usuario", $DatosModel[""fk_usuario_num_usuario], PDO::PARAM_STR);
        $stmt->bindParam(":fk_empresanit_empresa", $DatosModel[""fk_empresanit_empresa], PDO::PARAM_STR);
        $stmt->bindParam(":fk_usuariotipo_documentopid_documento", $DatosModel[""fk_usuariotipo_documentopid_documento], PDO::PARAM_STR);
        $stmt->bindParam(":respuesta_pqr", $DatosModel[""respuesta_pqr], PDO::PARAM_STR);
        $stmt->bindParam(":created", $DatosModel[""created], PDO::PARAM_STR);

        if($stmt->execute() ) {
            return true;
        }else{
            return false;
        }
    }
}

?>