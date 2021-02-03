<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>Documento sin título</title>
  <style>
    h1 {
      text-align: center;
      color: #00F;
      border-bottom: dotted #0000FF;
      width: 50%;
      margin: auto;


    }

    table {
      border: 1px solid #F00;
      padding: 20px 50px;
      margin-top: 50px;
    }

    body {
      background-color: #FFC;
    }
  </style>
</head>

<body>
  <h1>Registro de Artículos</h1>
  <form name="form1" method="get" action="insertar_registros.php">
    <table border="0" align="center">
      <tr>
        <td>id</td>
        <td><label for="id"></label>
          <input type="text" name="id" id="id">
        </td>
      </tr>
      <tr>
        <td>nombre</td>
        <td><label for="nom"></label>
          <input type="text" name="nom" id="nom">
        </td>
      </tr>
      <tr>
        <td>edad</td>
        <td><label for="apell"></label>
          <input type="text" name="apell" id="apell">
        </td>
      </tr>
      <tr>
        <td>edad</td>
        <td><label for="edad"></label>
          <input type="text" name="edad" id="edad">
        </td>
      </tr>
      <tr>
        <td align="center"><input type="submit" name="enviar" id="enviar" value="Enviar"></td>
        <td align="center"><input type="reset" name="Borrar" id="Borrar" value="Borrar"></td>
      </tr>
    </table>
  </form>
</body>

</html>