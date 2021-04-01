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
"hola: " . $_SESSION["usuario"] . "<br><br>";

?>
<table width="490" height="170" border="2" color="blue">
    <tr>
        <td colspan="3" align="center">ZONA DE USUARIOS RGISTRADOS</td>
    </tr>
    <tr>
        <td><a href="usuarios_registrados2.php">Paguina1</a></td>
        <td><a href="usuarios_registrados3.php">Paguina2</a></td>
        <td><a href="usuarios_registrados4.php">Paguina3</a></td>
    </tr>

</table>

<body>
</body>

</html>