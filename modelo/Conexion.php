<?php
class ConexionDb{
    public function Conex(){
        $localhost = "localhost";
        $user      = "root";
        $database  = "lawp";
        $password  = "";

        $link = new PDO("mysql:host=$localhost;dbname=$database",$user,$password);

        return $link;
    }
}
//$obj = new Conexiondb();
//$obj->Conex();
/*
class UsuarioDaoImp extends Conexiondb{
    private $conexion;
    public function __construct( ){
        $this->conexion = Conexiondb::Conex();
    }
    public function getListaUsuarios(){
        $stmt = $this->conexion->prepare("SELECT * FROM usuario");
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
    }
}

$modelo = new UsuarioDaoImp();
$resultado = $modelo->getListaUsuarios();
if($resultado){
    foreach($resultado as $row=>$item){
        echo $item["nombre_usuario"]."<br>";
    }
}*/

?>