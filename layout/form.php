
<div class="container mt-5 bg-dark">
  <div class="row">
    <div class="col-sm-5 col-md-6">

      <h2 class="fw-bold text-white">Agregue un comentario</h2>

      <form class="needs-validation" novalidate> 
        <div>
          <label for="validationCustom01" class="form-label text-white">Nombre Completo</label>
          <input type="text" class="form-control" id="validationCustom01" placeholder="Juan Perez" required>
        </div>
        <div>
          <label for="validationCustom02" class="form-label text-white">Correo Electrónico</label>
          <input type="email" class="form-control" id="validationCustom02" placeholder="jperez@gmail.com" required>
        </div>
        <div>
          <label for="exampleFormControlTextarea1" class="form-label text-white">Comentario</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
        </div>
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
          <label class="form-check-label" for="exampleCheck1">terminos y políticas</label>
        </div>
        <button type="submit" class="btn btn-danger mb-3">Publicar</button>
      </form>

    </div>
    <div class="col-sm-5 offset-sm-2 col-md-6 offset-md-0">
      <h2 class="fw-bold text-white">Comentarios</h2>
      <div id="carouselExampleControls" class="carousel slide mt-4" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            
          <div class="card mb-3">
            <div class="card-body">
              <h5 class="card-title">Christian Rodriguez</h5>
              <p class="card-text">
                This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
              </p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>

          </div>
          <div class="carousel-item">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Maria Gimenez</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit eligendi nemo tenetur laboriosam magni et nostrum harum sequi assumenda. Mollitia odio placeat tempora dolorem adipisci rerum quos praesentium fuga voluptates?</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Damaris Claros</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem optio cupiditate in, mollitia laudantium ab possimus vitae magni maxime distinctio nihil ex, quam iure id non voluptatem nisi. Nulla, distinctio!</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>

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

    </div>
  </div>   
</div>
<script>
   // Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
</script>