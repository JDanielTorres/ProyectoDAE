<?php

include '../Model/ResultadoModel.php';
    
    $resultado  = new Resultado();
    $total=0;
    $i=0;
    
?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/resultado.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body>
    <?php
    require_once('header.php');
    $id_persona  = isset($_SESSION['id'])?$_SESSION['id']:null;
    $resultados =$resultado->getResultadoByIdPersona($id_persona);	
  ?>
    <div class="grid">
        <div class="elemento3">

            <h2>Resultados de examen</h2>
            <hr>
            <div class="grid-resultado">
                <table>
                    <tr>
                        <th>Realizado el:</th>
                        <th>Puntaje</th>
                        <th>Estado</th>
                    </tr>
                    <?php
						foreach ($resultados as $column =>$value) {
                            $estado="Reprobado";
                            $color="red";
                            $puntaje=$value['puntaje'];
                            if($puntaje > 6){
                            $estado="Aprobado";
                            $color="green";
                            }
                            $total=$total+$puntaje;
                            $i++;
                            ?>
                    <tr>
                        <td> <?php echo $value['fecha']; ?></td>
                        <td> <?php echo $puntaje."0 / 100";?></td>
                        <td> <?php echo $estado; ?></td>
                    </tr>
                        <?php } ?>
                </table>

                <div class="w3-container">
  <h2>Consultar la ultima evalucacion realizada</h2>
  <p>Tu promedio es: <?php echo substr((($total/$i)*10),0,4)." / 100"; ?> </p>

  <div class="w3-light-grey">
  <input type="hidden" id="puntaje" name="puntaje" value="<?php echo $puntaje ?>">

    <div id="myBar" class="w3-container w3-<?php echo $color;?>" style="height:24px;width:0%;">
    </div>
  </div>

  <p id="myP">Respuestas correctas <span id="demo">0</span> de 10 </p>

  <button class="w3-button w3-light-grey" onclick="move();this.disabled='true'">Consultar</button> 
</div>

<script>
function move() {
  var elem = document.getElementById("myBar");   
  var puntaje = document.getElementById("puntaje").value*10;
  var texto = "Felicidades usted paso el examen! Calificacion: "+puntaje + " de 100";
  var color = "green";

  var width = 0;
  var id = setInterval(frame, 50);
  function frame() {
    if (width >= puntaje) {
      clearInterval(id);
        
      if(puntaje<70){
      color = "red";
      texto = "Usted no aprobo el examen :( Calificacion: " + puntaje + " de 100 ";}

      document.getElementById("myP").className = "w3-text-"+color+" w3-animate-opacity"; 
      document.getElementById("myP").innerHTML = texto;

    } else {
      width++; 
      elem.style.width = width + '%'; 
      var num = width * 1 / 10;
      num = num.toFixed(0)
      document.getElementById("demo").innerHTML = num;
    }
  }
}
</script>

            </div>
        </div>
    </div>
    <?php
    require_once('footer.php');
?>
    <script>
    // Get the modal
    var modal = document.getElementById('id01');
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    </script>
</body>

</html>