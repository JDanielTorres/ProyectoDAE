


<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/index.css">
</head>

<body>
    <?php
    require_once('header.php');
?>
    <div class="grid">
    <?php require_once('Login.php'); ?>
        <div class="elemento3">
            
            <div class="grid-index">
            
                <div class="opciones">
                    <h3>¡Esto es importante! Conoce el nuevo reglamento</h3>
                    <a href="Licencias.php"><img class="opciones-img-m" src="../imagenes/reglamento.jpg"></a>

                </div>

                <div class="propaganda">
                    <img class="propaganda-img" src="../imagenes/propaganda1.jpeg"><br><br>
                    <img class="propaganda-img" src="../imagenes/propaganda5.jpg">
                </div>

                <div class="opciones">
                    <h3>¿Quieres tramitar tu licencia para conducir?</h3>
                    <a href="Licencias.php"><img class="opciones-img" src="../imagenes/Licencia.jpg"></a>
                    <h3>¡Da clic aqui para mayor informacion!</h3>
                </div>
                <div class="opciones">
                    <h3>¿Conoces los lineamientos de transito?</h3>
                    <a href="AvisoExamen.php"><img class="opciones-img" src="../imagenes/semaforo.jpg"></a>
                    <h3>¡Demuestra que tanto sabes dando clic aqui!</h3>
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