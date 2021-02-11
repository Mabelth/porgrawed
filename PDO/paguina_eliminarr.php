<!DOCTYPE html>
<html lang="es-ES">

<head>
    <meta charset="utf-8">
    <title>paguina_busqueda</title>
</head>

<body>
    <?php
    $id=$_GET["id"];

    try {
        $base = new PDO('mysql:host=localhost;dbname=prueba;', 'root', '');
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $base->exec("SET CHARACTER SET utf8");
        $sql = "DELETE FROM `datos` WHERE `datos`.`id` = :id";
        // : mas un nombre se usa como marcadores
        $resultado = $base->prepare($sql);
        $resultado->execute(array(":id"=>$id));
     
        echo"<br> registro eliminado";
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