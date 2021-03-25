<!DOCTYPE html>
<html lang="es-ES">

<head>
    <meta charset="utf-8">
    <title>cokies</title>
</head>

<?php

if (isset($_COOKIE["prueba"]))
{
    echo $_COOKIE["prueba"];
}
else
{
 echo " no se guardo";
}
?>

</html>