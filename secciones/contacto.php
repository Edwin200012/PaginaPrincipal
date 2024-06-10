<div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contacto</h2>
          <p>
          ¡Nos encantaría saber de ti! Si tienes alguna pregunta, comentario o simplemente deseas ponerte en contacto con nosotros, aquí tienes todas las formas en las que puedes hacerlo:
          </p>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Ubicación:</h4>
                <p id="mostrarUbicacion"></p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Correo:</h4>
                <p id="mostrarCorreo"></p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Teléfono:</h4>
                <p>+52 <span id="mostrarTelefono"></span></p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

          <div style="margin-left: 20%; margin-top: 1%;" class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">Contáctanos</span></h5>
                </div>

<form action="controllers/enviardatoscontacto.php" class="row g-3 needs-validation" novalidate method="POST">

<div style="width: 90%; margin-left: 5%;">


  <div class="mb-3">
  <div style=" margin-left: 1%;">  
    <i class="fa-solid fa-clipboard-list" style="color: #74C0FC;"></i>
    <label style="margin-left: .5%;" for="nombre_formulario_contacto" class="form-label">Tu Nombre</label>
  </div>
    <input maxlength="50" minlength="3" style="border-radius: 15px;" type="text" class="form-control" id="nombre_formulario_contacto" name="nombre_formulario_contacto" required placeholder="Tu Nombre">
    <div class="invalid-feedback">Por favor, ingrese su nombre.</div>
  </div>

  <div class="mb-3">
  <div style=" margin-left: 1%;">  
    <i class="fa-solid fa-list-check" style="color: #74C0FC;"></i>
    <label style="margin-left: .5%;" for="correo_formulario_contacto" class="form-label">Tu correo</label>
  </div>
    <input maxlength="255" minlength="3" style="border-radius: 15px;" type="email" class="form-control" id="correo_formulario_contacto" name="correo_formulario_contacto" required placeholder="Tu Correo">
    <div class="invalid-feedback">Por favor, ingrese su correo.</div>
  </div>

  <div class="mb-3">
  <div style=" margin-left: 1%;">  
    <i class="fa-solid fa-dollar-sign" style="color: #74C0FC;"></i>
    <label style="margin-left: .5%;" for="precio_servicios" class="form-label">Asunto</label>
  </div>
    <input maxlength="100" minlength="1" style="border-radius: 15px;" type="text" class="form-control" id="asunto_formulario_contacto" name="asunto_formulario_contacto" required placeholder="Asunto">
    <div class="invalid-feedback">Por favor, ingrese el asunto.</div>
  </div>

  <div style=" margin-left: 1%;">  
    <i class="fa-solid fa-clipboard-list" style="color: #74C0FC;"></i>
    <label style="margin-left: .5%;" for="mensaje_formulario_contacto" class="form-label">Mensaje</label>
  </div>
    <textarea maxlength="50" minlength="3" style="border-radius: 15px; resize: none;" type="text" class="form-control" id="mensaje_formulario_contacto" name="mensaje_formulario_contacto" placeholder="Mensaje" rows="5" required ></textarea>
    <div class="invalid-feedback">Por favor, ingrese el mensaje.</div>
  </div>


  <div style="margin-bottom: 5%;" class="text-center">
    <button id="botonEnviarDatosContacto" style="width:300px; height:40px; border-radius: 30px; background-color: #77E6F2; color: #000807; border-color: silver;" class="btn btn-primary" type="submit">Enviar</button>
  </div>
  </div>

  

  
</form>
              </div>
            </div>

        </div>

      </div>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
      <script>
        $(document).ready(function() {
            mostrarDatosContactoPublicado();
        })

        function mostrarDatosContactoPublicado(){
            jQuery.ajax({
                url: 'controllers/mostrarcontactopublicado.php',
                type: 'GET',
                dataType: 'JSON',
                success: function (response){
                    let datos = response.registrocontactopublicado;
                    // Iterar sobre los datos y mostrar información
                    datos.forEach(item =>{
                        $('#mostrarUbicacion').append(item.ubicacion);
                        $('#mostrarCorreo').append(item.correo);
                        $('#mostrarTelefono').append(item.telefono);
                    });
                }
            }).fail(function() {
                alert("Error");
            });

        }
      </script>