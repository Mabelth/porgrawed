<!DOCTYPE html>
<html lang="es-ES">

<head>
</head>

<?php
session_start();
if (!isset($_SESSION["usuario"])) {
    header("location:login.php");
}
?>
<h1>bienvenido</h1>
<p><a href="cierre.php">cerrar secion</a></p>
<br>
<?php
echo "usuario3: " . $_SESSION["usuario"] . "<br><br>";
?>
<p>Esto es imformacion solo para usuarios</p>
<p><a href="usuarios_registrados1.php">volver</a></p>

<body>
</body>

</html>