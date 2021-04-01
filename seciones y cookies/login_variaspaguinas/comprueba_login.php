<!DOCTYPE html>
<html lang="es-ES">

<head>
    <meta charset="utf-8">
    <title>form_busqueda</title>
    <style>
    h1 {
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
$login= $_POST["login"];
$password = $_POST["password"];
    try {
    $base=new PDO("mysql:host=localhost;dbname=pruebas","root","");
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM datos WHERE usu=:login and contra= :password";
     /* htmlentities convierte cualquier simbolo html y addslashes escapa cualquier caracter extraño que el usiario haya puesto*/
    $resultado=$base->prepare($sql);
    $login=htmlentities(addslashes($_POST["login"]));
    $password=htmlentities(addslashes($_POST["password"]));
    $resultado->bindValue(":login", $login);
    $resultado->bindValue(":password", $password);
    $resultado->execute();
    $numero_registro=$resultado->rowCount();
    if($numero_registro!=0)
    {
    // se inicia secion o reanuda una secion por medio de cookies
        session_start();
        $_SESSION["usuario"]=$_POST["login"];
        header("location:usuarios_registrados1.php");
        echo "<h2>LISTOS</h2>";
    }
    else
    {
    header("location:login.php");
    }
    
    } catch (Exception $e)
    // siempre va a recibir un argumento de tipo exepcion
    {
    die("error:" . $e->getMessage());
    echo "error";
    }
    ?>
</body>

</html>