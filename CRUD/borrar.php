<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="utf-8">
    <title>conecion</title>
</head>
<body>
    <?php
        include ("conexion.php");
        $id=$_GET["id"];
        $base->query("DELETE FROM `datos_usuario` WHERE `datos_usuario`.`id` = '$id'");
        header ("location:index.php")

    ?>
</body>

</html>