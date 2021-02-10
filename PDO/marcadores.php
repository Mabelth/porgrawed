<!DOCTYPE html>
<html lang="es-ES">

<head>
    <meta charset="utf-8">
    <title>conecion</title>
</head>

<body>
    <?php
    $id= $_GET["buscar"];
    $nom = $_GET["buscar1"];
    // rescatamos la imformacion del formulario
    try {
        $base = new PDO('mysql:host=localhost;dbname=prueba;', 'root', '');
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $base->exec("SET CHARACTER SET utf8");
        $sql = "select id, nom, apell, edad from datos where id = :idd or nom = :nomm";
        // : mas un nombre se usa como marcadores
        $resultado = $base->prepare($sql);
        $resultado->execute(array(":idd"=>$id, ":nomm"=>$nom));
        while($registro=$resultado->fetch(PDO::FETCH_ASSOC))
        {
        echo "id: ". $registro['id']." nombre: ". $registro['nom']." apellido: ". $registro['apell']." edad: ". $registro['edad']. "<br>";
        
        }
        $resultado->closeCursor();
    } catch (Exception $e)
    // siempre va a recibir un argumento de tipo exepcion
    {
        die('error:' . $e->getMessage());
    } finally {
        $base = null;
    }


    ?>
</body>

</html>