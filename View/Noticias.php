<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/main.css">
<link rel="stylesheet" href="../css/noticias.css">
</head>
<body>
<?php
    require_once('header.php');
  ?>
<div class = "grid">
  <div class="elemento3">
    <h2>Noticias mas relevantes</h2>
    <hr>
<div class = "grid-noticia">
      <div class = "noticia"><a class= "no-line" href="Articulo.php">
        <img class ="noticia-img" src="../imagenes/articulo.jpg">
        <h3>Autos: Comienzan a bajar los precios</h3>
        <p>09/06/2020</p></a>
      </div>

      <div class = "noticia"><a class= "no-line" href="#news">
        <img class ="noticia-img" src="../imagenes/noticia6.jpg">
        <h3>Baja el precio de la gasolina</h3>
        <p>08/06/2020</p></a></div>
      
      <div class = "noticia">
        <img class ="noticia-img" src="../imagenes/noticia4.jpg">
        <h3>COVID: Comienzan a salir de sus casas</h3>
        <p>07/06/2020</p>
      </div>
      
      <div class = "noticia">
        <img class ="noticia-img" src="../imagenes/noticia3.jpg">
        <h3>Escuelas de manejo siguen cerradas</h3>
        <p>06/06/2020</p>
      </div>
      
      <div class = "noticia">
        <img class ="noticia-img" src="../imagenes/noticia2.jpg">
        <h3>Accidente en la carretera Leon - Silao</h3>
        <p>05/06/2020</p>
      </div>
      
      <div class = "noticia">
        <img class ="noticia-img" src="../imagenes/economia.jpg">
        <h3>Economia cae ante Pandemia</h3>
        <p>04/06/2020</p>
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
