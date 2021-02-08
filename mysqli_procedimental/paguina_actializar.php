<!DOCTYPE html>
<html lang="es-ES">

<head>
    <meta charset="utf-8">
    <title>paguina_actualizar</title>
</head>

<body>
    <?php
    $busqueda = $_GET["buscar"]; /* del otro formulario busca la misma variable y la guarda aqui */

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
    $consulta = "SELECT * FROM `datos` WHERE `nom` LIKE '%$busqueda%'";
    /* el % sirve para decir que puede haber caracteres antes o despues */
    $resultado = mysqli_query($conexion, $consulta);
    while ($fila = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
        echo "<form action='actualizar.php' method='get'>";
        echo "<input type='text' name='id' value='" . $fila['id'] . "'><br>";
        echo "<input type='text' name='nom' value='" . $fila['nom'] . "'><br>";
        echo "<input type='text' name='apell' value='" . $fila['apell'] . "'><br>";
        echo "<input type='text' name='edad' value='" . $fila['edad'] . "'><br>";
        echo "<input type='submit' name='enviando' value='actualizar'>";
        echo "</form><br><br";
    }
    mysqli_close(exit);

    ?>
</body>

</html>