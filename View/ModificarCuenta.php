
<?php

include '../Model/PersonaModel.php';

 $persona=new Persona();
 $id  = isset($_GET['id'])?$_GET['id']:null;
 $personas    = $persona->getPersonaById($id);
 $nombre     = '';
 $apellidos = '';
 $curp     = '';
 $telefono = '';
 $email     = '';
 $pass = '';
 $estado    = '';
 $ciudad    = '';
 
 if($personas){
 $nombre =$personas[0]['nombre'];
 $apellido =$personas[0]['apellido'];
 $curp  =$personas[0]['curp'];
 $telefono =$personas[0]['telefono'];
 $email =$personas[0]['email'];
 $pass =$personas[0]['pass'];
 $estado =$personas[0]['estado'];
 $ciudad =$personas[0]['ciudad'];

 }
?>


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
        <h2>Mi informacion</h2>
        <p>Los campos marcados con * son obligatorios</p>

          <div class="w3-row-padding">
          
            <div class="w3-half">
            <input type="hidden" name="id" value="<?php echo $id ?>">
              <label>Nombre(s):</label>
              <input class="w3-input w3-border" type="text" name="nombre" value="<?php echo $nombre; ?>"required>
            </div>

            <div class="w3-half">
              <label>Apellido(s)</label>
              <input class="w3-input w3-border" type="text" name="apellido" value="<?php echo $apellido; ?>"required>
            </div>

          </div>
          <div class="w3-row-padding">

            <div class="w3-half">
              <label>CURP:</label>
              <input class="w3-input w3-border" type="text" name="curp" value="<?php echo $curp; ?>"required>
            </div>

            <div class="w3-half">
              <label>Telefono</label>
              <input class="w3-input w3-border" type="text" name="telefono" value="<?php echo $telefono; ?>" required>
            </div>

          </div>

          <div class="w3-row-padding">

            <div class="w3-half">
              <label>Email:</label>
              <input class="w3-input w3-border" type="text" name="email" value="<?php echo $email; ?>" required>
            </div>

            <div class="w3-half">
              <label>Contraseña</label>
              <input class="w3-input w3-border" type="text" name="pass" value="<?php echo $pass; ?>" required>
            </div>

          </div>

          <div class="w3-row-padding">
            <div class="w3-half">
            <label>Estado:</label>
          <select class="w3-select w3-border" name="estado" required>
            <option disabled selected><?php echo $estado; ?></option>
            <option >Opcion 1</option>
            <option >Opcion 2</option>
            <option >Opcion 3</option>
          </select></div>

            <div class="w3-half">
              <label>Ciudad:</label>
              <select class="w3-select w3-border" name="ciudad" required>
                <option disabled selected ><?php echo $ciudad; ?></option>
                <option >Opcion 1</option>
                <option >Opcion 2</option>
                <option >Opcion 3</option>
              </select>
            </div>

          </div>
          </div>
          <center><p> <input type="submit" name="edit" value="Modificar" class="w3-btn w3-teal"></p></center>
      </form>
    </div>
  </div>
</div>
<?php
    require_once('footer.php');
?>
</body>
</html>
