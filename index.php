<!DOCTYPE html>
<html>
  <?php require("head.php") ?>
  <body>
    <?php
      require("include/conexion.php");
        require("nav.php");
        $where = "";

        if(!empty($_POST))
        {
          $valor = $_POST['campo'];
          if(!empty($valor)){
            $where = "WHERE guiaMaster LIKE '%$valor'";
          }
        }
        $sql = "SELECT * FROM registroabandono $where";
        $resultado = $mysqli->query($sql);
          ?>
        <div class="container-fluid">
         <div class="row">
           <img src="image/ban.jpg" class="img-responsive">
          </div>
       </div>
      <div class="row">
        <div class="col-sm-6">
            <div class="container" style="text-align:left">
              <h1>Captura de mercancía en Abandono</h1>

            </div>
        </div>
        <div class="col-sm-6" >
          <button class="btn btn-lg btn-info btn-block" data-toggle="collapse" data-target="#demo">¿Qué entra dentro del concepto de Mercancía Especial?</button>
            <div id="demo" class="collapse">
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
            </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-10">
          <form  class="form-horizontal" method="POST" action="guardar.php">
              <!-- Aquí van los campos -->
              <div class="container">
                <table class="table table-bordered table-condensed">
                  <thead>
                    <tr>
                      <th>Fecha de <br> Ingreso</th>
                      <th>GuíaMaster</th>
                      <th>GuíaHouse</th>
                      <th>Piezas</th>
                      <th>Peso</th>
                      <th>Descripcion</th>
                      <th>Oficio de Aduana</th>
                      <th>Fecha de <br> Salida</th>
                      <th>Estatus</th>
                      <th>Tipo de mercancía</th>
                    </tr>
                  </thead>
                  <tbody>
                      <tr>
                         <td><input type="date" id="ingreso" name="ingreso" class="form-control" required/></td>
                         <td><input type="text" id="guiaMaster" name="guiaMaster" class="form-control" required/></td>
                         <td><input type="text" id="guiaHouse" name="guiaHouse" class="form-control" required/></td>
                         <td><input type="number" id="piezas" name="piezas"class="form-control" min="1" required/></td>
                         <td><input type="number" name="peso" class="form-control" id="peso" min="1" max="100000" required></td>
                         <td><input type="text" id="descripcion" name="descripcion" class="form-control"/></td>
                         <td><input type="text" id="oficioAduana" name="oficioAduana" class="form-control"/></td>
                         <td><input type="date" id="salida" name="salida"  class="form-control" required/></td>
                         <td><select class="form-control" id="estatus" name="estatus">
                              <option value="Inactivo">Inactivo</option>
                              <option value="Activo">Activo</option>
                						</select>
                        <td><select class="form-control" id="excepcion" name="excepcion" >
                               <option value="Normal">Normal</option>
                               <option value="Especial">Especial</option>
                               <option value="Efectos Personales">Efectos Personales</option>
                            </select>
                        </td>
                      </tr>
                  </tbody>
                </table>
              </div>


        </div>
        <div class="col-sm-2">
          <button class="btn btn-lg btn-primary btn-block" type="submit">Calcular y guardar</button>
        </div>
        </form>
      </div>
      <!-- Tablas que contienten datos -->
      <div class="row">
        <div class="col-sm-5">
            <div class="container">
              <table class="table table-striped">
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
                    <th>Total de días</th>
                    <th>Estatus</th>
                    <th>Derechos</th>
                    <th>Tipo de mercancía</th>
                  </tr>
                </thead>
                <tbody>
              <?php while($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
                    <tr>
                      <td><?php echo $row['f_ingreso']; ?></td>
                      <td><?php echo $row['guiaMaster']; ?></td>
                      <td><?php echo $row['guiaHouse']; ?></td>
                      <td><?php echo $row['piezas']; ?></td>
                      <td><?php echo $row['peso']; ?></td>
                      <td><?php echo $row['descripcion']; ?></td>
                      <td><?php echo $row['oficioAduana']; ?></td>
                      <td><?php echo $row['f_salida']; ?></td>
                      <td><?php echo $row['diasTotales']; ?></td>
                      <td><?php echo $row['estatus']; ?></td>
                      <td><?php echo $row['derechos']; ?></td>
                      <td><?php echo $row['excepcion']; ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        <div class="col-sm-5">

        </div>
        <div class="col-sm-2">
          <a href="generarInformes.php" class="btn btn-lg btn-success" type="button" name="button">Generar informe</a>
        </div>
      </div>
          <!-- Aquí van los campos de la base de datos -->

  </body>
</html>
