

  <?php
    //nos conectamos a la base de datos
    require "conexion.php";
    /*Aquí vemos el primer ejemplo de herencia donde la clase Devuelve Datos utiliza
 aquellas variables y métodos definidas en el archivo conexión php y que estas sean
  accesibles es decir dependiendo de los modificadores de acceso que esta tenga  */

    class DevuelveDatos extends Conexion
    {

        public function __construct()
        {

            /*Llamamos al constructor de la clase padre mediante el uso de parent lo que nos permite ejecutar el constructor de
    la clase conexión y el código extra que agreguemos en esta función que lo hereda*/


            parent::__construct();
        }


        /*Método que se encarga de hacer la consulta SQL y devuelve un array con los registros  */

        public function get_Datos($dato)
    {
    //query de PDO
      $sql="SELECT * FROM datos where id='".$dato."'";
    
      $sentencia=$this->conexion_db->prepare($sql);
      $sentencia->execute(array());
      $resultado=$sentencia->fetchAll(PDO::FETCH_ASSOC);
      $sentencia->closeCursor();
      return $resultado;
      $this->conexion_db=null;
      
      
    /*se ocupacuando hacemos consulta con POO
            //Podemos usar la variable conexion_db gracias a la herencia


            //creamos una consulta SQL 
            $resultado = $this->conexion_db->query('SELECT * FROM datos where id="'.$dato.'"');

            //creamos un array asociativo que contendrá toda la información que estamos demandando de la mase de datos.

            $Datos = $resultado->fetch_all(MYSQLI_ASSOC);


            //pedimos que nos devuelva el array
            return $Datos;*/
        }
    }
    ?>