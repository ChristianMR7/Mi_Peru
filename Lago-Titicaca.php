<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lago Titicaca</title>
    <link rel="stylesheet" href="./bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./contenido.css">
</head>
<body>
    <header>
        <?php require('./layout/nav.php')?>
        <div id="carouselExampleControls" class="container carousel slide carousel-fade mt-5" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="./img/lago-titicaca.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="./img/lago-titicaca2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="./img/lago-titicaca3.jpg" class="d-block w-100" alt="...">
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
        <h1 class="fw-bolder shadow mb-3">LAGO TITICACA</h1>
        <p class="text-muted fs-5">
            ¿Te gustaría navegar por el lago navegable más alto del mundo? El lago Titicaca, situado a más de 3800 metros sobre el nivel del mar, es un destino único que te ofrece la oportunidad de conocer la cultura y la naturaleza de los Andes. Podrás visitar las islas flotantes de los Uros, hechas de totora, una planta acuática, y conocer a sus habitantes, que conservan sus tradiciones ancestrales. También podrás explorar las islas de Taquile y Amantaní, donde podrás apreciar el arte textil y la hospitalidad de sus comunidades. El lago Titicaca te espera con sus aguas azules y sus paisajes impresionantes.
        </p>
        <p class="text-muted fs-5">
            El lago Titicaca es mucho más que un lago. Es un lugar sagrado para los pueblos andinos, que creen que de sus aguas emergieron los fundadores del Imperio Inca. Es un lugar lleno de historia, cultura y belleza, donde podrás admirar las ruinas de antiguas civilizaciones, como Tiwanaku y Sillustani, y aprender sobre sus misterios. Es un lugar donde podrás convivir con las comunidades locales, que te abrirán las puertas de sus casas y te mostrarán su forma de vida. Es un lugar donde podrás disfrutar de la naturaleza, observar aves, caminar por senderos o relajarte en las orillas del lago. El lago Titicaca es un lugar que no te puedes perder.
        </p>
        <p class="text-muted fs-5">
            Si buscas una experiencia diferente y auténtica, el lago Titicaca es el destino ideal para ti. Este lago, ubicado entre Perú y Bolivia, es el más grande de Sudamérica y el más alto del mundo que se puede navegar. En sus orillas e islas encontrarás una diversidad de paisajes, desde montañas nevadas hasta playas de arena blanca. También encontrarás una riqueza cultural incomparable, con pueblos que mantienen vivas sus costumbres y su idioma, el quechua o el aymara. Podrás participar en sus fiestas, degustar su gastronomía y admirar su artesanía. El lago Titicaca te ofrece una aventura inolvidable.
        </p>

        <div class="datos mt-5 mb-5 shadow p-3">
            <div class="row">
            <div class="col-sm-6 text-center">
                <div class="card">
                <div class="card-body">
                    <!-- <h1 class="card-title text-center fb-bold">18°C</h1> -->
                    <h2 class="text-center fw-bold">15°C</h2>
                    <p class="text-center text-muted fs-5">Min:0°C Max:25°C</p>
                </div>
                </div>
            </div>
            <div class="col-sm-6 text-center">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Mejor Epoca para Visitar</h5>
                    <h2 class="text-center fw-bolde">Mayo - Noviembre</h2>
                    <p class="text-muted fs-5">Otra opción es visitar el lago entre enero y marzo, que es la estación húmeda. Durante esta época, el clima es más caluroso y los días son más despejados, lo que facilita la vista del lago.</p>
                </div>
                </div>
            </div>
            </div>
        </div>

        <div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d982250.3603156891!2d-69.9611425101649!3d-15.913498770454428!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915d9b22f6af7c75%3A0xf682724d4df71dc!2sTiticaca!5e0!3m2!1ses!2spe!4v1687029179063!5m2!1ses!2spe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div>
            <?php require('./layout/form.php')?>
        </div>
    </main>
    <footer>
        <?php include './layout/footer.php' ?>
    </footer>
    <script src="./bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>