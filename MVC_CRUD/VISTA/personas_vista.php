<!DOCTYPE html>
<html lang="es-ES">
  <link rel="stylesheet" type="text/css" href="hoja.css">
<head>
    <meta charset="utf-8">
    <title>personas_Vistas</title>
</head>
<body>
<?php
    require("MODELO/paguinacion.php");
?>
 <h1>PERSONAS<span class="subtitulo">mabel</span></h1>
 <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <table width="50%" border="0" align="center">
      <tr>
        <td class="primera_fila">Id</td>
        <td class="primera_fila">Nombre</td>
        <td class="primera_fila">Apellido</td>
        <td class="primera_fila">Dirección</td>
          
      </tr>
      <?php
      foreach ($matriz_personas as $persona) :
      ?>

        <tr>
          <td><?php echo $persona["id"] ?></td>
          <td><?php echo $persona["nom"] ?></td>
          <td><?php echo $persona["apell"] ?></td>
          <td><?php echo $persona["dir"] ?></td>


          <td class="bot"><a href="MODELO/borrar.php?id=<?php echo $persona["id"] ?>"><input type='button' name='del' id='del' value='Borrar'></a></td>
          <td class='bot'>
            <a href="Modelo/editar.php?
        id=<?php echo $persona["id"] ?>
        &nom=<?php echo $persona["nom"] ?>
        &apell=<?php echo $persona["apell"] ?>
        &dir=<?php echo $persona["dir"] ?>">
              <input type='button' name='up' id='up' value='Actualizar'></a>
          </td>
        </tr>

      <?php
      endforeach;
      ?>
      <tr>
        <td></td>
        <td><input type='text' name='nom' size='10' class='centrado'></td>
        <td><input type='text' name='ape' size='10' class='centrado'></td>
        <td><input type='text' name=' dir' size='10' class='centrado'></td>
        <td class='bot'><input type='submit' name='cr' id='cr' value='Insertar'></td>
      </tr>
      <tr>
        <td colspan="4" align="center">
          <?php
          // -----------PAGUINACION------
          // si ocupamos ?mas una variables decimos que el dato viaje al url
         for ($i = 1; $i <= $total_paguinas; $i++) {
            echo "<a href='?paguina=" . $i . "'>" . $i . "</a>  ";
          }

          ?>
        </td>
      </tr>
    </table>
  </form>

  <p>&nbsp;</p>
</body>
</html>