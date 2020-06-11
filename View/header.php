<?php
 session_start();
 $username;
 $cerrar;
 $examen;
 $informacion;
 $id_usuario;
 if(isset($_SESSION['usuario'])){
    if(isset($_SESSION['id'])){
        $id_usuario=$_SESSION['id'];
    }
  $username=$_SESSION['usuario'];
  $cerrar="Cerrar sesion";
  $examen="Realizar examen";
  $informacion="Ver mi informacion";
 }else{
     $username=".";
     $cerrar="Bienvenido";
     $examen=".";
 }
  ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto DAE</title>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="icon" href="../imagenes/itl_icon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Coda&display=swap" rel="stylesheet">
</head>

<body>
    <header id="cabeza">
        <div class="elemento1">
            <ul class="nav texto20">

                <li><a href="#home" class="a-elem1"><?php echo $username ?></a></li>
                <li><a href="../Model/CerrarSesion.php" class="a-elem1"><?php echo $cerrar ?></a></li>
                <li><a href="AvisoExamen.php" class="a-elem1"><?php echo $examen ?></a></li>
                <?php if(isset($_SESSION['usuario'])){?>
                <li><a  href="ModificarCuenta.php?id=<?php echo $id_usuario ?>" class="a-elem1"><?php echo $informacion ?></a></li> <?php }
              else{?> <li onclick="document.getElementById('id01').style.display='block'" style="width:auto;">
              <a href="#about" class="a-elem1">Iniciar sesion / Registrarse</a></li> <?php } ?>

            </ul>
        </div>
        <div class="elemento2">
            <ul class="nav texto30">
                <li><a href="index.php"><img class="img-logo" src="../imagenes/logogto.png" alt="logotipo.png"
                            width="120" height="50"></a></li>
                <li><a href="Noticias.php">Noticias</a></li>
                <li><a href="Turismo.php">Turismo</a></li>
                <li><a href="Cursos.php">Cursos</a></li>
                <li><a href="Licencias.php">Licencia de conducir</a></li>
            </ul>
        </div>
    </header>
    </div>
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