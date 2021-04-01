<!DOCTYPE html>
<html lang="es-ES">

<head>
    <meta charset="utf-8">
    <title>form_busqueda</title>
    <style>
        h1,
        H2 {
            text-align: center;
        }

        table {
            width: 30%;
            background-color: greenyellow;
            border: 2px dotted red;
            margin: auto;
        }

        .izq {
            text-align: right;
        }

        .der {
            text-align: left;
        }

        td {
            text-align: center;
            padding: 10px;
        }
    </style>
</head>

<body>
    <?php
    if (isset($_POST["enviar"])) {
        try {
            $base = new PDO("mysql:host=localhost;dbname=pruebas", "root", "");
            $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "SELECT * FROM datos WHERE usu=:login and contra= :password";
            /* htmlentities convierte cualquier simbolo html y addslashes escapa cualquier caracter extraño que el usiario haya puesto*/
            $resultado = $base->prepare($sql);
            $login = htmlentities(addslashes($_POST["login"]));
            $password = htmlentities(addslashes($_POST["password"]));
            $resultado->bindValue(":login", $login);
            $resultado->bindValue(":password", $password);
            $resultado->execute();
            $numero_registro = $resultado->rowCount();
            if ($numero_registro != 0) {
                // se inicia secion o reanuda una secion por medio de cookies
                session_start();
                $_SESSION["usuario"] = $_POST["login"];
              
               
            } else {
               echo "usuaio o contraseña incorrecta";
            }
        } catch (Exception $e)
        // siempre va a recibir un argumento de tipo exepcion
        {
            die("error:" . $e->getMessage());
            echo "error";
        }
    }
    ?>
    <?php
    if (!isset($_SESSION["usuario"])) {
    include("formulario.php");
    }
    else{
    echo "usuario: ".$_SESSION["usuario"];
    }
    ?>
    <h2>MIS DATOS</h2><br>
    <table width="490" height="170" border="2" color="blue">
        <tr>
            <td colspan="3" align="center">DINOSAURIOS</td>
        </tr>
        <tr>
            <td><img src="https://estaticos.muyinteresante.es/media/cache/1140x_thumb/uploads/images/gallery/5e6fa1fd5bafe844fb2c00cd/diplodocus.jpg" width="300" height="300" alt="El Diplodocus (Diplodocus longus) cuyo nombre significa  doble haz, hace referencia a los huesos de forma extraña que se encuentran en la cola del Diplodocus (que contenía alrededor de 80 vértebras). "></td>
            <td><img src=" https://estaticos.muyinteresante.es/media/cache/1140x_thumb/uploads/images/gallery/5e6fa1fd5bafe844fb2c00cd/rex.jpg" width="300" height="300" alt="El Tiranousaurio Rex (Tyrannosaurus rex) cuyo nombre significa Reptil Tirano, vivió durante el periodo Cretácico tardío. "></td>
            <td><img src="https://estaticos.muyinteresante.es/media/cache/1140x_thumb/uploads/images/gallery/5e6fa1fd5bafe844fb2c00cd/triceratops.jpg" width="300" height="300" alt="El Triceratops (Triceratops horridus), cuyo nombre significa Horrible Cabeza con Tres Cuernos, vivió durante el periodo Cretácico tardío hace 66-68 millones de años."></td>
        </tr>

    </table>
</body>

</html>