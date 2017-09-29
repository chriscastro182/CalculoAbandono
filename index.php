<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link href="css/bootstrap.min.css" rel="stylesheet">
     <link rel="shortcut icon" href="favicon.ico">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>

    <title>Cálculo de Abandono</title>
  </head>
  <body>
    <?php
      require("include/conexion.php");
        require("nav.php");
          require("funcion.php");?>
        <div class="container-fluid">
         <div class="row">
           <img src="image/ban.jpg" class="img-responsive">
          </div>
       </div>
      <div class="row">
        <div class="col-sm-6">
            <div class="container">
              <h3>Abandono</h3>
            </div>
        </div>
        <div class="col-sm-6">
          <div class="well well-lg">

          </div>
        </div>
      </div>
      <div class="row">

          <form >
              <!-- Aquí van los campos -->
              <div class="container">
                <table class="table table-bordered table-condensed">
                  <thead>
                    <tr>
                      <th>Fecha de Ingreso</th>
                      <th>Guía Master</th>
                      <th>Guía House</th>
                      <th>Piezas</th>
                      <th>Peso</th>
                      <th>Descripcion</th>
                      <th>Oficio de Aduana</th>
                      <th>Fecha de Salida</th>
                      <th>Días totales</th>
                      <th>Estatus</th>
                      <th>Derechos</th>
                      <th>Excepción</th>
                    </tr>
                  </thead>
                  <tbody>
                      <tr>
                         <td><input type="date" id="f_ingreso" name="f_ingreso" class="form-control" required/></td>
                         <td><input type="text" id="guiaMaster" name="guiaMaster" class="form-control" required/></td>
                         <td><input type="text" id="guiaHouse" name="guiaHouse" class="form-control" required/></td>
                         <td><input type="number" id="piezas" name="piezas"class="form-control" required/></td>
                         <td><input type="number" name="peso" class="form-control" id="peso" min="1" max="100000" required></td>
                         <td><input type="text" id="descripcion" name="descripcion" class="form-control"/></td>
                         <td><input type="text" id="oficioAduana" name="oficioAduana" class="form-control"/></td>
                         <td><input type="date" id="f_salida" name="salida"  class="form-control" required/></td>
                         <td><input type="number" id="diasTotales" name="diasTotales" class="form-control" /></td>
                         <td><select class="form-control" id="estatus" name="estatus">
                              <option value="Inactivo"></option>
                              <option value="Activo"></option>
                						</select>
                        <td><input type="number" id="derechos" name="derechos" class="form-control" /></td>
                         <td><select class="form-control" id="excepcion" name="excepcion" >
                               <option value="Normal">Normal</option>
                               <option value="Especial">Especial</option>
                               <option value="Efectos Personales">Efectos Personales</option>
                            </select>
                        </td>
                      </tr>
                  </tbody>
                </table>
                <button type="button">Calcular días</button>
                <button type="submit" name="button">Calcular tarifa</button>
              </div>
          </form>
      </div>
      <?php if (isset($_POST['button']))
      {
        calcular($id);
      } ?>
    <div class="container">
      <h4>Mercancías Especiales:</h4>
      <ul>
        <li>a) Las contenidas en cajas, contenedores, cartones, rejas y otros empaques y envases, cuyo volumen
          sea de más de 5 metros cúbicos.</li>
        <li>b) Las que deban guardarse en cajas fuertes o bajo custodia especial.</li>
        <li>c) Las explosivas, inflamables, contaminantes, radioactivas y corrosivas</li>
        <li>d) Las que por su naturaleza deban conservarse en refrigeración, en cuartos estériles o
            en condiciones especiales dentro de los recintos fiscales.</li>
        <li>e) Los animales vivos.</li>
      </ul>
    </div>
  <script>
  $(function() {
    // for bootstrap 3 use 'shown.bs.tab', for bootstrap 2 use 'shown' in the next line
    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
        // save the latest tab; use cookies if you like 'em better:
        localStorage.setItem('lastTab', $(this).attr('href'));
    });

    // go to the latest tab, if it exists:
    var lastTab = localStorage.getItem('lastTab');
    if (lastTab) {
        $('[href="' + lastTab + '"]').tab('show');
    }
  });
  </script>
  </body>
</html>
