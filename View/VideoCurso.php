<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="../css/video-js.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/cursos.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">
    <script src="../js/video.js"></script>


</head>

<body>
    <?php
    require_once('header.php');
  ?>
    <div class="grid">
        <?php
    require_once('Login.php');
  ?>
        <div class="elemento3">
            <h2>Video: 1.-Introduccion</h2>
            <hr>
            <div class="grid-capitulo">

                <video class="fm-video video-js vjs-16-9 vjs-big-play-centered" data-setup="{}" controls id="fm-video">
                    <source src="../video/transitoMX.mp4" type="video/mp4">
                </video>

            </div>
            <h3>Descripcion</h3>
            <hr>
            <h4>Estar al frente de un volante sin duda es una sensación de satisfacción y adrenalina. Sin embargo,
                también debes saber que es una gran responsabilidad.
                No es suficiente apostar por la experiencia de tener años como conductor. Entre las principales
                recomendaciones está conocer tus derechos y obligaciones. Para ello, la mejor manera es echar un vistazo
                al reglamento de tránsito.</h4>

            <h4>Además, si eres de lo que deben recorren las calles de la Ciudad de México, debes de tomar en cuenta que
                el reglamento de tránsito de esta metrópoli ha cambiado. Posiblemente no es el mismo que conociste
                cuando aprendiste a manejar un auto.</h4>




        </div>
    </div>
    </div>
    <?php
    require_once('footer.php');
?>
</body>
<script>
var reproductor = videojs('fm-video', {
    fluid: true
});
</script>

</html>