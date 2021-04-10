<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>CRUD</title>
</head>

<body>
    <?php
    try {
        $base = new PDO('mysql:host=localhost;dbname=pruebas;', 'root', '');
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       
        $sql = "SELECT * FROM `datos_usuario` WHERE `nom` LIKE '1'";
        $resultado = $base->prepare($sql);
        $resultado->execute(array());
        while($registros=$resultado->fetch(PDO::FETCH_ASSOC))
        {
            echo "Nombre : ".$registros['nom']." Apellido : ".$registros['apell']." direccion : ".$registros['dir']."<br>";
        }
        $resultado->closeCursor();
    } catch (Exception $e) 
    {
        echo "linaea de error" . $e->getLine();
    }


    ?>

</body>

</html>