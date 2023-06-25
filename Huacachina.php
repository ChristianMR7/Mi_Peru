<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Huacachina</title>
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
                <img src="./img/huacachina1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./img/huacachina3.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./img/huacachina4.jpg" class="d-block w-100" alt="...">
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
        <h1 class="fw-bolder shadow mb-3">HUACACHINA</h1>
        <p class="text-muted fs-5">
            ¿Te imaginas un oasis en medio del desierto, rodeado de palmeras, dunas y un lago de color esmeralda? Ese lugar existe y se llama Huacachina, un destino único y encantador que te ofrece la oportunidad de vivir una aventura inolvidable. En Huacachina podrás practicar sandboarding, deslizarte por las dunas en un tubular o buggy, o simplemente relajarte y disfrutar del sol y la brisa. También podrás conocer la leyenda de la sirena que habita en el lago y que le da el nombre al lugar. Huacachina es un oasis de diversión y magia que no te puedes perder.
        </p>
        <p class="text-muted fs-5">
            Huacachina es uno de los lugares más sorprendentes y hermosos del Perú. Se trata de un oasis ubicado en el desierto de Ica, a solo cinco kilómetros de la ciudad del mismo nombre. Este oasis tiene la forma de una media luna y está rodeado de dunas gigantes que alcanzan los 100 metros de altura. En el centro del oasis hay un lago de aguas verdes que según la leyenda tiene propiedades curativas. En Huacachina podrás disfrutar de la naturaleza, la tranquilidad y la adrenalina. Podrás hacer sandboarding, pasear en tubular o buggy, o simplemente contemplar el atardecer desde las dunas. Huacachina es un lugar que te enamorará.
        </p>
        <p class="text-muted fs-5">
            Si quieres vivir una experiencia diferente y espectacular, ven a Huacachina, el único oasis natural de América. Este oasis, situado en el desierto de Ica, es un lugar lleno de historia, leyenda y aventura. Según la tradición oral, este oasis se formó cuando una princesa inca se bañaba en una fuente y fue sorprendida por un cazador. Al huir, dejó caer su manto y este se convirtió en las dunas que rodean el lago. La princesa se transformó en una sirena y desde entonces vive en el lago. En Huacachina podrás conocer esta y otras historias, así como practicar deportes extremos como sandboarding o tubular. También podrás relajarte y admirar la belleza del paisaje. Huacachina es un lugar que te fascinará.
        </p>

        <div class="datos mt-5 mb-5 shadow p-3">
            <div class="row">
            <div class="col-sm-6 text-center">
                <div class="card">
                <div class="card-body">
                    <!-- <h1 class="card-title text-center fb-bold">18°C</h1> -->
                    <h2 class="text-center fw-bold">24°C</h2>
                    <p class="text-center text-muted fs-5">Min:10°C Max:32°C</p>
                </div>
                </div>
            </div>
            <div class="col-sm-6 text-center">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Mejor Epoca para Visitar</h5>
                    <h2 class="text-center fw-bolde">Mayo - Octubre</h2>
                    <p class="text-muted fs-5">Durante esta época, el clima es más agradable y hay menos probabilidades de que el cielo esté nublado</p>
                </div>
                </div>
            </div>
            </div>
        </div>

        <div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3869.8276877915087!2d-75.76568072485077!3d-14.087347083244513!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9110e374cdcb726b%3A0x42ff9caf41c46386!2sLaguna%20de%20Huacachina%20Ica!5e0!3m2!1ses!2spe!4v1687028308396!5m2!1ses!2spe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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