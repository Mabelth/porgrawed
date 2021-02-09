<!DOCTYPE html>
<html lang="es-ES">

<head>
    <meta charset="utf-8">
    <title>conecion</title>
</head>

<body>
    <?php
    $conexion= new mysqli("localhost","root","","prueba");
    if($conexion->connect_errno){
    echo "fallo de conexion".$conexion->connect_errno;
    }
    // mysqli_set_charset($conexion,"utf8");//forma antigua procedimental
    $conexion->set_charset("utf8");
    $sql="select * from datos";
    $resultado=$conexion->query($sql);
    if($conexion->errno){die ($conexion->error);}
    while($fila=$resultado->fetch_assoc()) {
        echo "<table><tr><td>";
        echo $fila['id'] . "</td><td>";
        echo $fila['nom'] . "</td><td>";
        echo $fila['apell'] . "</td><td>";
        echo $fila['edad'] . "</td></tr></table>";
        echo "<br>";
    }
    $conexion->close();

    ?>
</body>

</html>