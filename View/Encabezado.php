<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/main.css">
<link rel="stylesheet" href="../css/Login.css">
</head>
<body>

<div class = "grid">
  <div class="elemento1">
    <ul class="nav texto20">
      <li><a href="#home">Directorio</a></li>
      <li><a href="#news">Accesibilidad</a></li>
      <li><a href="#contact">Contacto</a></li>
      <li onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><a href="#about">Iniciar sesion / Registrarse</a></li>
    </ul>
  </div>
  <div class="elemento2">
    <ul class ="nav texto30">
    <li><a href="#home"><img class ="img-logo" src="../imagenes/logogto.png" alt="logotipo.png" width="130" height="70"></a></li>
    <li><a href="#home">Noticias</a></li>
    <li><a href="#news">Turismo</a></li>
    <li><a href="#contact">Cursos</a></li>
    <li><a href="#about">Licencia de conducir</a></li>
  </ul></div>

  <div id="id01" class="modal">
  
    <form class="modal-content animate" action="/action_page.php" method="post">
      <div class="imgcontainer">
        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
        <img src="imagenes/GTO.jpg" alt="Avatar" class="avatar">
      </div>
  
      <div class="container">
        <label for="uname"><b>Usuario</b></label>
        <input type="text" placeholder="Introducir nombre de usuario" name="uname" required>
  
        <label for="psw"><b>Contraseña</b></label>
        <input type="password" placeholder="Introducir contraseña" name="psw" required>
        
        <div class="centro">
            <button type="submit">Iniciar sesion</button>
            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
         </div>

      </div>
  
      <div class="container centro" style="background-color:#f1f1f1">
        <span class="psw">¿Aun no estas registrado?<a href="CrearCuenta.html">¡Registrate aqui!</a></span><br>
        <span class="psw">¿Olvidate la contraseña?<a href="#">¡Recuperala aqui!</a></span>
      </div>
    </form>
  </div>

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
