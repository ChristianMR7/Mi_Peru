<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Huascarán</title>
    <link rel="stylesheet" href="./contenido.css">
    <link rel="stylesheet" href="./bootstrap-5.0.2-dist/css/bootstrap.min.css">
</head>
<body>
    <header>
        <?php require('./layout/nav.php')?>
        <div id="carouselExampleFade" class="carousel slide carousel-fade container mt-5" data-bs-ride="carousel">
            <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./img/Parque Nacional Huascaran 2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./img/Parque Nacional Huascaran-caminata.jfif" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./img/Parque Nacional Huascaran.jfif" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>
    </header>
    <main class="container shadow-lg p-3 mb-5 mt-3 bg-body rounded">
        <h1 class="fw-bolder shadow mb-3">PARQUE NACIONAL HUASCARÁN</h1>
        <p class="text-muted fs-5">
            ¿Te gustan los deportes de aventura? ¿Te fascinan las montañas? ¿Quieres descubrir el legado de una de las culturas más antiguas del Perú? Entonces, Áncash es el destino perfecto para ti. Esta región, situada en el norte del país, te ofrece una variedad de opciones para disfrutar al máximo. Podrás escalar el Huascarán, la cumbre más alta del Perú, o practicar trekking, ciclismo o canotaje en el Parque Nacional Huascarán, declarado Patrimonio de la Humanidad por la UNESCO. También podrás visitar las ruinas de Chavín de Huántar, el centro ceremonial más importante de la cultura Chavín, que se desarrolló hace más de 3000 años. Y no te olvides de probar el delicioso cebiche y el pisco sour, los platos típicos de la gastronomía peruana.
        </p>
        <p class="text-muted fs-5">
            Áncash es una región que lo tiene todo: naturaleza, historia y cultura. En esta región podrás admirar los paisajes más espectaculares del Perú, con glaciares, lagunas, valles y bosques que te dejarán sin aliento. Podrás conocer el pasado milenario del Perú, con sitios arqueológicos como Chavín de Huántar, Sechín o Caral, que te revelarán los secretos de las civilizaciones preincaicas. Y podrás vivir la cultura actual del Perú, con sus fiestas, su música, su arte y su gastronomía. Áncash es una región que te sorprenderá y te enamorará.
        </p>
        <p class="text-muted fs-5">
            Si quieres vivir una experiencia única e inolvidable, ven a Áncash, la región de los nevados y las flores. Esta región te ofrece la oportunidad de explorar el Parque Nacional Huascarán, uno de los lugares más hermosos y biodiversos del mundo, donde podrás ver animales como el cóndor, el puma o la vicuña. También te ofrece la posibilidad de aprender sobre la historia y la cultura del Perú, visitando lugares como Chavín de Huántar, el observatorio astronómico más antiguo de América, o Caral, la ciudad más antigua del continente. Y por supuesto, te ofrece la delicia de degustar los sabores de la cocina peruana, reconocida como una de las mejores del mundo. Áncash es una región que no te decepcionará.
        </p>

        <div class="datos mt-5 mb-5 shadow p-3">
            <div class="row">
            <div class="col-sm-6 text-center">
                <div class="card">
                <div class="card-body">
                    <!-- <h1 class="card-title text-center fb-bold">18°C</h1> -->
                    <h2 class="text-center fw-bold">16°C</h2>
                    <p class="text-center text-muted fs-5">Min:2°C Max:24°C</p>
                </div>
                </div>
            </div>
            <div class="col-sm-6 text-center">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Mejor Epoca para Visitar</h5>
                    <h2 class="text-center fw-bolde">Mayo - Noviembre</h2>
                    <p class="text-muted fs-5">Se puede disfrutar mejor de las actividades al aire libre como el trekking, el montañismo, el ciclismo y la fotografía.</p>
                </div>
                </div>
            </div>
            </div>
        </div>

        <div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d44555.724415669014!2d-77.46816059026204!3d-9.225786981384283!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91af292782e2bebf%3A0x9660bb062c5ffa72!2sParque%20Nacional%20Huascar%C3%A1n!5e0!3m2!1ses!2spe!4v1687030358212!5m2!1ses!2spe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div>
            <?php require('./layout/form.php')?>
        </div>
    </main>
    <footer>
        <?php require('./layout/footer.php')?>
    </footer>
    <script src="./bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>