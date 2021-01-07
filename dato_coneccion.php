<!DOCTYPE html>
<html lang="es-ES">
  <head>
    <meta charset="utf-8">
    <title>conecion</title>
  </head>
  <body>
    <?php
    
    $db_host="localhost";
    $db_nom="prueba";
    $db_usuario="root";
    $db_contraseña="hh";
    
    $conexion=mysqli_connect($db_host, $db_usuario,$db_contraseña,$db_nom,);
    $consulta="selec *from datos";
    $resultado=mysqli_query($conexion,$consulta);  
    
    ?>
  </body>
</html>