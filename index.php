<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MiPeru</title>
    <link rel="stylesheet" href="./MiPeru.css">
    <link rel="stylesheet" href="./bootstrap-5.0.2-dist/css/bootstrap.min.css">
</head>
<body>
    <header>
      <nav>
        <?php include './layout/nav.php'?>
      </nav>
        <!-- <div class="ratio ratio-16x9">
          <video muted autoplay loop>
            <source src="./video/videoperu.mp4">
          </video>
          <div class="top-50">
            <h1 class="display-3 fw-bold text-center shadow-sm p-3 rounded text-warning position-absolute top-25 start-50 translate-middle">Welcome to Perú</h1>
          </div>
        </div> -->

        <div class="card bg-dark text-white mt-5">
          <img src="./img/HD2.jpg" class="card-img" alt="Portada.jpg">
          <div class="card-img-overlay position-absolute top-50 start-0 translate-middle-y">
            <h5 class="card-title display-2 fw-bold text-danger"><strong>Welcome to Perú</strong></h5>
            <p class="card-text display-6">Descubre Perú con nosotros</p>
          </div>
        </div>

    </header>
    <main class="container shadow-lg p-3 mb-5 bg-body rounded">
      <p class="text-muted fs-5">
        Perú es un país que lo tiene todo: naturaleza, cultura, historia y gastronomía. En Perú podrás explorar la selva amazónica, el desierto costero, los Andes y el lago Titicaca, y admirar la biodiversidad y la belleza de sus paisajes. También podrás conocer el pasado milenario del Perú, con sitios arqueológicos como Machu Picchu, Chan Chan, Caral o Kuelap, que te revelarán los secretos de las civilizaciones prehispánicas. Y podrás vivir la cultura actual del Perú, con sus fiestas, su música, su arte y su gastronomía, reconocida como una de las mejores del mundo. Perú es un país que te sorprenderá y te cautivará.
      </p>

      <div class="d-flex justify-content-center text-center row gy bg-secondary">
        <div class="counter-container col-2">
          <div class="counter fw-bold" data-target="200"></div>
          <span class="text-warning fw-bolder">AREAS NATURALES</span>
        </div>

        <div class="counter-container col-2">
          <div class="counter fw-bold" data-target="14"></div>
          <span class="text-warning fw-bolder">PARQUES NACIONALES</span>
        </div>

        <div class="counter-container col-2">
          <div class="counter fw-bold" data-target="15"></div>
          <span class="text-warning fw-bolder">RESERVAS NACIONALES</span>
        </div>

        <div class="counter-container col-2">
          <div class="counter fw-bold" data-target="11"></div>
          <span class="text-warning fw-bolder">ZONAS RESERVADAS</span>
        </div>
      </div>
      <!-- Galeria -->
      <div class="text-center mt-5" id="galeria">
        <h1 class="fw-bolder shadow mb-3" style="font-size: 50px;color: #00172B;padding: 10px;">GALERÍA</h1>
        <div class="row">
          <div class="col-sm-4">
          <figure class="figure w-100">
            <div class="efecto">
              <a href="./Machu-Picchu.php">
              <img src="./img/machu-picchu-portada.jfif" class="figure-img img-fluid rounded" alt="machu-picchu-portada.jfif">
              </a>
            </div>
            <figcaption class="figure-caption">MACHU PICCHU</figcaption>
          </figure>
          </div>

          <div class="col-sm-4">
          <figure class="figure w-100">
            <div class="efecto">
              <a href="./Valle-Incas.php">
              <img src="./img/_34de4b26-fe9e-48b7-b588-8cf5dee43579.jfif" class="figure-img img-fluid rounded" alt="...">
              </a>
            </div>
            <figcaption class="figure-caption">VALLE SAGRADO</figcaption>
          </figure>
          </div>

          <div class="col-sm-4">
          <figure class="figure w-100">
            <div class="efecto">
              <a href="./colca.php">
              <img src="./img/colca-portada.jfif" class="figure-img img-fluid rounded" alt="colca-portada.jfif">
              </a>
            </div>
            <figcaption class="figure-caption">VALLE DE COLCA</figcaption>
          </figure>
          </div>

          <div class="col-sm-4">
          <figure class="figure w-100">
            <div class="efecto">
              <a href="./7colores.php">
              <img src="./img/montaña de colores.jpg" class="figure-img img-fluid rounded" alt="montaña de colores.jpg">
              </a>
            </div>
            <figcaption class="figure-caption">MONTAÑA DE COLORES</figcaption>
          </figure>
          </div>
        
          <div class="col-sm-4">
          <figure class="figure w-100">
            <div class="efecto">
              <a href="./Huacachina.php">
              <img src="./img/huacachina2.jpg" class="figure-img img-fluid rounded" alt="huacachina2.jpg">
              </a>
            </div>
            <figcaption class="figure-caption">HUACACHINA</figcaption>
          </figure>
          </div>

          <div class="col-sm-4">
          <figure class="figure w-100">
            <div class="efecto">
              <a href="./Ciudadela.php">
              <img src="./img/Chan Chan.jpg" class="figure-img img-fluid rounded" alt="Chan Chan.jpg">
              </a>
            </div>
            <figcaption class="figure-caption">CHAN-CHAN</figcaption>
          </figure>
          </div>
        
          <p class="text-center">
            <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target=".multi-collapse" aria-expanded="false" aria-controls="collapseExample"></button>
          </p>
          <div class="row collapse multi-collapse">

            <div class="col-sm-4">
            <figure class="figure w-100">
              <div class="efecto">
                <a href="./Ancash.php">
                <img src="./img/ancashperu.png" class="figure-img img-fluid rounded" alt="ancashperu.png">
                </a>
              </div>
              <figcaption class="figure-caption">HUASCARÁN</figcaption>
            </figure>
            </div>
            
            <div class="col-sm-4">
            <figure class="figure w-100">
              <div class="efecto">
                <a href="./Ballestas.php">
                <img src="./img/islas-ballestas.jfif" class="figure-img img-fluid rounded" alt="isalas-ballestas.jfif">
                </a>
              </div>
              <figcaption class="figure-caption">ISLAS BALLESTAS</figcaption>
            </figure>
            </div>
          
            <div class="col-sm-4">
            <figure class="figure w-100">
              <div class="efecto">
                <a href="./Lago-Titicaca.php">
                <img src="./img/Titicaca4.jfif" class="figure-img img-fluid rounded" alt="Titicaca.jfif">
                </a>
              </div>
              <figcaption class="figure-caption">LAGO TITICACA</figcaption>
            </figure>
            </div>

            <div class="col-sm-4">
            <figure class="figure w-100">
              <div class="efecto">
                <a href="./Manu.php">
                <img src="./img/manu-banner.jpg" class="figure-img img-fluid rounded" alt="manu-banner.jpg">
                </a>
              </div>
              <figcaption class="figure-caption">MANÚ</figcaption>
            </figure>
            </div>

            <div class="col-sm-4">
            <figure class="figure w-100">
              <div class="efecto">
                <a href="./Lineas.php">
                <img src="./img/lineas-portada.jfif" class="figure-img img-fluid rounded" alt="lineas-portada.jfif">
                </a>
              </div>
              <figcaption class="figure-caption">LINEAS DE NAZCA</figcaption>
            </figure>
            </div>
          
            <div class="col-sm-4">
            <figure class="figure w-100">
              <div class="efecto">
                <a href="./Mancora.php">
                <img src="./img/Mancora-portada.jpg" class="figure-img img-fluid rounded" alt="Mancora-portada.jpg">
                </a>
              </div>
              <figcaption class="figure-caption">MÁNCORA</figcaption>
            </figure>
            </div>
          </div>
        </div>
      </div>        
    </main>
    <footer>
      <?php include './layout/footer.php'?>
    </footer>
    <script src="./bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
    <script src="./MiPeru.js"></script>
</body>
</html>