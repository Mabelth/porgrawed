<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>Documento sin título</title>
  <link rel="stylesheet" type="text/css" href="hoja.css">
</head>

<body>

  <h1>ACTUALIZAR</h1>
  <?php
  include "conexion.php";
  
  if(!isset($_POST["bot_actualizar"])){
  
 
  $id = $_GET["id"];
  $nom = $_GET["nom"];
  $apell = $_GET["apell"];
  $dir = $_GET["dir"];
  } else  
  {
    $id = $_POST["id"];
    $nom = $_POST["nom"];
    $apell = $_POST["apell"];
    $dir = $_POST["dir"];
    $sql= "UPDATE `datos_usuario` SET `nom` = :minom,`apell` = :miapell, `dir` = :midir WHERE `datos_usuario`.`id` = :miid;";
    $resultado=$base->prepare($sql);
    
    $resultado->execute(array(":miid"=>$id,":minom"=>$nom, ":miapell"=>$apell, ":midir"=>$dir));
     header("location:index.php");
  }
  

  ?>
  <p>

  </p>
  <p>&nbsp;</p>
  <form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <table width="25%" border="0" align="center">
      <tr>
        <td></td>
        <td><label for="id"></label>
          <input type="hidden" name="id" id="id" value="
          <?php echo $id ?>">
        </td>
      </tr>
      <tr>
        <td>Nombre</td>
        <td><label for="nom"></label>
          <input type="text" name="nom" id="nom" value="
          <?php echo $nom ?>">
        </td>
      </tr>
      <tr>
        <td>Apellido</td>
        <td><label for="apell"></label>
          <input type="text" name="apell" id="apell" value="
          <?php echo $apell ?>">
        </td>
      </tr>
      <tr>
        <td>Dirección</td>
        <td><label for="dir"></label>
          <input type="text" name="dir" id="dir" value="
          <?php echo $dir ?>">
        </td>
      </tr>
      <tr>
        <td colspan="2"><input type="submit" name="bot_actualizar" id="bot_actualizar" value="Actualizar"></td>
      </tr>
    </table>
  </form>
  <p>&nbsp;</p>
</body>

</html>