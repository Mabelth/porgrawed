<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>CRUD</title>
  <link rel="stylesheet" type="text/css" href="hoja.css">
</head>

<body>
  <?php
  include("conexion.php");
  //----------------------PAGUINACION----------------------------
  $tamaño_paguina = 10;

  // $ paguina= las fila donde iniciara nuestro navegador
  //if donde rescataremos dela url y en funcion del numero esto paguine

  if (isset($_GET["paguina"])) {
    if ($_GET["paguina"] == 1) {
      header("location:index.php");
    } else {
      $paguina = $_GET["paguina"];
    }
  } else {
    $paguina = 1;
  }

  // almacena desde, todo empiza en la paguina donde esta, cuando inicia se queda en 0. pero si en un futuro ocupa tra paguina
  $empezar_desde = (($paguina - 1) * $tamaño_paguina);
  //la primer intruccin es unicamente para saber cuantro reguistra nos devolver la consulta y hacer los calculos
  $sql = "SELECT * FROM `datos_usuario`";
  $resultado = $base->prepare($sql);
  $resultado->execute(array());
  // cuenta las filas donde se registrado el arreglo
  $num_filas = $resultado->rowCount();
  // divido todas la filas por lo registros que quiero ver, me dara las paguina que se dividira y con ceil redondeamos el resultado
  $total_paguinas = ceil($num_filas / $tamaño_paguina);
//--------------------PAGUINACION------------------
  
  
  //$conexion=$base->query("SELECT * FROM `datos_usuario`");
  // $registros=$conexion->fetchAll("PDO::FETCH_OBJ");
  $registros = $base->query("SELECT * FROM `datos_usuario` LIMIT $empezar_desde,$tamaño_paguina")->fetchAll(PDO::FETCH_OBJ);

  if (isset($_POST["cr"])) {
    $nombre = $_POST["Nom"];
    $apellido = $_POST["Ape"];
    $direcion = $_POST["Dir"];

    $sql = "INSERT INTO `datos_usuario` (`id`, `nom`, `apell`, `dir`) VALUES (NULL, :minom, :miapell, :midir)";
    $resultado = $base->prepare($sql);
    $resultado->execute(array(":minom" => $nombre, ":miapell" => $apellido, ":midir" => $direcion));
    header("location:index.php");
  }
  ?>
  <h1>CRUD<span class="subtitulo">Create Read Update Delete</span></h1>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <table width="50%" border="0" align="center">
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
      foreach ($registros as $persona) :
      ?>

        <tr>
          <td><?php echo $persona->id ?></td>
          <td><?php echo $persona->nom ?></td>
          <td><?php echo $persona->apell ?></td>
          <td><?php echo $persona->dir ?></td>

          <td class="bot"><a href="borrar.php?id=<?php echo $persona->id ?>"><input type='button' name='del' id='del' value='Borrar'></a></td>
          <td class='bot'>
            <a href="editar.php?
        id=<?php echo $persona->id ?>
        &nom=<?php echo $persona->nom ?>
        &apell=<?php echo $persona->apell ?>
        &dir=<?php echo $persona->dir ?>">
              <input type='button' name='up' id='up' value='Actualizar'></a>
          </td>
        </tr>

      <?php
      endforeach;
      ?>
      <tr>
        <td></td>
        <td><input type='text' name='Nom' size='10' class='centrado'></td>
        <td><input type='text' name='Ape' size='10' class='centrado'></td>
        <td><input type='text' name=' Dir' size='10' class='centrado'></td>
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