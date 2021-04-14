<?php
class Datos_modelo
{
    //almacenamos la coneccion 
    private $db;
    // alamacenamos los datos
    private $datos;
    
    public function __construct()
    {
        require_once("MODELO/conectar.php");
        $this->db=Conectar::conexion();
        $this->datos=array();
    }
    
    public function get_datos()
    {
        $consulta=$this->db->query("SELECT * FROM `datos_usuario`");
        
        // vamos recorriendo las filas que tiene nustra consulta
        while ($filas = $consulta->fetch(PDO::FETCH_ASSOC)) {
            $this->datos[]=$filas;
        }
        return $this->datos;
        
    }
    
}
?>