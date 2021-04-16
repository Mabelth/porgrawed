<?php
    require_once("MODELO/personas_modelo.php");
    
    // instaciamos o ejecutamos metodo get_producto y el constructor
    $personas=new personas_modelo();
    
    // alamacnamos el arreglo
    $matriz_personas=$personas->get_personas();

    require_once("VISTA/personas_vista.php");
?>