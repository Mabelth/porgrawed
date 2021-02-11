<!DOCTYPE html>
<html lang="es-ES">

<head>
    <meta charset="utf-8">
    <title>paguina_busqueda</title>
</head>

<body>
    <?php
    $id=$_GET["id"];
    $nom = $_GET["nom"];
    $apell = $_GET["apell"];
    $edad = $_GET["edad"];/* del otro formulario busca la misma variable y la guarda aqui */
    try {
        $base = new PDO('mysql:host=localhost;dbname=prueba;', 'root', '');
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $base->exec("SET CHARACTER SET utf8");
        $sql = "INSERT INTO datos ( id,nom, apell, edad) VALUES ( 'null',:nomm, :ape, :eda);";
        // : mas un nombre se usa como marcadores
        $resultado = $base->prepare($sql);
        $resultado->execute(array(":nomm"=>$nom, ":ape"=>$apell, ":eda" => $edad));
       /* while($registro=$resultado->fetch(PDO::FETCH_ASSOC))
        {
        echo "id: ". $registro['id']." nombre: ". $registro['nom']." apellido: ". $registro['apell']." edad: ". $registro['edad']. "<br>";
        
        }*/
        echo"<br> registro insertado";
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