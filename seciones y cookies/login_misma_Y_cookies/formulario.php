<!DOCTYPE html>
<html lang="es-ES">

<head>
    <meta charset="utf-8">
    <title>form_busqueda</title>
</head>

<body>
    <h1>INTRODUCE TUS DATOS</h1>
    <form action="<?PHP echo $_SERVER['PHP_SELF']; ?>" method="post">

        <table>
            <tr>
                <td class="izq">Login:</td>
                <td class="der"><input type="text" name="login"></td>
            </tr>
            <tr>
                <td class="izq">Password:</td>
                <td class="der"><input type="text" name="password"></td>
            </tr>
            <tr><td class="izq">Recordar</td>
            <td class="der"><input type="checkbox" name="recordar" id="recordar">
            </td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="enviar" value="enviar"></td>
            </tr>
        </table>
    </form>
    <br>
</body>

</html>