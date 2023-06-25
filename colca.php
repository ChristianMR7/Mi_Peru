<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colca</title>
    <link rel="stylesheet" href="./contenido.css">
    <link rel="stylesheet" href="./bootstrap-5.0.2-dist/css/bootstrap.min.css">
</head>
<body>
    <header>
        <nav>
            <?php include './layout/nav.php'?>
        </nav>
        <div id="carouselExampleControls" class="container carousel slide carousel-fade mt-5" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./img/colcados.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./img/colca-mirador-aerea.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./img/colca3.jpg" class="d-block w-100" alt="...">
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
        <div>
            <h1 class="fw-bolder shadow mb-3">VALLE DE COLCA</h1>
        </div>
        <div>
            <p class="text-muted fs-5">
                ¿Te gustaría ver el vuelo majestuoso del cóndor, el ave más grande del mundo? ¿Te fascinan los paisajes andinos, con sus montañas, ríos y terrazas agrícolas? ¿Quieres descubrir la cultura y la historia de los pueblos que habitan esta región? Entonces, no te pierdas el valle del Colca, un destino único y maravilloso que te ofrece todo esto y más. El valle del Colca, ubicado en la región de Arequipa, es uno de los cañones más profundos del mundo, con más de 4000 metros de profundidad. En este valle podrás admirar la belleza y la diversidad de la naturaleza, así como la riqueza y el encanto de la cultura local. El valle del Colca es un destino que te dejará sin aliento.
            </p>
            <p class="text-muted fs-5">
                Se trata de un valle que se extiende a lo largo de más de 100 kilómetros y que forma parte de uno de los cañones más profundos del mundo, el cañón del Colca. Este valle te ofrece la oportunidad de disfrutar de la naturaleza, la aventura y la cultura. Podrás ver el cóndor andino, el símbolo nacional del Perú, que sobrevuela el cielo con sus enormes alas. Podrás practicar deportes extremos como rafting, kayak o ciclismo en el río Colca o en las montañas que lo rodean. Y podrás conocer la historia y las tradiciones de los pueblos que viven en este valle, como los cabanas y los collaguas, que conservan su idioma, su vestimenta y su arquitectura. El valle del Colca es un lugar que te sorprenderá y te enamorará.
            </p>
            <p class="text-muted fs-5">
                Ven al valle del Colca, un destino que te ofrece naturaleza, historia y cultura. Este valle, situado en el sur del Perú, es el escenario de uno de los cañones más profundos del mundo, el cañón del Colca, que tiene una profundidad máxima de 4160 metros. En este valle podrás admirar el paisaje andino, con sus nevados, sus volcanes, sus ríos y sus lagunas. También podrás observar la fauna y la flora de esta zona, como el cóndor andino, el zorro andino o la vicuña. Y no solo eso, también podrás aprender sobre la cultura y la historia de los pueblos que habitan este valle desde hace siglos, como los cabanas y los collaguas, que se destacan por su arte textil, su cerámica y sus terrazas agrícolas. El valle del Colca es un lugar que te fascinará.
            </p>
            <p class="text-muted fs-5">
                La mejor época para visitar el Valle del Colca es entre mayo y septiembre, cuando hay menos lluvia y más sol.
            </p>
        </div>

        <div class="datos mt-5 mb-5 shadow p-3">
            <div class="row">
            <div class="col-sm-6 text-center">
                <div class="card">
                <div class="card-body">
                    <!-- <h1 class="card-title text-center fb-bold">18°C</h1> -->
                    <h2 class="text-center fw-bold">16°C</h2>
                    <p class="text-center text-muted fs-5">Min:0°C Max:30°C</p>
                </div>
                </div>
            </div>
            <div class="col-sm-6 text-center">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Mejor Epoca para Visitar</h5>
                    <h2 class="text-center fw-bolde">Marzo - Junio</h2>
                    <p class="text-muted fs-5">Otra opción es visitar el valle entre Noviembre y Febrero, que es la temporada de lluvias. Aunque hay más lluvias durante estos meses, el paisaje suele ser más verde y exuberante, y hay menos turistas en general</p>
                </div>
                </div>
            </div>
            </div>
        </div>

        <div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d122953.31415028086!2d-72.13522062779941!3d-15.629481366323596!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9169e734ffffffff%3A0xf48bc9d1b3a1cf02!2zQ2HDscOzbiBkZWwgQ29sY2E!5e0!3m2!1ses!2spe!4v1686787917397!5m2!1ses!2spe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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