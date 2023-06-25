<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valle Sagrado de los Incas</title>
    <link rel="stylesheet" href="./bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./contenido.css">
</head>
<body>
    <header>
        <?php include './layout/nav.php'?>
        <div id="carouselExampleControls" class="container carousel slide carousel-fade mt-5" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./img/valle-sagrado.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./img/vallesagrado.jfif" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./img/valle-sagrado1.jpg" class="d-block w-100" alt="...">
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
        <h1 class="fw-bolder shadow mb-3">VALLE SAGRADO DE LOS INCAS</h1>
        <p class="text-muted fs-5">
            ¿Te gustaría viajar al pasado y conocer la cultura y la historia de los incas? El valle sagrado de los incas te invita a explorar sus impresionantes sitios arqueológicos, que te mostrarán la grandeza y el ingenio de esta civilización. Disfruta de sus paisajes naturales, su gastronomía, su artesanía y su gente, que te harán sentir como en casa. El valle sagrado de los incas es un destino que no puedes perderte si quieres vivir una experiencia auténtica y enriquecedora.
        </p>
        <p class="text-muted fs-5">
            El valle sagrado de los incas es un lugar mágico y lleno de encanto, donde podrás descubrir los secretos y las maravillas de los antiguos habitantes de Perú. Visita sus espectaculares fortalezas, templos y ciudades, que te sorprenderán con su arquitectura y su simbolismo. Aventúrate por sus senderos, sus ríos y sus montañas, que te ofrecerán unas vistas increíbles y unas emociones únicas. El valle sagrado de los incas es un viaje que te cambiará la vida.
        </p>
        <p class="text-muted fs-5">
            Si quieres conocer el corazón del Imperio inca, tienes que visitar el valle sagrado de los incas, un lugar que te enamorará con su belleza y su historia. Aquí podrás admirar las obras maestras que los incas construyeron en armonía con la naturaleza, como Pisac, Ollantaytambo, Maras y Moray. También podrás disfrutar de sus tradiciones, su música, su arte y su gastronomía, que te harán sentir la esencia de Perú. El valle sagrado de los incas es un sueño hecho realidad.
        </p>

        <div class="datos mt-5 mb-5 shadow p-3">
            <div class="row">
            <div class="col-sm-6 text-center">
                <div class="card">
                <div class="card-body">
                    <!-- <h1 class="card-title text-center fb-bold">18°C</h1> -->
                    <h2 class="text-center fw-bold">18°C</h2>
                    <p class="text-center text-muted fs-5">Min:10°C Max:27°C</p>
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

        <div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15220.988489593681!2d-72.0893626144025!3d-13.333113688249291!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x916ddc67b07f175f%3A0xec350c3572844d9!2sValle%20Sagrado!5e0!3m2!1ses!2spe!4v1687034046054!5m2!1ses!2spe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div>
            <?php require('./layout/form.php')?>
        </div>
    </main>
    <footer>
        <?php include './layout/footer.php'?>
    </footer>
    <script src="./bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>