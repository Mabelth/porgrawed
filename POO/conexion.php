<?php

require ('config.php');//accedemos a la información que hay dentro de config.php

/*Creamos una clase que nos va a permitir conectarnos a la base de datos*/

 /*Recuerden que el nombre pude ser a gusto no tiene por qué tener el mismo 
nombre */

 /*Ojo en posts anteriores se explica de la mejor manera posible el contenido 
de POO como por ejemplo
 que significa protected pueden buscar sin problemas que la información 
está.*/

 class Conexion{

   protected $conexion_db;

   public function __construct(){


      //conexion PDO
    try {
    $this->conexion_db=new PDO('mysql:host=localhost;dbname=prueba','root','');
    $this->conexion_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $this->conexion_db->exec("SET CHARACTER SET utf8");
    
    return $this->conexion_db;
    } catch (Exception $e)
    // siempre va a recibir un argumento de tipo exepcion
    {
      die('error:' . $e->getMessage());
    } 

      /* conxion co POO
      
      $this->conexion_db = new mysqli(DB_HOST, DB_USUARIO, DB_CONTRA,DB_NOMBRE);



     //En caso de que la conexion no tenga exito.

       if( $this->conexion_db->connect_errno) {

         echo "Fallo al conectar a MySQL:" . $this->conexion_db->connect_error;
         return;
       }

 //Establecemos el juego de caracteres para poder admitir ñ entre otros caracteres

 $this->conexion_db->set_charset(DB_CHARSET);*/

   }

 }

?> 