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
                <img src="./img/Parque Nacional Manu.jpg" class="d-block w-100" alt="Manu.jpg">
            </div>
            <div class="carousel-item">
                <img src="./img/Parque Nacional Manu1.jpg" class="d-block w-100" alt="Manu1.jpg">
            </div>
            <div class="carousel-item">
                <img src="./img/Parque Nacional Manu2.jpg" class="d-block w-100" alt="Manu2.jpg">
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
    <h1 class="fw-bolder shadow mb-3">MÁNCORA</h1>
        <p class="text-muted fs-5">
            ¿Te gustaría disfrutar de un paraíso de sol, arena y mar en el norte del Perú? Máncora te ofrece la oportunidad de relajarte en sus hermosas playas de aguas cálidas y cristalinas, practicar surf y kitesurf en sus olas perfectas, y conocer la rica cultura y gastronomía de la región. Ven y descubre Máncora, el destino ideal para escapar del estrés y vivir la aventura. 
        </p>
        <p class="text-muted fs-5">
            Máncora es un balneario y localidad que te sorprenderá con sus atractivos naturales y culturales. Aquí podrás disfrutar de playas como Las Pocitas, Vichayito o Los Órganos, donde podrás nadar, bucear, pescar o avistar ballenas. También podrás visitar el mirador del faro, el cementerio de Chauchilla, los acueductos de Cantalloc o el museo María Reiche. Máncora es un lugar que combina diversión, historia y naturaleza.
        </p>
        <p class="text-muted fs-5">
            Si buscas una experiencia única e inolvidable, tienes que visitar Máncora, el balneario más famoso del Perú. Aquí podrás disfrutar de un clima cálido todo el año, con una temperatura promedio de 29°C. Podrás alojarte en hoteles frente al mar, degustar la deliciosa comida peruana y participar en las fiestas nocturnas. También podrás practicar deportes acuáticos como surf, kitesurf o buceo, y admirar la biodiversidad marina. Máncora es un lugar que te enamorará con su encanto y alegría.
        </p>

        <div class="datos mt-5 mb-5 shadow p-3">
            <div class="row">
            <div class="col-sm-6 text-center">
                <div class="card">
                <div class="card-body">
                    <!-- <h1 class="card-title text-center fb-bold">18°C</h1> -->
                    <h2 class="text-center fw-bold">26°C</h2>
                    <p class="text-center text-muted fs-5">Min:17°C Max:36°C</p>
                </div>
                </div>
            </div>
            <div class="col-sm-6 text-center">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Mejor Epoca para Visitar</h5>
                    <h2 class="text-center fw-bolde">Diciembre - Marzo</h2>
                    <p class="text-muted fs-5">Durante estos meses se puede disfrutar de la gastronomía marina, las actividades acuáticas y las fiestas nocturnas.</p>
                </div>
                </div>
            </div>
            </div>
        </div>

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3756.258302501581!2d-81.05040733946011!3d-4.098078873089976!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x903696cbb7e58077%3A0x1b6e4477cff8aba1!2zTcOhbmNvcmEgUGl1cmEgUGVyw7o!5e0!3m2!1ses!2spe!4v1687650222669!5m2!1ses!2spe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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