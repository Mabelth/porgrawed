<!DOCTYPE html>
<html lang="es-ES">

<head>
    <meta charset="utf-8">
    <title>busqueda_resultado</title>

</head>

<body>
    <?php
        require("datos.php");
        $id = $_GET["id"];
        $nom=$_GET["nom"];
        $apell = $_GET["apell"];
        $edad = $_GET["edad"];
    

        $conexion = mysqli_connect($db_host, $db_usuario, $db_contraseña, $db_nom);

        if (mysqli_connect_errno()) {
            echo "fallo en bd";
            exit();
        } else {
            echo " SE CONECTO";
        }
        mysqli_select_db($conexion, $db_nom) or die("no se encuentra la bd");
        mysqli_set_charset($conexion, "utf8");
        $consulta = "INSERT INTO datos ( id,nom, apell, edad) VALUES ( 'null','$nom', '$apell', '$edad');";
        $resultado = mysqli_query($conexion, $consulta);
        if($resultado==false)
        { echo"error en la consuta";}
        else
        {echo "<br>registro guardado <br><br>";
        echo "<table><tr>";
        echo  "<td>$id</td>";
        echo  "<td>$nom</td>";
        echo  "<td>$apell</td>";
         echo  "<td>$edad</td>";
       echo "</tr></table>";
        echo "<br>";
        
        }
       
      mysqli_close(exit);
    ?>

</body>

</html>