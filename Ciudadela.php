<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciudadeda Chan Chan</title>
    <link rel="stylesheet" href="./bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./contenido.css">
</head>
<body>
    <header>
        <nav>
            <?php include './layout/nav.php'?>
        </nav>
        <div id="carouselExampleControls" class="container carousel slide carousel-fade mt-5" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./img/ciudadela1.jfif" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./img/ciudadela3.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./img/ciudadela4.jfif" class="d-block w-100" alt="...">
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
        <h1 class="fw-bolder shadow mb-3">CIUDADELA CHAN-CHAN</h1>
        <p class="text-muted fs-5">
            ¿Te gustaría viajar al pasado y conocer la cultura de los chimúes, una de las civilizaciones más importantes del antiguo Perú? Entonces, no puedes dejar de visitar la ciudadela de Chan Chan, la ciudad de barro más grande de América y una de las más grandes del mundo. Esta ciudadela, declarada Patrimonio de la Humanidad por la UNESCO, fue la capital del reino chimú, que se extendió por gran parte de la costa norte del Perú entre los siglos XII y XV. En esta ciudadela podrás admirar la arquitectura y el arte de los chimúes, que se caracterizan por sus murales con motivos geométricos y zoomorfos, sus plazas ceremoniales y sus sistemas hidráulicos. La ciudadela de Chan Chan es un lugar que te transportará a otra época.
        </p>
        <p class="text-muted fs-5">
            La ciudadela de Chan Chan es uno de los lugares más impresionantes y misteriosos del Perú. Esta ciudadela, construida enteramente de adobe, fue el centro político y religioso de los chimúes, una cultura que dominó la costa norte del Perú antes de ser conquistada por los incas. Esta ciudadela, que abarca más de 20 km2, está compuesta por 10 palacios o ciudadelas menores, donde vivían los gobernantes chimúes y sus familias. Cada palacio tiene su propia estructura y decoración, con murales que representan animales, plantas y escenas marinas. La ciudadela de Chan Chan es un testimonio de la grandeza y el ingenio de los chimúes.
        </p>
        <p class="text-muted fs-5">
            Si quieres conocer una de las maravillas del Perú y del mundo, tienes que visitar la ciudadela de Chan Chan, la ciudad prehispánica más grande de Sudamérica y una obra maestra de la arquitectura de barro. Esta ciudadela, ubicada cerca de Trujillo, fue la sede del poder chimú, una cultura que se desarrolló entre los años 900 y 1470 d.C. En esta ciudadela podrás recorrer los palacios donde vivían los reyes chimúes, que tenían sus propios templos, almacenes, jardines y estanques. También podrás apreciar la belleza y el simbolismo de los murales que adornan las paredes, con figuras de peces, aves, olas y redes. La ciudadela de Chan Chan es un lugar que te sorprenderá y te cautivará.
        </p>

        <div class="datos mt-5 mb-5 shadow p-3">
            <div class="row">
            <div class="col-sm-6 text-center">
                <div class="card">
                <div class="card-body">
                    <!-- <h1 class="card-title text-center fb-bold">18°C</h1> -->
                    <h2 class="text-center fw-bold">19°C</h2>
                    <p class="text-center text-muted fs-5">Min:14°C Max:24°C</p>
                </div>
                </div>
            </div>
            <div class="col-sm-6 text-center">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Mejor Epoca para Visitar</h5>
                    <h2 class="text-center fw-bolde">Mayo - Diciembre</h2>
                    <p class="text-muted fs-5">Durante esta época, el clima suele ser soleado y seco, lo que permite apreciar mejor los detalles arquitectónicos y los relieves de los muros de adobe.</p>
                </div>
                </div>
            </div>
            </div>
        </div>

        <div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d4697.306649470621!2d-79.07533059644342!3d-8.106744674254482!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sciudadela%20chan%20chan!5e0!3m2!1ses!2spe!4v1687032420109!5m2!1ses!2spe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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