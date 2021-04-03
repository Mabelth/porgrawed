<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="utf-8">
    <title>cokies</title>
</head>
<?php
setcookie("Paisaje_seleccionado", $_GET["paisaje"], time() +86460);
header("location:ver_cokies.php");
?>
</html>