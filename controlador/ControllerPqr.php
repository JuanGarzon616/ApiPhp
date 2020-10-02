<?php
header('Content-Type: application/json');
require('../modelo/ConsultasPqr.php');

class ControllerPqr{
    public $asunto;
    public $descripcion;
    public $tipPqr;
    public $idEmpresa;
    public $numUser;
    public $tipNumUser;
    public $nitEmpresa;

    public function __construct(){
        if(!empty($_POST['asunto'])){
            $this->asunto      = $_POST['asunto'];
            $this->descripcion = $_POST['descripcion'];
            $this->tipPqr      = $_POST['tipqr'];
            $this->idEmpresa   = $_POST['idempresa'];
            $this->numUser     = $_POST['numuser'];
            $this->tipNumUser  = $_POST['tipdoc'];
            $this->nitEmpresa  = $_POST['nitempresa'];
        }
    }


    public function createPqrController(){
        $respuesta1 = ConsultasPqr::creatPqrModel($this, "pqr");
        return $respuesta1;
    }


    public function readPqrController(){
        $respuesta = ConsultasPqr::readPqrModel("pqr");
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