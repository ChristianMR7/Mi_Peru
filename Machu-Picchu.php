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
    <?php include './layout/nav.php'?>
    <div id="carouselExampleControls" class="container carousel slide carousel-fade mt-5" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./img/machu-piccho2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./img/MachuPicchu.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./img/machu-picchu-g7a2e56933_1280.jpg" class="d-block w-100" alt="...">
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
    <h1 class="fw-bolder shadow mb-3">MACHU PICCHU</h1>
        <p class="text-muted fs-5">
            ¿Te imaginas contemplar el amanecer desde una de las maravillas del mundo? Machu Picchu te espera con su magia y misterio, rodeada de impresionantes montañas y bosques nublados. Descubre la historia y la cultura de los incas en este increíble santuario, que te hará sentir parte de un sueño. No esperes más y reserva tu viaje a Machu Picchu, la ciudad perdida de los incas.   
        </p>
        <p class="text-muted fs-5">
            Si buscas una experiencia única e inolvidable, no puedes dejar de visitar Machu Picchu, el tesoro más preciado de Perú. Esta ciudadela de piedra te sorprenderá con su belleza y armonía, que reflejan la sabiduría y el arte de los incas. Explora sus templos, palacios, andenes y fuentes, y déjate envolver por la energía y el misticismo que emana de este lugar sagrado. Ven a Machu Picchu y vive una aventura que recordarás por siempre.
        </p>
        <p class="text-muted fs-5">
            Machu Picchu es mucho más que una atracción turística, es un patrimonio de la humanidad que te cautivará con su encanto y su historia. Esta antigua ciudad inca se encuentra en lo alto de una montaña, rodeada de un paisaje espectacular que te dejará sin aliento. Aquí podrás admirar la arquitectura y la ingeniería de los incas, que lograron construir una obra maestra en armonía con la naturaleza. No te pierdas la oportunidad de conocer Machu Picchu, el legado más fascinante de Perú.
        </p>

        <div class="datos mt-5 mb-5 shadow p-3">
            <div class="row">
            <div class="col-sm-6 text-center">
                <div class="card">
                <div class="card-body">
                    <!-- <h1 class="card-title text-center fb-bold">18°C</h1> -->
                    <h2 class="text-center fw-bold">18°C</h2>
                    <p class="text-center text-muted fs-5">Min:12°C Max:24°C</p>
                </div>
                </div>
            </div>
            <div class="col-sm-6 text-center">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Mejor Epoca para Visitar</h5>
                    <h2 class="text-center fw-bolde">Mayo - Octubre</h2>
                    <p class="text-muted fs-5">Durante esta época, el clima suele ser soleado con cielos despejados y las vistas son más espectaculares.</p>
                </div>
                </div>
            </div>
            </div>
        </div>

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3883.983921763512!2d-72.4998964258172!3d-13.226325564981586!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x916d9a5f89555555%3A0x3a10370ea4a01a27!2sMachu%20Picchu!5e0!3m2!1ses!2spe!4v1685408882309!5m2!1ses!2spe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <div>
            <?php require('./layout/form.php')?>
        </div>    
    </main>
    <footer>
        <?php include './layout/footer.php'?>
    </footer> 
    <script src="./bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
    <script src="./layout/validate.js"></script>
</body>
</html>