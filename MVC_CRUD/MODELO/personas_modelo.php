<?php
class personas_modelo
{
    //almacenamos la coneccion 
    private $db;
    // alamacenamos los personas
    private $personas;
    
    public function __construct()
    {
        require_once("MODELO/conectar.php");
        $this->db=Conectar::conexion();
        $this->personas=array();
    }
    
    public function get_personas()
    {
    require("paguinacion.php");
        $consulta=$this->db->query("SELECT * FROM `datos_usuario`LIMIT $empezar_desde,$tamaño_paguina");
        
        // vamos recorriendo las filas que tiene nustra consulta
        while ($filas = $consulta->fetch(PDO::FETCH_ASSOC)) {
            $this->personas[]=$filas;
        }
        return $this->personas;
        
    }
}
?>