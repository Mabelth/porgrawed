<!DOCTYPE html>
<?php
   //incluimos el archivo encargado de mostrar los Datos
   require"devuelve_datos.php";
   $id=$_GET["buscar"];

   //Creamos una instancia de la  clase devuelve Datos

     $Datos = new DevuelveDatos();

     $array_Datos=$Datos->get_Datos($id);
?>
<html>

<head>
    <title>Hello!</title>
</head>

<body>

<?php

 //recorremos el array
           //la variable elemento contendrá los índices
 foreach($array_Datos as $elemento)
 {

     echo"<table><tr><td>";
     echo $elemento['id']."</td><td>";
      echo $elemento['nom']."</td><td>";
       echo $elemento['apell']."</td><td>";
        echo $elemento['edad']."</td></<tr> </table>";

            echo "<br>";
             echo "<br>";


 }
?>


</body>
</html>