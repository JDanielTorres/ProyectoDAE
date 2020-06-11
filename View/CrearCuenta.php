<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/main.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
  <?php
    require_once('header.php');
  ?>
<div class = "grid">
<?php
    require_once('Login.php');
  ?>
  <div class="elemento3">
    <div class="body-grid">
      <form action ="../Controller/PersonaController.php" method="POST" class="w3-container w3-card-4 w3-light-grey" >
        <h2>Crear cuenta</h2>
        <p>Los campos marcados con * son obligatorios</p>

          <div class="w3-row-padding">

            <div class="w3-half">
              <label>Nombre(s):</label>
              <input class="w3-input w3-border" type="text" name="nombre" required>
            </div>

            <div class="w3-half">
              <label>Apellido(s)</label>
              <input class="w3-input w3-border" type="text" name="apellido" required>
            </div>

          </div>
          <div class="w3-row-padding">

            <div class="w3-half">
              <label>CURP:</label>
              <input class="w3-input w3-border" type="text" name="curp" required>
            </div>

            <div class="w3-half">
              <label>Telefono</label>
              <input class="w3-input w3-border" type="text" name="telefono" required>
            </div>

          </div>

          <div class="w3-row-padding">

            <div class="w3-half">
              <label>Email:</label>
              <input class="w3-input w3-border" type="text" name="email" required>
            </div>

            <div class="w3-half">
              <label>Contraseña</label>
              <input class="w3-input w3-border" type="text" name="pass" required>
            </div>

          </div>

          <div class="w3-row-padding">
            <div class="w3-half">
            <label>Estado:</label>
          <select class="w3-select w3-border" name="estado" required>
            <option value="" disabled selected>Selecciona una opcion</option>
            <option >Aguascalientes</option>
            <option >Guanajuato</option>
            <option >Puebla</option>
            <option >Queretaro</option>
          </select></div>

            <div class="w3-half">
              <label>Ciudad:</label>
              <select class="w3-select w3-border" name="ciudad" required>
                <option value="" disabled selected >Selecciona una opcion</option>
                <option>Celaya</option>
                <option>Guanajuato</option>
                <option>Irapuato</option>
                <option>León</option>
                <option>Salamanca</option>
                <option>San Francisco</option>
              </select>
            </div>

          </div>
          </div>
          <center><p> <input type="submit" name="create" value="Registrar" class="w3-btn w3-teal"></p></center>
      </form>
    </div>
  </div>
</div>
<?php
    require_once('footer.php');
?>
</body>
</html>
