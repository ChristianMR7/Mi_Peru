<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Montaña-7-colores</title>
    <link rel="stylesheet" href="./bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./contenido.css">
</head>
<body>
    <header>
        <nav>
            <?php include './layout/nav.php'?>
        </nav>
        <div id="carouselExampleControls" class="container carousel slide mt-5" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./img/7colores.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./img/montañaColores.jfif" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./img/7colores1.jpg" class="d-block w-100" alt="...">
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
        <h1 class="fw-bolder shadow mb-3">MONTAÑA DE COLORES</h1>
        <div>
            <p class="text-muted fs-5">
                ¿Te gustaría ver uno de los paisajes más increíbles y coloridos del mundo? Entonces, no puedes dejar de visitar la montaña de colores, también conocida como Vinicunca o Rainbow Mountain, una maravilla natural que se encuentra en los Andes del Perú. Esta montaña, que se eleva a más de 5000 metros sobre el nivel del mar, tiene una variedad de tonos que van desde el rojo, el naranja, el amarillo, el verde, el azul y el morado, debido a la composición mineral de sus rocas. Para llegar a esta montaña tendrás que hacer una caminata de unas tres horas desde el pueblo de Cusipata, pero el esfuerzo valdrá la pena cuando veas la belleza y la magia de este lugar. La montaña de colores es un destino que te dejará sin palabras.
            </p>
            <p class="text-muted fs-5">
                La montaña de colores es uno de los lugares más sorprendentes y mágicos del Perú. Se trata de una montaña que parece sacada de un cuento de hadas, con sus colores vivos y contrastantes que cambian según la luz del sol. Esta montaña, que forma parte de la cordillera del Vilcanota, es el resultado de un proceso geológico que duró millones de años y que expuso las capas de minerales que le dan su aspecto único. Para llegar a esta montaña tendrás que hacer una excursión desde Cusco, que incluye una caminata por un paisaje espectacular, con vistas al nevado Ausangate, el más alto de la región. La montaña de colores es un lugar que te sorprenderá y te encantará.
            </p>
            <p class="text-muted fs-5">
                Si quieres vivir una experiencia única e inolvidable, ven a la montaña de colores, un destino que te ofrece naturaleza, aventura y cultura. Esta montaña, ubicada en el sur del Perú, es una atracción turística reciente que ha cautivado a miles de visitantes por su belleza y singularidad. Esta montaña tiene una gama de colores que parece pintada a mano, pero que en realidad se debe a la erosión y la oxidación de los minerales que la componen. Para llegar a esta montaña tendrás que hacer un viaje desde Cusco hasta el pueblo de Cusipata, donde empezarás una caminata por un sendero rodeado de montañas, ríos y animales como alpacas y llamas. También podrás conocer la cultura y las costumbres de las comunidades locales que viven en esta zona. La montaña de colores es un lugar que te fascinará.
            </p>
        </div>

        <div class="datos mt-5 mb-5 shadow p-3">
            <div class="row">
            <div class="col-sm-6 text-center">
                <div class="card">
                <div class="card-body">
                    <!-- <h1 class="card-title text-center fb-bold">18°C</h1> -->
                    <h2 class="text-center fw-bold">8°C</h2>
                    <p class="text-center text-muted fs-5">Min:-6°C Max:21°C</p>
                </div>
                </div>
            </div>
            <div class="col-sm-6 text-center">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Mejor Epoca para Visitar</h5>
                    <h2 class="text-center fw-bolde">Abril - Octubre</h2>
                    <p class="text-muted fs-5">Durante esta época, el clima suele ser suave y hay muchas probabilidades de que el cielo esté despejado. Además, los colores de la montaña se ven más intensos y contrastados.</p>
                </div>
                </div>
            </div>
            </div>
        </div>


        <div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2303.1853322660745!2d-71.30521086803664!3d-13.870188326477228!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x916ee75ecb6992b3%3A0x52e36a3d5e9a11a2!2sMonta%C3%B1a%207%20colores!5e0!3m2!1ses!2spe!4v1687027091296!5m2!1ses!2spe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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