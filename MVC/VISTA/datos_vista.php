<!DOCTYPE html>
<html lang="es-ES">
  <link rel="stylesheet" type="text/css" href="hoja.css">
<head>
    <meta charset="utf-8">
    <title>datos_Vistas</title>
</head>
<body>
  <table width="50%" border="0" align="center">
<tr><td colspan="4" align="center"><h1>DATOS</H1></td></tr>
    <tr>
      <td class="primera_fila">Id</td>
      <td class="primera_fila">Nombre</td>
      <td class="primera_fila">Apellido</td>
      <td class="primera_fila">Dirección</td>
      <td class="sin">&nbsp;</td>
      <td class="sin">&nbsp;</td>
      <td class="sin">&nbsp;</td>
    </tr>
    <?php
    
    foreach($matriz_datos as $registros)
    {
    

          echo "<tr><td>".$registros["id"]."</td>";
        echo "<td>".$registros["nom"]."</td>";
        echo "<td>" . $registros["apell"] . "</td>";
        echo "<td>" . $registros["dir"] . "</td></tr>";
   }
    ?>
  
        
 </table>
</body>
</html>