<!DOCTYPE html>
<html lang="es-ES">

<head>
    <meta charset="utf-8">
    <title>busqueda_resultado</title>

</head>

<body>
    <?php
    require("datos.php");
    $id = $_GET["id"];
    $nom = $_GET["nom"];
    $apell = $_GET["apell"];
    $edad = $_GET["edad"];


    $conexion = mysqli_connect($db_host, $db_usuario, $db_contraseña, $db_nom);

    if (mysqli_connect_errno()) {
        echo "fallo en bd";
        exit();
    } else {
        echo " SE CONECTO";
    }
    mysqli_select_db($conexion, $db_nom) or die("no se encuentra la bd");
    mysqli_set_charset($conexion, "utf8");
    $consulta = "DELETE FROM `datos` WHERE `datos`.`id` = '$id';";
    $resultado = mysqli_query($conexion, $consulta);
    if ($resultado == false) {
        echo "error en la consuta<br>";
    } else {
        echo "<br>registros eliminados <br><br>";
        /*cuantos registros han sido afectados sea insert, delete o udate*/
       if (mysqli_affected_rows($conexion)==0) 
       {echo "<br> no hay registros eliminados";}
       else
       {echo "Se han eliminado ".mysqli_affected_rows($conexion)." registros";}
    
    }

    mysqli_close(exit);
    ?>

</body>

</html>