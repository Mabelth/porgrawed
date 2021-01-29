<!DOCTYPE html>
<html lang="es-ES">

<head>
    <meta charset="utf-8">
    <title>conecion</title>
</head>

<body>
    <?php
    $busqueda=$_GET["buscar"]; /* del otro formulario busca la misma variable y la guarda aqui */

    require("datos.php");

    $conexion = mysqli_connect($db_host, $db_usuario, $db_contraseña, $db_nom);

    if (mysqli_connect_errno()) {
        echo "fallo en bd";
        exit();
    } else {
        echo " SE CONECTO";
    }
    mysqli_select_db($conexion, $db_nom) or die("no se encuentra la bd");
    mysqli_set_charset($conexion, "utf8");
    // 
    // 
    $consulta = "selec *from datos where nom like '$busqueda'";
    $resultado = mysqli_query($conexion, $consulta);


    /*<table class="default">
  
    <tr>
  
      <td>Celda 1</td>
  
      <td>Celda 2</td>
  
      <td>Celda 3</td>
  
    </tr>
  
    <tr>
  
      <td>Celda 4</td>
  
      <td>Celda 5</td>
  
      <td>Celda 6</td>
  
    </tr>
  
  </table>*/
    mysqli_close(exit);

    ?>
</body>

</html>  