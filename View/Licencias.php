<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/main.css">
<link rel="stylesheet" href="../css/licencias.css">
</head>
<body>
<?php
    require_once('header.php');
?>
<div class = "grid">
<?php require_once('Login.php'); ?>
  <div class="elemento3">
    <h2>Informacion para el tramite de licencias</h2>
    <hr>
<div class = "grid-noticia">

      <div class = "noticia">
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3723.1450814677833!2d-101.6849768!3d21.0668669!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842bbf8029163323%3A0x92dadacbc01d5351!2sMunicipal%20Transit%20of%20Le%C3%B3n!5e0!3m2!1ses-419!2smx!4v1591601879551!5m2!1ses-419!2smx" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        <h3>Tramita tu licencia en tu modulo mas cercano</h3>
       
      </div>
      
      <div class = "requisitos">
        <h3>Requisitos:</h3>
        <p>&raquo; Identificación oficial con fotografía.</p>
          <p>&raquo; Credencial de elector, pasaporte ó cartilla militar.
            <p>&raquo; En el caso de personas del extranjero, deberán presentar el pasaporte y documento que acredite su legal estancia en el país.</p>
            <p>&raquo; Comprobante de domicilio (recibo de agua, luz o teléfono vigente y que no exceda de 3 meses).</p>
            <p>&raquo; Identificación oficial con fotografía vigente de los padres o de la persona que comparezca a registrar (original y copia).</p>
            <p>&raquo; Certificado médico expedido por algún instituto de salud (Cruz Roja, ISSSTE, IMSS, Hospital General o centro de salud).</p>
            <p>&raquo; El certificado médico deberá contener el tipo de sangre, agudeza visual (indicando si la persona requiere lentes o no) y si la persona es apta para conducir vehículo de motor.</p>
            <h4>Licencias tipo “B” y “C”</h4>
          
            <p class="color-rojo">&raquo; Para poder efectuar el trámite para licencias tipo “b” y “c”, el solicitante deberá contar con 3 años de antigüedad con su licencia “A”.</p>
            <p class="color-rojo">&raquo; Acreditar el curso de capacitación para operadores del servicio público.</p>
            
           <h4>Los costos de los trámites de licencia por primera vez y renovación tipo A y B son:</h4>
            <p>Dos años 552 pesos</p>
            <p>Tres años 703 pesos</p>
            <p>Cinco años 852 pesos</p>
            <p>Duplicado en 196 pesos</p>

            <h4>Para el tipo C, los costos son:</h4>
              <p>Dos años 596 pesos</p>
              <p>Tres años 718 pesos</p>
              <p>Cinco años 928 pesos</p>
              <p>Duplicados en 196 pesos</p>

              <h4>Para el tipo D, el costo es:</h4>
                <p>Dos años 297 pesos</p>
                <p>Tres años 327 pesos</p>
                <p> Cinco años 456 pesos</p>
                <p> Duplicado en 196 pesos</p>
          </div>
      
      <div class = "noticia">
        <img class ="noticia-img" src="../imagenes/Licencia.jpg">
        <h3>¡Adquierela YA!</h3>
        
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
