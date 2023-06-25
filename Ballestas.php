<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Islas Ballestas</title>
    <link rel="stylesheet" href="./bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./contenido.css">
</head>
<body>
    <header>
        <?php include './layout/nav.php'?>
        <div id="carouselExampleControls" class="container carousel slide mt-5" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./img/Ballestas.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./img/ballestas2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./img/Ballestas3.jpg" class="d-block w-100" alt="...">
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
        <h1 class="fw-bolder shadow mb-3">ISLAS BALLESTAS</h1>
        <p class="text-muted fs-5">
            ¿Te gustaría ver de cerca a miles de aves, lobos marinos, pingüinos y delfines? Entonces, no te pierdas las islas Ballestas, un conjunto de islotes rocosos que albergan una impresionante biodiversidad marina. Estas islas, ubicadas frente a la costa de Paracas, son un destino ideal para los amantes de la naturaleza y la fotografía. Podrás tomar un paseo en lancha y observar el famoso candelabro, un geoglifo de más de 100 metros de largo que se cree que tiene un origen preincaico. También podrás disfrutar de la belleza del paisaje y el sonido de las olas y los animales. Las islas Ballestas son un espectáculo que no te puedes perder.
        </p>
        <p class="text-muted fs-5">
            Las islas Ballestas son uno de los lugares más sorprendentes y mágicos del Perú. Estas islas, situadas en el océano Pacífico, son el hogar de una gran variedad de especies marinas, como aves guaneras, lobos marinos, pingüinos de Humboldt y delfines. Estas islas son un paraíso para los observadores de fauna y flora, que podrán admirar el colorido y la diversidad de este ecosistema. Además, estas islas guardan un misterio: el candelabro, una enorme figura trazada en la arena que se puede ver desde el mar y que se desconoce su origen y significado. Las islas Ballestas son un lugar que te sorprenderá y te encantará.
        </p>
        <p class="text-muted fs-5">
            Si quieres vivir una aventura marina inolvidable, ven a las islas Ballestas, un destino que te ofrece naturaleza, historia y diversión. Estas islas, localizadas en la reserva nacional de Paracas, son un santuario de vida silvestre, donde podrás ver más de 200 especies de aves, entre ellas pelícanos, flamencos y cormoranes. También podrás ver mamíferos marinos, como lobos marinos y delfines, e incluso pingüinos, que habitan en estas aguas templadas. Y no solo eso, también podrás descubrir el candelabro, un enigmático geoglifo que se cree que tiene una antigüedad de más de 2000 años y que se relaciona con las líneas de Nazca. Las islas Ballestas son un lugar que te fascinará.
        </p>

        <div class="datos mt-5 mb-5 shadow p-3">
            <div class="row">
            <div class="col-sm-6 text-center">
                <div class="card">
                <div class="card-body">
                    <!-- <h1 class="card-title text-center fb-bold">18°C</h1> -->
                    <h2 class="text-center fw-bold">21°C</h2>
                    <p class="text-center text-muted fs-5">Min:10°C Max:32°C</p>
                </div>
                </div>
            </div>
            <div class="col-sm-6 text-center">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Mejor Epoca para Visitar</h5>
                    <h2 class="text-center fw-bolde">Enero - Marzo</h2>
                    <p class="text-muted fs-5">Es cuando el clima es más caluroso y los días son más despejados, lo que facilita la vista de las islas y sus animales.</p>
                </div>
                </div>
            </div>
            </div>
        </div>

        <div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7751.368632835776!2d-76.39810967420354!3d-13.737552544589763!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x911063419d539c31%3A0x9b91eb94f6144c38!2sReserva%20Nacional%20Islas%20Ballestas!5e0!3m2!1ses!2spe!4v1687031384387!5m2!1ses!2spe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div>
            <?php include './layout/form.php'?>
        </div>
    </main>
    <footer>
        <?php include './layout/footer.php'?>
    </footer>
    <script src="./bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>