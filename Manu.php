<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manú</title>
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
    <h1 class="fw-bolder shadow mb-3">PARQUE NACIONAL DEL MANÚ</h1>
        <p class="text-muted fs-5">
            ¿Te gustaría conocer uno de los lugares más biodiversos del planeta? El parque nacional del Manú te ofrece la oportunidad de explorar la selva amazónica en su estado más puro, con más de 200 especies de mamíferos, miles de aves y una variedad de climas y paisajes. Ven y descubre el patrimonio natural de la humanidad que se esconde en el sureste del Perú  
        </p>
        <p class="text-muted fs-5">
            El parque nacional del Manú es un destino ideal para los amantes de la naturaleza y la aventura. Aquí podrás navegar por sus ríos y lagunas, observar a los caimanes y jaguares, admirar las mariposas y las orquídeas, y visitar a las comunidades nativas que conservan sus tradiciones. El Manú es una reserva de biosfera que te sorprenderá con su belleza y diversidad
        </p>
        <p class="text-muted fs-5">
            Si buscas una experiencia única e inolvidable, el parque nacional del Manú te espera con sus maravillas. Este parque es el hogar de una gran variedad de flora y fauna, algunas endémicas y en peligro de extinción. Podrás ver desde el amanecer en el mirador Tres Cruces hasta las pinturas rupestres de Pusharo, pasando por la selva virgen y las montañas nevadas. El Manú es un lugar mágico que te conectará con la naturaleza y la cultura
        </p>

        <div class="datos mt-5 mb-5 shadow p-3">
            <div class="row">
            <div class="col-sm-6 text-center">
                <div class="card">
                <div class="card-body">
                    <!-- <h1 class="card-title text-center fb-bold">18°C</h1> -->
                    <h2 class="text-center fw-bold">20°C</h2>
                    <p class="text-center text-muted fs-5">Min:8°C Max:25°C</p>
                </div>
                </div>
            </div>
            <div class="col-sm-6 text-center">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Mejor Epoca para Visitar</h5>
                    <h2 class="text-center fw-bolde">Mayo - Octubre</h2>
                    <p class="text-muted fs-5"> En estos meses se puede evitar la mayor cantidad de días lluviosos y disfrutar mejor de la fauna y la flora del parque.</p>
                </div>
                </div>
            </div>
            </div>
        </div>

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2378798.399886272!2d-72.93980341736416!3d-11.702843484991948!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x916e698b3f0e0c1b%3A0xd0e6cb2cf366b9c7!2sParque%20Nacional%20del%20Manu!5e0!3m2!1ses!2spe!4v1687648971470!5m2!1ses!2spe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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