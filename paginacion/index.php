<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>PAGUINACION</title>
</head>

<body>
    <?php
    try {
        $base = new PDO('mysql:host=localhost;dbname=pruebas;', 'root', '');
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //los registros que nos van a mostrar
        $tamaño_paguina=15;
        
        // $ paguina= las fila donde iniciara nuestro navegador
        //if donde rescataremos dela url y en funcion del numero esto paguine
    
       if(isset($_GET["paguina"]))
       {
            if ($_GET["paguina"]==1) {
                header("location:index.php");
            } else {
                $paguina = $_GET["paguina"];
            }
       }
       else
       {
           $paguina=1;
       }
        
        // almacena desde, todo empiza en la paguina donde esta, cuando inicia se queda en 0. pero si en un futuro ocupa tra paguina
        $empezar_desde=(($paguina-1)*$tamaño_paguina);
        //la primer intruccin es unicamente para saber cuantro reguistra nos devolver la consulta y hacer los calculos
        $sql = "SELECT * FROM `datos_usuario`";
        $resultado = $base->prepare($sql);
        $resultado->execute(array());
        // cuenta las filas donde se registrado el arreglo
        $num_filas=$resultado->rowCount();
        // divido todas la filas por lo registros que quiero ver, me dara las paguina que se dividira y con ceil redondeamos el resultado
        $total_paguinas=ceil($num_filas/$tamaño_paguina);
        echo "Numero de reguistros de la consulta: ".$num_filas."<br>";
        echo  "Mostramos ".$tamaño_paguina." registros por paguina <br>"; 
        echo "Mostrando la paguina ". $paguina." de ".$total_paguinas."<br>";
        
        
        $resultado->closeCursor();
        //para que nos muestre cuantos reguistro querramos
        $sql_limite = "SELECT * FROM `datos_usuario` LIMIT $empezar_desde,$tamaño_paguina";
        $resultado = $base->prepare($sql_limite);//prepara una consulta
        $resultado->execute(array());//nos ejecuta el arreglo
        while ($registros = $resultado->fetch(PDO::FETCH_ASSOC)) {
            echo "Nombre : " . $registros['nom'] . " Apellido : " . $registros['apell'] . " direccion : " . $registros['dir'] . "<br>";
        }
    } catch (Exception $e) 
    {
        echo "linaea de error" . $e->getLine();
    }
    // si ocupamos ?mas una variables decimos que el dato viaje al url
    for( $i=1; $i<=$total_paguinas; $i++)
    {
        echo "<a href='?paguina=".$i."'>".$i."</a>  ";
    }


    ?>

</body>

</html>