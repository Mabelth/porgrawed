<!DOCTYPE html>
<html lang="es-ES">

<head>
    <meta charset="utf-8">
    <title>cokies</title>
</head>

<body>
<?php
    if(!$_COOKIE["Paisaje_seleccionado"])
    {
    header("location:pag1.php");
    }
    else 
    if(!$_COOKIE["Paisaje_seleccionado"]=="FLORES")
    {
    header("location:flor.php");
    }
    else 
    if(!$_COOKIE["Paisaje_seleccionado"]=="MARIPOSAS"){
    header("location:mariposas.php");
    }
    ?>
</body>

</html>