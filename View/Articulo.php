<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/articulo.css">
</head>

<body>
    <?php
    require_once('header.php');
?>
    <div class="grid">
        <?php require_once('Login.php'); ?>
        <div class="elemento3">
            <h2>Autos: Comienzan a bajar los precios</h2>
            <hr>
            <p class="gris" > Fecha de Publicacion: 09/Jun/2020 Autor: Becerra Lozano David T. </p>
            <div class="grid-noticia">

                <div class="noticia">
                    <img class="noticia-img" src="../imagenes/articulo.jpg">
                     <p>Precios de autos caen hasta 33%.</p>
                </div>

                <div class="requisitos">
                    <h3>Los precios de los coches comienzan a bajar, ¿cuáles más?</h3>

                    <p>Junio es el mes para dejar atrás la pandemia. El último trimestre ha sido nefasto en todos los
                        sentidos</p>
                    <p>pero toca ya arrancar. pero toca ya arrancar. Las fases más restrictivas del estado de alarma se
                        han</p>
                    <p>superado y la actividad comercial se va retomando poco a poco. También en los concesionarios,
                        ávidos</p>
                    <p>por volver a vender coches nuevos para, poco a poco, salvar el año.</p>
                    <h4></h4>
                    <p>Las ventas de coches han caido nada menos que un 54,2% hasta mayo. Se han matriculado 
                        mitad</p>
                    <p> menos de la de coches que el pasado año. Pero hay indicios para la esperanza:</p>
                    
                    <h4></h4>
                   <p> &#8226 La intención de compra alcanzó a finales del pasado mes los niveles previos a la compra.</p>
                   <p> &#8226 Es de esperar que la semana que viene se materialicen también las ayudas a la compra. Hacen falta</p>
                   <p> para que remonte una industria clave en nustro país como es la de la automoción. Es un sector que</p>
                   <p> ayuda (y mucho) a aumentar la velocidad de la economía, empujando a otros.</p>
                      
                   <h3>Precios medios de coches nuevos.</h3>
                   <img  src="../imagenes/grafica.jpg">
                  
                   <h4></h4>
                    <p>Los precios medios habían ido subiendo debido a muchas incorporaciones de coches híbridos, híbridos </p>
                    <p>enchufables y eléctricos en el mercado… que tienen un precio de partida más elevado. Parece que la </p>
                   <p>diferencia empieza a reducirse.</p>
                   
                  </div>

                <div class="noticia">
                    <img class="noticia-img" src="../imagenes/auto.jpg">
                    <p>Nuevo Toyota Mirai 2021.</p>
                </div>
                <div class="noticia">
                    <img class="noticia-img" src="../imagenes/huawei.jpg">
                    <p>Mas elegante que nunca: Huawei P40 pro.</p>
                </div>
                <div class="noticia">
                    <img class="noticia-img" src="../imagenes/xbox.jpg">
                    <p>Maxima potencia: XBOX Series X.</p>
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