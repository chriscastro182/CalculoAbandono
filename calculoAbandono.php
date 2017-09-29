<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link href="css/bootstrap.min.css" rel="stylesheet">
     <link rel="shortcut icon" href="favicon.ico">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <title>Cálculo de Abandono</title>
  </head>
  <body>
    <?php require("nav.php");
          require("funcion.php");?>
    <div class="container-fluid">
     <div class="row">
       <img src="image/ban.jpg" class="img-responsive">
      </div>
   </div>

  <div class="container">
    <h1>Cálculo de Abandono</h1>
    <ul class="nav nav-pills">
      <li class="active"><a data-toggle="pill" href="#home">Normal</a></li>
      <li><a data-toggle="tab" href="#menu1">Carga Especial</a></li>
      <li><a data-toggle="tab" href="#menu2">Efectos Personales</a></li>
    </ul>
    <div class="tab-content">
      <div id="home" class="tab-pane fade in active">
        <?php
        $id=1;
        require("back.php");
        ?>
        <h3>Carga normal</h3>
        <p>Elije entre estas pestañas acorde a el tipo de carga.</p>
      </div>
      <div id="menu1" class="tab-pane fade">
        <?php
        $id=2;
        require("back.php");
        ?>
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
      <div id="menu2" class="tab-pane fade">
        <?php
        $id=3;
        require("back.php");
        ?>

      </div>
    </div>
  </div>
  <script type="text/javascript">
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
