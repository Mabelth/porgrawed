<!DOCTYPE html>
<html lang="es-ES">

<head>
    <meta charset="utf-8">
    <title>cokies</title>
</head>

<body>
<?php
    if(isset($_COOKIE["Paisaje_seleccionado"])){
   
     if($_COOKIE["Paisaje_seleccionado"]=="F")
    {
    header("location:flor.php");
    }
    else if($_COOKIE["Paisaje_seleccionado"]=="M"){
    header("location:mariposas.php");
    }
}
    ?>
</body>

</html>