<!DOCTYPE html>
<html lang="es-ES">
  <head>
    <meta charset="utf-8">
    <title>conecion</title>
  </head>
  <body>
    <?php
    
   require("datos.php");
    
    $conexion=mysqli_connect($db_host, $db_usuario,$db_contraseña,$db_nom);
    
    if(mysqli_connect_errno()){
    echo "fallo en bd";
      exit();
    }
    ELSE{ ECHO " SE CONECTO";}
    mysqli_select_db($conexion,$db_nom) or die ("no se encuentra la bd");
    mysqli_set_charset($conexion,"utf8");
    // 
    // 
    $consulta="selec *from datos";
    $resultado=mysqli_query($conexion,$consulta);  
    
    mysqli_close(exit);
    
    ?>
  </body>
</html>