
<?php
function calcularEf(){
  $x=$_POST['X'];
  $dia=$_POST['Y'];
  $y=$x/100;
  $tarifaEf=18.60*$y;
  $totalEf=$tarifaEf*$dia;
  echo '    <h2><p> Tarifa diaria: $'.+$tarifaEf.+'</p>
              Total de '.+$dia.' días naturales: $'.+$totalEf.+'
              <br>
            </h2>';
}
function calcular($id){
  $x=$_POST['X'];
  $dia=$_POST['Y'];
  $y=$x/500;

  if ($dia<=15) {
    $tarifa=11.46;
  }
  elseif ($dia>15 && $dia <=45) {
    $tarifa=22.34;
  }
  elseif ($dia>45) {
    $tarifa=36.20;
  }
  $quince=$y*$tarifa;
  $total=$quince*$dia;
  if ($id>2) {
    calcularEf();
  }else {
    echo '    <h2><p> Tarifa diaria: $'.+$quince.+'</p>
                Total de '.+$dia.' días naturales: $'.+$total*$id.+'
                <br>
              </h2>
            ';
  }
}
?>
