<section>
<div class="container-fluid px-2 my-2">
  <div class="row justify-content-center">
    <div class="col-xl-7">
      <div class="card border-0 rounded-3 shadow-lg overflow-hidden">
        <div class="card-body p-0">
          <div class="row justify-content-center g-0">
            <div class="col-sm-6 d-none d-sm-block bg-image"></div><img src="assets\img\Aeropuerto-Corrientes5.jpg" alt="DAC"div>
            <div class="col-sm-6 p-4">
              <div class="text-center">
                <div class="h3 fw-light">Registro</div>
                <p class="mb-4 text-muted">Bienvenidos!</p>
              </div>
              <!--Formulario-->
              <form id="form_registro" data-sb-form-api-token="API_TOKEN">
                <!--nombre-->
                <div class="form-floating mb-3">
                  <input class="form-control" id="name" type="text" placeholder="Name" data-sb-validations="required" />
                  <label for="name">Nombre</label>
                  <div class="invalid-feedback" data-sb-feedback="name:required">Nombre es required.</div>
                </div>
                <!--apellido-->
                <div class="form-floating mb-3">
                  <input class="form-control" id="apellido" type="text" placeholder="apellido" data-sb-validations="required" />
                  <label for="apellido">Apellido</label>
                  <div class="invalid-feedback" data-sb-feedback="apellido:required">apellido es required.</div>
                </div>
                <!--email-->
                <div class="form-floating mb-3">
                  <input class="form-control" id="email" type="email" placeholder="Email Address" data-sb-validations="required,email" />
                  <label for="email">direccion de email</label>
                  <div class="invalid-feedback" data-sb-feedback="email:required">Email requerido.</div>
                  <div class="invalid-feedback" data-sb-feedback="email:invalid">Email no valido.</div>
                </div>

                <!--contraseña-->
                <div class="form-floating mb-3">
                  <input class="form-control" id="password" type="password " placeholder="password" data-sb-validations="required" />
                  <label for="password">Contraseña</label>
                  <div class="invalid-feedback" data-sb-feedback="password:required">contrseña requerida.</div>
                  <div class="invalid-feedback" data-sb-feedback="password:invalid">contraseña no válida</div>
                </div>

                <!--msj de errores-->
                <div class="d-none" id="submitSuccessMessage">
                  <div class="text-center mb-3">
                    <div class="fw-bolder">Registrarse</div>
                    <p>To activate this form, sign up at</p>
                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                  </div>
                </div>
                <div class="d-none" id="submitErrorMessage">
                  <div class="text-center text-danger mb-3">Error al registrarse!</div>
                </div>
                
                <!--boton submit-->
                <div class="d-grid">
                  <button class="btn btn-primary btn-lg " id="submitButton" type="submit">Registrarse</button>
                </div>
              </form>

            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
</section>
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>