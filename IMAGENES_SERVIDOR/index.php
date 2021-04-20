<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="utf-8">
    <title>index</title>
    
    <style>
        table
        {
        margin: auto;
        width: 600px;
        border: 2px  dotted color red;
        background: lightcoral;
        }
      body
    {
    background: limegreen;
    }
    
    </style>
</head>
<body>
    <form action="datos_imagen.php" method="post" enctype="multipart/form-data">
    <table>
    <tr>    
        <td>
        <label for="imagen">Imagen</label>
        </td>
        <td>
            <input type="file" name="imagen" size="20">
        </td>
    </tr>
    <tr>
        <td colspan="2" style="text-align: center;">
        <input type="submit" value="Enviar imagen">         
        </td>
    </tr>
    </table>
    </form>
</body>
</html>