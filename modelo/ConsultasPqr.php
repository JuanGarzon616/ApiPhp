<?php

require("Conexion.php");

class ConsultasPqr extends ConexionDb{
    public function creadPqrmodel($datosModel, $tabla){
        $stmt = ConexionDb::Conex()->prepare("INSERT INTO $tabla (Id_pqr, asunto_pqr, descripcion_pqr, fecha_pqr, estado_pqr, fk_ ");


    }
}

?>