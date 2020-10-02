<?php
header('Content-Type: application/json');
require('../modelo/ConsultasPqr.php');
/**
 * 
 */
class ControllerPqr{
    public $asunto;
    public $descripcion;
    public $tipPqr;
    public $idEmpresa;
    public $numUser;
    public $tipNumuser;
    public $nitEmpresa;

    public function __construct(){
        if(!empty($_POST['asunto'])){
            $this->id = 
        }
    }


    public function createPqrController(){
        $respuesta1 = ConsultasPqr::creatPqrModel($this, "pqr");
        return $respuesta1;
    }


    public function readPqrController(){
        $respuesta = ConsultasPqr::readPqrmodel("pqr");
        return $respuesta;
    }

    public function updatePqrController($Id_pqr, $estado_pqr){
        $datosController = array("Id_pqr" => $Id_pqr, "estado_pqr" => $estado_pqr);
        $respuesta = ConsultasPqr::updatePqrModel($datosController, "pqr");
        return $respuesta;
    }

    public function deletePqrController($Id_pqr){
        $respuesta = ConsultasPqr::deletePqrModel($Id_pqr, "pqr");
        return $respuesta;
    }

}

?>