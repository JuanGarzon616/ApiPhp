<?php

require_once 'ConsultasPqr.php';
/**
 * 
 */
class ControllerPqr
{
    public function createPqrController(){
        $respuesta1 = ConsultasEmpresa::creatPqrModel($this, "pqr");
        return $respuesta1;
    }
}

public function readPqrController(){
    $respuesta = Datos::readPqrmodel("pqr");
    return $respuesta;
}

public function updatePqrController($Id_pqr, $estado_pqr){
    $datosController = array("Id_pqr" => $Id_pqr, "estado_pqr" => $estado_pqr);
    $respuesta = Datos::updatePqrModel($datosController, "pqr");
    return $respuesta;
}

public function deletePqrController($Id_pqr){
    $respuesta = Datos::deletePqrModel($Id_pqr, "pqr");
    return $respuesta;
}

}

?>