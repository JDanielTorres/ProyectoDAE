<?php

include '../Model/ExamenModel.php';
	$examen  = new Examen();
    $preguntas =$examen->getExamen();	
    $noPregunta=0;
?>


<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/examen.css">
</head>

<body>
    <?php
    require_once('header.php');
?>
    <div class="grid">
        <div class="elemento3">
            <h2>Examen</h2>
            <hr>
            <div class="grid-examen">


                <div class="cuestionario">
                    <h3 style="color: #4E0592;text-shadow: 1px 1px 1px #949C9A;">Instrucciones: Lea con atención las
                        siguientes pregunta y eliga la respuesta que considere correcta</h3>

                    <?php
						foreach ($preguntas as $column =>$value) {
                            
                            $opcion1=$value['opcion1'];
                            $opcion2=$value['opcion2'];
                            $opcion3=$value['opcion3'];
                            $opcion4=$value['opcion4'];
                            $respuesta=$value['respuesta'];
                            $pregunta=$value['pregunta'];
                            $id=$value['id_pregunta'];
                            
				?>
                    <div>
                        <form action="../Controller/ResultadoController.php" method="POST">
                            <center><img class="examen-img" src="../imagenes/examen0<?php echo $id;?>.jpg"></center>
                            <h2><?php echo $pregunta ?></h2>
                            <label class="container"><?php echo $opcion1; ?>
                                <input checked="checked" type="radio" name="pregunta<?php echo $id ?>"
                                    value="<?php if ($opcion1==$respuesta){echo "1";} else{echo "0";} ?>">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container"><?php echo $opcion2; ?>
                                <input type="radio" name="pregunta<?php echo $id;?>"
                                    value="<?php if ($opcion2==$respuesta){echo "1";} else{echo "0";} ?>">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container"><?php echo $opcion3; ?>
                                <input type="radio" name="pregunta<?php echo $id;?>"
                                    value="<?php if ($opcion3==$respuesta){echo '1';} else{echo '0';} ?>">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container"><?php echo $opcion4; ?>
                                <input type="radio" name="pregunta<?php echo $id;?>"
                                    value="<?php if ($opcion4==$respuesta){echo '1';} else{echo '0';} ?>">
                                <span class="checkmark"></span>
                            </label>
                    </div>

                    <input type="hidden" name="id_pregunta<?php echo $noPregunta++; ?>" value="<?php echo $id ?>">
                    <?php
						}?>


                    <input type="hidden" name="noPregunta" value="<?php echo $noPregunta ?>">
                    <center>  <input type="submit" name="create" value="Enviar Respuestas" class="w3-btn w3-teal"></center>
                    </form>
                </div>



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