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
            <h2>Aviso importante sobre el examen</h2>
            <hr>
            <div class="grid-examen">


                <div class="aviso">
                    <p>El examen que aqui se muestra no tiene ninguna validez oficial, simplemente de herramienta </p>
                    <p>para probar sus conocimientos previos al realizar el curso y/o finalizar el mismo</p>
                    <h3></h3>

                    <p>Los resultados obtenidos al finalizar la prueba o examen se podran consultar en el apartado de
                        progreso.</p>
                    <p>Cada prueba realizada quedara guardada en su historial de resultados</p>
                    <h3></h3>

                    <p>Los resultados que usted obtega seran utilizados como objeto de estudio para mostrar una
                        estadistica</p>
                    <p>sobre sus conocimientos acerca del reglamento de transito.</p>


                </div>
                
                <div class="aviso2">
                    <img class="aviso-img" src="../imagenes/aviso.jpg">
                    <h3></h3>
                    <a href="Examen.php"> <button class="w3-btn w3-teal">Aceptar y continuar</button></a>
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