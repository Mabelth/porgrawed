 <?php
 
 require_once("conectar.php");
 $base=Conectar::Conexion();
 //----------------------PAGUINACION----------------------------
  $tamaño_paguina = 2;

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
?>