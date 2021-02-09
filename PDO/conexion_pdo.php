<!DOCTYPE html>
<html lang="es-ES">

<head>
    <meta charset="utf-8">
    <title>conecion</title>
</head>

<body>
    <?php
    try{
        $base= new PDO('mysql:host=localhost;dbname=prueba;','root','');
        echo "conexion exitosa";
    }
    catch(Exception $e)
    // siempre va a recibir un argumento de tipo exepcion
    {
    die('error:'.$e->getMessage());
    }
    finally
    {
    $base=null;
    }
    

    ?>
</body>

</html>