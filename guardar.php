<?php
require 'conexion.php';

$f_ingreso = $_POST['f_ingreso'];
$guiaMaster = $_POST['guiaMaster'];
$guiaHouse = $_POST['guiaHouse'];
$piezas = $_POST['piezas'];
$peso = $_POST['peso'];
$descripcion = $_POST['descripcion'];
$oficioAduana = $_POST['oficioAduana'];
$f_salida = $_POST['f_salida'];
$diasTotales = $_POST['diasTotales'];
$estatus = $_POST['estatus'];
$derechos = $_POST['derechos']
$excepcion = $_POST['excepcion'];

$sql = "INSERT INTO `registroabandono` (`f_ingreso`, `guiaMaster`, `guiaHouse`, `piezas`, `peso`, `descripcion`, `oficioAduana`, `f_salida`, `diasTotales`, `estatus`, `derechos`, `excepcion`)
                            VALUES ('$f_ingreso', '$guiaMaster', '$guiaHouse', '$piezas', '$peso', '$descripcion', '$oficioAduana', '$f_salida', '$diasTotales', '$estatus', '$derechos', '$excepcion');"
$resultado = $mysqli->query($sql);

?>

<html lang="es">
<head>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <script src="js/jquery-3.1.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="row" style="text-align:center">
        <?php if($resultado) { ?>
          <h3>REGISTRO GUARDADO</h3>
          <?php } else { ?>
          <h3>ERROR AL GUARDAR</h3>
        <?php } ?>

        <a href="index.php" class="btn btn-primary">Regresar</a>

      </div>
    </div>
  </div>
</body>
</html>
