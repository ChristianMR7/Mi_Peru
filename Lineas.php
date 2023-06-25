<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Machu Picchu</title>
    <!-- <link rel="stylesheet" href="MachuPichu.css"> -->
    <link rel="stylesheet" href="./contenido.css">
    <link rel="stylesheet" href="./bootstrap-5.0.2-dist/css/bootstrap.min.css">
</head>
<body>
    <header>
    <?php require('./layout/nav.php')?>
    <div id="carouselExampleControls" class="container carousel slide carousel-fade mt-5" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./img/lineas1.jpg" class="d-block w-100" alt="Lineas.jpg">
            </div>
            <div class="carousel-item">
                <img src="./img/lineas2.jfif" class="d-block w-100" alt="Lineas2.jpg">
            </div>
            <div class="carousel-item">
                <img src="./img/lineas3.jpg" class="d-block w-100" alt="Lineas3.jpg">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div> 
    </header>
    <main class="container shadow-lg p-3 mb-5 mt-3 bg-body rounded">
    <h1 class="fw-bolder shadow mb-3">LÍNEAS DE NAZCA</h1>
        <p class="text-muted fs-5">
            ¿Te imaginas sobrevolar un desierto lleno de misteriosas figuras de animales, plantas y formas geométricas? Eso es lo que te ofrece Nazca, una pequeña ciudad en el sur de Perú que alberga uno de los patrimonios culturales más impresionantes del mundo: las líneas de Nazca. Estos geoglifos fueron trazados por la cultura nazca hace más de 1500 años y aún hoy siguen desafiando la imaginación de los visitantes. Ven y descubre el enigma de las líneas de Nazca.   
        </p>
        <p class="text-muted fs-5">
            Nazca es un destino que no te puedes perder si viajas a Perú. Aquí podrás admirar las famosas líneas de Nazca, un conjunto de geoglifos que representan desde animales como el mono, el colibrí o la araña, hasta plantas y figuras geométricas. Estas líneas fueron declaradas Patrimonio de la Humanidad por la UNESCO y son una muestra de la creatividad y el ingenio de la cultura nazca. No te pierdas la oportunidad de sobrevolarlas y contemplar su magnitud y belleza.
        </p>
        <p class="text-muted fs-5">
            Si quieres vivir una experiencia única e inolvidable, tienes que visitar Nazca, la ciudad que guarda uno de los mayores misterios de la humanidad: las líneas de Nazca. Estas son unas enormes figuras dibujadas sobre el desierto de Nazca y Palpa, que solo pueden ser apreciadas desde el aire. Se cree que fueron hechas por la cultura nazca como parte de sus rituales y creencias. Podrás ver desde el colibrí, el mono o la araña, hasta el astronauta, el cóndor o la mano. Las líneas de Nazca te sorprenderán con su perfección y significado.
        </p>

        <div class="datos mt-5 mb-5 shadow p-3">
            <div class="row">
            <div class="col-sm-6 text-center">
                <div class="card">
                <div class="card-body">
                    <!-- <h1 class="card-title text-center fb-bold">18°C</h1> -->
                    <h2 class="text-center fw-bold">20°C</h2>
                    <p class="text-center text-muted fs-5">Min:12°C Max:25°C</p>
                </div>
                </div>
            </div>
            <div class="col-sm-6 text-center">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Mejor Epoca para Visitar</h5>
                    <h2 class="text-center fw-bolde">Octubre - Marzo</h2>
                    <p class="text-muted fs-5">Durante esta epoca el clima suele ser más cálido y los cielos suelen estar más despejados. Además, es temporada baja de turistas, por lo que podrás encontrar mejores precios y menos aglomeraciones.</p>
                </div>
                </div>
            </div>
            </div>
        </div>

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d207655.94594777166!2d-75.23607099169014!3d-14.739136822449144!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91141e46ccb532ad%3A0x1802d2b96697b591!2sL%C3%ADneas%20de%20Nazca!5e0!3m2!1ses!2spe!4v1687649678405!5m2!1ses!2spe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <div>
            <?php require('./layout/form.php')?>
        </div>    
    </main>
    <footer>
        <?php require('./layout/footer.php')?>
    </footer> 
    <script src="./bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
    <script src="./layout/validate.js"></script>
</body>
</html>