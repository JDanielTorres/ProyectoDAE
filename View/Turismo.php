<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/turismo.css">
</head>

<body>
    <?php
    require_once('header.php');
  ?>
    <div class="grid">
        <div class="elemento3">
            <h2>Turismo</h2>
            <hr>
            <div class="grid-turismo">
                
                <div class="cuadro azul">
                    <img class="noticia-img" src="../imagenes/guanajuato.jpg">
                    <h3>Informacion general</h3>
                    <ul>
                      <li>&#8226 Calendario de Eventos</li>
                      <li>&#8226 Museo</li>
                      <li>&#8226 Casas de Cultura</li>
                      <li>&#8226 Datos básicos de Gto</li>
                    </ul>
                </div>
                <div class="cuadro morado">
                    <img class="noticia-img" src="../imagenes/turista.jpeg">
                    <h3>Informacion para turistas</h3>
                    <ul >
                        <li>&#8226 ¿Cómo llegar?</li>
                        <li>&#8226 ¿Qué comer?</li>
                        <li>&#8226 Alojamiento</li>
                        <li>&#8226 Clima</li>
                        <li>&#8226 Tours y actividades</li>
                    </ul>
                </div>
                <div class="cuadro rojo">
                    <img class="mapa-img" src="../imagenes/ruta.jpg">
                    <h3>Viaja seguro</h3>
                    <ul>
                      <li>&#8226 Recomendaciones de viaje</li>
                      <li>&#8226 Mapas con las rutas mas seguras</li>
                    </ul>
                 
                </div>
                <div class="cuadro verde">
                    <img class="noticia-img" src="../imagenes/aventura.jpg">
                    <h3>Aventurate</h3>
                    <ul>
                      <li>&#8226 Áreas Naturales</li>
                      <li>&#8226 Cabalgata</li>
                      <li>&#8226 Vuelo en Globo</li>
                      <li>&#8226 Rafting</li>
                      <li>&#8226 Todo Terreno</li> 
                      <li>&#8226 Ciclismo de Montaña</li> 
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <?php
    require_once('footer.php');
?>

</body>

</html>