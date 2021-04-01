<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="utf-8">
    <title>form_busqueda</title>
    <style>
    h1 { text-align: center;}
    
    table{width: 30%;
    background-color: greenyellow;
    border: 2px dotted red;
    margin: auto;
    }
    
    .izq{text-align: right;}
    .der{text-align: left;}
    td{text-align: center;
    padding: 10px;
    }
    
    
    </style>
</head>
<body>
    <h1>INTRODUCE TUS DATOS</h1>
    <form action="comprueba_login.php" method="post">
        <table>
            <tr>
                <td class="izq">login:</td>
                <td class="der"><input type="text" name="login"></td>
            </tr>
            <tr>
                <td class="izq">password:</td>
                <td class="der"><input type="text" name="password"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="enviar" value="enviar"></td>
            </tr>
        </table>
    </form>
</body>
</html>