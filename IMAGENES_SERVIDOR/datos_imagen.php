   <?php
        //recibimos los datos de la imagen
        $nombre_imagen=$_FILES['imagen']['name'];
        $tipo_imagen=$_FILES['imagen']['type'];
        $tamaño_imagen=$_FILES['imagen']['size'];
        echo $tipo_imagen;
        if($tamaño_imagen<=3000000){
             //indicamos los formatos que permitimos subir a nuestro servidor
               if (($_FILES["imagen"]["type"] == "image/gif")
               || ($_FILES["imagen"]["type"] == "image/jpeg")
               || ($_FILES["imagen"]["type"] == "image/jpg")
               || ($_FILES["imagen"]["type"] == "image/png"))
           {
                //ruta de la carpeta destino servidor
                $carpeta_destino= $_SERVER ["DOCUMENT_ROOT"]."/uploads/";
                //movemos la imagen del directorio temporaral al directorio escogido
                move_uploaded_file($_FILES['imagen']['tmp_name'],$carpeta_destino.$nombre_imagen);
                
        }
            else
            {
                echo " solo se pueden subir imagenes JPG/PNG/JPEG/GIF <BR>";
            }
        }
        else
        {
        echo " <br> El tamaño es muy grande";
        }
        require("Datos.php");
        
                $conexion=mysqli_connect($db_host, $db_usuario,$db_contraseña,$db_nom);
                
            if(mysqli_connect_errno()){
            echo "fallo en bd";
              exit();
            }

            mysqli_select_db($conexion,$db_nom) or die ("no se encuentra la bd");
            mysqli_set_charset($conexion,"utf8");
              $consulta="UPDATE datos_usuario SET FOTO='$nombre_imagen' WHERE id = 8;";
            $resultado=mysqli_query($conexion,$consulta); 
             header("location:leer_imagen.php");

             
    ?>
   