<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="utf-8">
    <title>LEER</title>
</head>
<body>
    <?php   
        require("Datos.php");
        
                $conexion=mysqli_connect($db_host, $db_usuario,$db_contraseña,$db_nom);
                
            if(mysqli_connect_errno()){
            echo "fallo en bd";
              exit();
            }
            mysqli_select_db($conexion,$db_nom) or die ("no se encuentra la bd");
            mysqli_set_charset($conexion,"utf8");
              $consulta="SELECT FOTO FROM datos_usuario WHERE id = 8;";
            $resultado=mysqli_query($conexion,$consulta); 
             ECHO " SE CONECTO";
    while ($fila = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
        $ruta_img=$fila["FOTO"]; 
    }

    ?>
     <div>
    <img src="/uploads/<?php echo $ruta_img;?>" alt="imagen del articulo " width="25%"/>
    
    </div>

</body>
</html>