<?php
    require_once("MODELO/datos_modelo.php");
    
    // instaciamos o ejecutamos metodo get_producto y el constructor
    $datos=new Datos_modelo();
    
    // alamacnamos el arreglo
    $matriz_datos=$datos->get_datos();

    require_once("VISTA/datos_vista.php");

?>