<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/main.css">
<link rel="stylesheet" href="../css/cursos.css">
</head>
<body>
<?php
    require_once('header.php');
  ?>
<div class = "grid">
<?php require_once('Login.php'); ?>
<div class="elemento3">
    <h2>Capitulos </h2>
    <div class = "grid-capitulo">
    <div class = "capitulo">
    <h2 class="color-aqua">Capitulo 1: Los peatones</h2>
          <hr>
          <div class="contenedor-capitulo">
           <div class="contenedor-video"><a class="link-no-linea" href="VideoCurso.php">
             <img class = "video-img" src="../imagenes/video1.jpg" alt="">
             <h3>1.- Introduccion</h3></a>
           </div>
           <div class="contenedor-video"><a class="link-no-linea" href="#">
            <img class = "video-img" src="../imagenes/video2.jpg" alt="">
            <h3>2.- Infracciones</h3></a>
          </div>
          <div class="contenedor-video"><a class="link-no-linea" href="#">
            <img class = "video-img" src="../imagenes/video3.jpg" alt="">
            <h3>3.- Preferencias</h3></a>
          </div>
          </div>
          <span class="derecha"> <a href="ListaVideos.php">Ver más &raquo;</a> </span>
        </div>
        
        <div class = "capitulo">
          <h2 class="color-aqua">Capitulo 2: Los ciclistas</h2>
          <hr>
          <div class="contenedor-capitulo">
           <div class="contenedor-video">
             <img class = "video-img" src="../imagenes/video4.jpg" alt="">
             <h3>1.- Introduccion</h3>
           </div>
           <div class="contenedor-video">
            <img class = "video-img" src="../imagenes/video5.jpg" alt="">
            <h3>2.- Las ciclovias</h3>
          </div>
          <div class="contenedor-video">
            <img class = "video-img" src="../imagenes/video6.png" alt="">
            <h3>3.- Señalamientos</h3>
          </div>
          </div>
          <span class="derecha"> <a href="ListaVideos.php">Ver más &raquo;</a> </span>
          <p></p>
        </div>
     

      </div>
      
      
     
      
    </div>
  </div>
</div>
<?php
    require_once('footer.php');
?>
</body>
</html>
