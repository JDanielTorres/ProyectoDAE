<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Login.css">
    <title>Document</title>
    <script src="validar.js"></script>
</head>
<body>

<div class="elemento3">
    <div class="body-grid">
      <div id="id01" class="modal">
  
        <form class="modal-content animate" action="../Model/ValidarUsuario.php" method="post" onsubmit="return validarUsuario();">
          <div class="imgcontainer">
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
            <img src="../imagenes/GTO.jpg" alt="Avatar" class="avatar">
          </div>
      
          <div class="container">
            <label for="uname"><b>Usuario</b></label>
            <input type="text" id="usuario" placeholder="Introducir nombre de usuario" name="usuario" required>
      
            <label for="psw"><b>Contraseña</b></label>
            <input type="password" placeholder="Introducir contraseña" name="pass" required>
            
            <div class="centro">
                <button type="submit">Iniciar sesion</button>
                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
             </div>

          </div>
      
          <div class="container centro" style="background-color:#f1f1f1">
            <span class="psw">¿Aun no estas registrado?<a href="CrearCuenta.php">¡Registrate aqui!</a></span><br>
            <span class="psw">¿Olvidate la contraseña?<a href="#">¡Recuperala aqui!</a></span>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script>
 
  var modal = document.getElementById('id01');
  

  window.onclick = function(event) {
      if (event.target == modal) {
          modal.style.display = "none";
      }
  }
  </script>
</body>
</html>